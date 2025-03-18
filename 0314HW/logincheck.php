<?php
    session_start();
?>

<h1>Login Result</h1>

<?php

    $defaultUserName="user";
    $defaultUserPwd="12345";

    $defaultAdminName="admin";
    $defaultAdminPwd="54321";

    $userName=$_POST["userName"];
    $userPwd=$_POST["userPwd"];

    if ($defaultUserName==$userName && $defaultUserPwd==$userPwd) {
        echo "Login Success";
        $_SESSION["user"]=1;
        $cookiedate=strtotime("+30 seconds", time());
        setcookie("userName", $defaultUserName,$cookiedate);
        header("Location:user.php");
    } else if ($defaultAdminName==$userName && $defaultAdminPwd==$userPwd) {
        echo "Admin Login Success";
        $_SESSION["admin"]=1;
        $cookiedate=strtotime("+30 seconds", time());
        setcookie("userName", $defaultAdminName,$cookiedate);
        header("Location:admin.php");
    } else {
        echo "Login failed, will send you back to login again in three seconds.";
        header("Refresh:3;url='login.php'");
    }

?>