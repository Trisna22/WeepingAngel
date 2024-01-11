# Weeping Angel Webshell

WeepingAngel is a webshell written in PHP and Javascript. It makes use of an encrypted connection and obfuscation of the PHP code.

## Levels of obfuscation
-The PHP code is mainly encrypted with AES.
-Function hiding, the purpose of the functions are obfuscated.
-The connection from the victim and the user is encrypted.(not yet)  

## Usage
First run the obfuscate.py script to build the WeepingAngel script with use of password and dynamic generated obfuscation.  
When you find a file upload vuln with PHP execution, you can upload the upload.php script and get a webshell on the location of the script.  

## Screenshot in action
![Screenshot](/weepingAngel_screenshot.png)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
[MIT](https://choosealicense.com/licenses/mit/)

## Credits
For the awesome terminal. [JQueryTerminal](https://terminal.jcubic.pl/)
