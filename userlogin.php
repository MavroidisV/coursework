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
    <title>Login</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <style>h1 {text-align: center} </style>
</head>

<body>
<h1>Login</h1>

    <br><br>
    <form method="post" action="loginvalidation.php" class="box-form" autocomplete="on">
        <label for = "username">Username:</label>
        <input type="text" name="username" placeholder="username" class="input-text"/><br>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="password" class="input-text" />  <br>
        
        <div class="error"><?php echo $error;?><?php //echo $username; echo $password;?></div>
        
        <input type="submit" name="submit" value = "login" class="input-text"/><br><br>
        Not already a user? Please <a href  = "register.html"> register </a>
    </form>
    

</body>
</html>
 