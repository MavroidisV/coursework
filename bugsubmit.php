<?php
//set date for the date Post and date fixed in bugs and comments
date_default_timezone_set('UTC');
$date = date('Y-m-d');

//error diagnostic
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//start a session
session_start();
$id=$_SESSION["userID"];
//database connection
include("connection.php");

//check fields; if they have something typed - you can have parameters
if(isset($_POST["submit"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    
// set variables for file upload
    $name = $_FILES['userfile']['name'];
    $tmpName  = $_FILES['userfile']['tmp_name'];
    $size = $_FILES['userfile']['size'];
    $type = $_FILES['userfile']['type'];

    $fp      = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    
        $fileName = addslashes($name);

    echo "<br>File $name uploaded<br>";
    
    //sql injection protection

    $title = mysqli_real_escape_string($db, $title);
    $description = mysqli_real_escape_string($db, $description);


    //sql statement 
    $sql = "INSERT INTO bugs (title,description,userID, postDate, name, size, type, content ) VALUES ('$title','$description','$id','$date','$name','$size','$type','$content')";
    $result = mysqli_query($db,$sql) or die(mysqli_error($db));
    if ($result) {
        echo "Thank You! You have submitted your bug form and you will be redirected to your home page";
        header("Refresh: 4; url=home.php");
    }
}
?>

