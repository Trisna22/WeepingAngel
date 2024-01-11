<?php

	if (count($argv) != 3) {
		echo "Usage: " . $argv[0] . " [key] [iv]\n";
		die();
	}

	$KEY = $argv[1];
	$IV = $argv[2];

	$PAYLOAD = fread(fopen("stage2.bin", "r"), filesize("stage2.bin"));

	echo base64_encode(openssl_encrypt($PAYLOAD, "AES-128-CTR", $KEY, OPENSSL_RAW_DATA, $IV));
?>
