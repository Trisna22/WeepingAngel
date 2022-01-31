# Weeping Angel Webshell

WeepingAngel is a webshell written in PHP and Javascript. It makes use of an encrypted connection and obfuscation of the PHP code.

## Levels of obfuscation
-The PHP code is mainly encrypted with AES.  
-The connection from the victim and the user is encrypted.  
-Function hiding, the purpose of the functions are obfuscated.

## Usage

When you find a file upload vuln with PHP execution, you can upload the weepingAngel.php script and get a webshell on the location of the script.  
The weepingAngel_nocomm.php is the file without the comments and extra obfuscation.

## Screenshot in action
![Screenshot](/weepingAngel_screenshot.png)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
[MIT](https://choosealicense.com/licenses/mit/)

## Credits
For the awesome terminal. [JQueryTerminal](https://terminal.jcubic.pl/)
