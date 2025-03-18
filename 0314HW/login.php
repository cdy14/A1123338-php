<?php
    if (isset($_COOKIE["userName"])) {
        echo "Welcome back, ".$_COOKIE["userName"];
    }
?>

<h1>Please Login to use the system</h1>

<form action="logincheck.php" method="post">

    Please input your username: <input type="text" name="userName"><br><br>
    Please input your password: <input type="password" name="userPwd"><br><br>
    <input type="submit"><br>
    
</form>