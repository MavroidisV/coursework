<body>

<h2>Bug List</h2>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

include("connection.php");

//select everything from our bugs table
$sql="SELECT * FROM bugs";

//fetch our result from the database
$result=mysqli_query($db,$sql);

//we scan through each row in the response

while ($row=mysqli_fetch_assoc($result)){

    //get the title and id from the bug
    $bugTitle=$row['title'];
    $bugID=$row['bugID'];
    
    echo $bugID;
    echo $bugTitle;

    $_SESSION['bugID'] = $row['bugID'];
    
   

    //write the link to the page
   echo '<a href="mybugs.php?id="'.$bugID.'>'.$bugTitle.'</a>';
}
?>
</body>

