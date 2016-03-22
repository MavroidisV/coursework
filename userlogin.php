<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>PHP Login Form with Session</h1>

    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="loginvalidation.php" class="box-form" autocomplete="on">
        <label for = "username">Username:</label><br>
        <input type="text" name="username" placeholder="username" class="input-text"/><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" placeholder="password" class="input-text" />  <br><br>
        <input type="submit" name="submit" value = "login" class="input-text"/>
        Not already a user? Please register <a href  = "register.html"> here </a>
    </form>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

</body>
</html>
 