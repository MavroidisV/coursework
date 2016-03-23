<?php

include("connection.php");
include("submit.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>h1 {text-align: center} </style>
</head>
<body>
<form method="post" action="regsubmit.php" autocomplete="on">


    <h1>Create account</h1>
    <table cellspacing="10px" class="box-table">

        <tr>
            <td><label for="firstname">First name:</label></td>
            <td><input type="text" name="firstname" class="input-text" required></td>
        </tr>

        <tr>
            <td><label for="lastname">Last name:</label></td>
            <td><input type ="text" name="lastname" class="input-text" required></td>
        </tr>

        <td><label for="username">Username:</label></td>
        <td><input type = "text" name="username" class="input-text" required></td>
        </tr>

        <tr>
            <td><label for="password">Password:</label></td>
            <td><input type ="password" name="password" class="input-text" required></td>
        </tr>

        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type ="email" name="email" class="input-text" required><br><?php echo $msg;?></td>
        </tr>

        <tr>
            <td><label for="phone">Phone:</label></td>
            <td><input type="text" name="phone" class="input-text"></td>
        </tr>

    </table>
    <br>
    <div style="text-align:center">
        <input type="submit" name="submit" value="Create your account">
    </div>

</form>
</body>
</html>