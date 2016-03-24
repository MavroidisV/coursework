<?php

include("connection.php");
include("regsubmit.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
<form method="post" action="regsubmit.php" autocomplete="on">


    <h1 class="h1">Create account</h1>
    <table cellspacing="10px" class="box-table">

        <tr>
            <td class="input-text"><label for="firstname">First name:</label></td>
            <td class><input type="text" name="firstname"required></td>
        </tr>

        <tr>
            <td class="input-text1"><label for="lastname">Last name:</label></td>
            <td class="input-text1"><input type ="text" name="lastname" required></td>
        </tr>

        <tr>
        <td class="input-text1"><label for="username">Username:</label></td>
        <td class="input-text1"><input type = "text" name="username"  required></td>
        </tr>

        <tr>
            <td class="input-text1"><label for="password">Password:</label></td>
            <td class="input-text1"><input type ="password" name="password" required></td>
        </tr>

        <tr>
            <td class="input-text1"><label for="email">Email:</label></td>
            <td class="input-text1"><input type ="email" name="email"required><br><?php echo $msg;?></td>
        </tr>

        <tr>
            <td class="input-text1"><label for="phone">Phone:</label></td>
            <td class="input-text1"><input type="text" name="phone"></td>
        </tr>

    </table>
    <br>
    <div style="text-align:center">
        <input type="submit" name="submit" value="Create your account">
    </div>

</form>
</body>
</html>