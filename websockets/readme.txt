Launch with "php -f %path%/server.php" command in apache shell
Here open your apache emulator shell, go to the folder with "server.php" and execute command php -f server.php 
Enjoy ^^

Or by inserting #/usr/bin/env php into the first line of the script and by making it executable.
$ head -n 1 your_sript.php
#/usr/bin/env php
$ chmod +x your_script.php
$ ./your_script.php
Note: this example only works on UNIX systems.


For basic functionality of this WebSockets library see http://www.binarytides.com/websockets-php-tutorial/