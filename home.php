<?php
include("check.php");

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <style>h1 {text-align: center} </style>
</head>

<body>

<h1>Hello, <em><?php echo $login_user;?>!</em></h1>


<table cellspacing="10px" class="box-table" class="indextable">

    <tr>
        <td><a href = bugform.php>Bug Report</a><br></td>
    </tr>
    

    <td><a href = buglist.php>Bug List</a><br></label></td>
    
    </tr>

    <tr>
        <td><a href = comments.php>edo eimaste</a></td>
        
    </tr>

    <tr>
        <td><a href="logout.php" style="font-size:18px">Logout?</a></td>

    </tr>
    
</table>


</body>
</html>
 