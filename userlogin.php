<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>PHP Login Form with Session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="loginvalidation.php" class="box-table">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username" class="input-text"/><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" class="input-text" />  <br><br>
        <input type="submit" name="submit" value = "login" class="input-text"/>
    </form>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

</div>
</body>
</html>
 