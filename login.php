<?php
//show all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

//fix some LAMP distributions error
session_start();

//dump every vars in the SESSION
echo "SESSION: ";
echo "<code>";
var_dump($_SESSION);
echo "</code>";

//dump every vars in REQUEST (GET/POST)
echo "<br><br>REQUEST: ";
echo "<code>";
var_dump($_REQUEST);
echo "</code>";
