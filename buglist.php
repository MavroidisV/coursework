<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<h2 class="h2">Bug List</h2>

<?php

session_start();

include("connection.php");

//select everything from our bugs table
$sql="SELECT * FROM bugs";

//fetch our result from the database
$result=mysqli_query($db,$sql);


//echo '<h3> </h3>'.$_SESSION["userID"];
echo '<table border="1" style="width:60%" class="box-table" class="input-text">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'Bug ID'.
    '</th>'.'<th>'.'Title'.'</th>'.'</table>';


//we scan through each row in the response

while ($row=mysqli_fetch_assoc($result)){

    //get the title and id from the bug
    $bugTitle=$row['title'];
    $bugID=$row['bugID'];


    echo '<table border="1" style="width:60%" class="box-table" class="input-text">'.'<col width="100px">'. '<col width="100px">'.'<col width="100px">'.'<tr>'.'<th>
    <a href="mybugs.php?id='.$bugID.'">'.$bugID.'</a>'.'</th>'.'<th>'.$bugTitle.'</th>'.'</table>';
    //echo $bugID;
    //echo $bugTitle;


    //write the link to the page
    //echo '<a href="mybugs.php?id="'.$bugID.'>'.$bugTitle.'</a>';
    //echo '<td><a href="mybugs.php?id=',$bugID,'">',$bugTitle,'</a></td>';
 
}
?>

</body>

