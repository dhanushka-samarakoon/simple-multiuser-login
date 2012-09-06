<?php

session_start(); // start session cookies
require("Login.class.php"); // pull in file
$login = new Login; // create object login

$login->authorize(); // make user login

?>


<h2>Hi there!</h2>
<a href="index.php?action=clear_login">logout</a>
