<?php

/*include("connection.php");
include("check.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>h1 {text-align: center} </style>
</head>
<body>

<form method="post" action="bugsubmit.php" autocomplete="off">


    <h1>BUG FORM</h1>
    <table cellspacing="10px" class="box-table">

        <tr>
            <td><label for="title">Title:</label></td>
            <td><input type="text" name="title" class="input-text" required></td>
        </tr>

        <tr>
            <td><label for="description">Description:</label></td>
            <td><input type ="text" name="description" class="input-text" required></td>
        </tr>


    </table>
    <br>
    <div style="text-align:center">
        <input type="submit" name="submit" value="Submit your form">
    </div>

</form>
</body>
</html>