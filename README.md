simple multi user login script
==============================

Download
--------
Download as a [zip file](simple-multiuser-login/zipball/master)

How to install
--------------

* Place the Login.class.php in the directory with the php file you need to protect.
* Remove the default login information and add your own

````php
// username and password to login into page
$userArray = array(
'admin' => 'secret',
'root' => 'mypassword',
);
````

* Add the following piece of code to the top of the php file you need to protect.

````php
<?php
session_start(); // start session cookies
require("Login.class.php"); // pull in file
$login = new Login; // create object login
$login->authorize(); // make user login
?>
````