<?php
include('loginvalidation.php'); // Include Login Script

if ((isset($_SESSION['username']) != ''))
{
    header('Location: home.php');
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>Login</h1>

    <br><br>
    <form method="post" action="loginvalidation.php" class="box-form" autocomplete="on">
        <label for = "username">Username:</label>
        <input type="text" name="username" placeholder="username" class="input-text"/><br>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="password" class="input-text" />  <br>
        <input type="submit" name="submit" value = "login" class="input-text"/><br>
        Not already a user? Please <a href  = "register.html"> register </a>
    </form>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

</body>
</html>
 