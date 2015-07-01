<?php

include_once("init.php");
/*
 * if auth SESSION is not set redirect on login form with error: "SignIn to view the page"
 */

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>phpBasicLearn</title>
</head>

<body>
    <div id="HelloWorld">
        Hey <?php echo $_SESSION["user"];?>, nice to see you back!
    </div>

    <div id="logoutButton">
        <a href="logout.php">That's enough for today!</a>
    </div>

</body>

</html>
