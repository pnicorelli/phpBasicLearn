<?php
include_once("init.php");

/*
 * if there is an active session redirect on dashboard.php
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>phpBasicLearn</title>
</head>

<body>
    <?php
    /*
     * if there erros occoured on login show the error (eg. "user not found"/"password empty"...)
     */
    ?>
    <div id="loginBox">
        <form id="loginForm" method="POST" action="login.php">
            <div class="loginRow">
                <input type="text" name="username" id="username" value="" placeholder="username">
            </div>
            <div class="loginRow">
                <input type="password" name="password" id="password" value="" placeholder="password">
            </div>
            <div class="loginRow">
                <button>Sign In</button>
            </div>
        </form>
    </div>
</body>

</html>
