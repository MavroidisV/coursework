<?php

include("connection.php");
include("check.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>

<form method="post" action="bugsubmit.php" autocomplete="off" enctype="multipart/form-data">


    <h1 class="h1">Bug Form</h1>
    <table cellspacing="10px" class="box-table">

        <tr>
            <td><label for="title" class="p">Title:</label><br></td>
            <td><input type="text" name="title" class="input-text" required></td>
        </tr>

        <tr>
            <td class="p">Description:<br></td>
            <td><textarea name="description" cols="45" rows="15"  class="input-text1" ></textarea>
            </td>
        </tr>
        
        <tr>
            <td align="right"><input name="userfile" type="file" id="userfile" class="input-text1">
            <td align="right"><input type="hidden" name="MAX_FILE_SIZE" value="5000000"></td>
            
            
        </tr>


    </table>
    <br>
    <div style="text-align:center">
        <input type="submit" name="submit" value="Submit your form">
    </div>

</form>
</body>
</html>