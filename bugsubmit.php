<?php
session_start();
include("connection.php");
include("check.php");
$id=$_SESSION["userID"];
//check if it is set; if the user has typed the requirements in the fields
//in the html we have asked for required fields in first name and last name, but not in php; so with a proxy they can be bypassed;
if(isset($_POST["submit"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];
   

    $title = mysqli_real_escape_string($db, $title);
    $description = mysqli_real_escape_string($db, $description);


    $query = mysqli_query($db, "INSERT INTO bugs (title,description,userID)VALUES ('$title','$description','$id')") or die(mysqli_error($db));
    if (($query) == 1) {
        echo "Thank You! you are now registered.";
        echo "Please <a href = userlogin.php>Login</a>";
    }
}
?>