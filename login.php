<?php
include_once("init.php");


$users = include_once("./data/users.php");

/*
 *  if user credential exist on $users then
 *  		- create SESSION vars for the auth
 *  		- redirect on dashboard.php
 *    else
 *    		- redirect on login form with error
 *
 */
