<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include("connection.php");
$id=$_SESSION["userID"];
//check if it is set; if the user has typed the requirements in the fields
//in the html we have asked for required fields in first name and last name, but not in php; so with a proxy they can be bypassed;
if(isset($_POST["submit"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];
   

    $title = mysqli_real_escape_string($db, $title);
    $description = mysqli_real_escape_string($db, $description);



    $sql = "INSERT INTO bugs (title,description,userID) VALUES ('$title','$description','$id')";
    $result = mysqli_query($db,$sql) or die(mysqli_error($db));
    if ($result) {
        echo "Thank You! your form is now submitted.";
        echo "Please <a href = 'userlogin.php'>Login</a>";
    }
}
?>
