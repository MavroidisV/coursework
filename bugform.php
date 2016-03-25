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

<form method="post" action="bugsubmit.php" autocomplete="off" enctype="multipart/form-data" class="box-form">


    <h1 class="h1">Bug Form</h1>
    

        
            <label for="title" class="p">Title:</label>
            <input type="text" name="title" class="input-text" required>
        

        
            Description:
            <textarea name="description" cols="45" rows="15"  class="input-text1" >
            
                
            
            <input name="userfile" type="file" id="userfile" cols="55" rows="15"  class="input-text1">
            
            
      
    <br>
    <div style="text-align:center">
        <input type="submit" name="submit" value="Submit your form">
    </div>

</form>
</body>
</html>