<?php
session_start();
include("connection.php");
//check if it is set; if the user has typed the requirements in the fields
//in the html we have asked for required fields in first name and last name, but not in php; so with a proxy they can be bypassed;
if(isset($_POST["submit"]))
{
    $title= $_POST["title"];
    $description = $_POST["description"];
    //$userID = $_POST ["$userID"];

    $title = mysqli_real_escape_string($db, $title);
    $description = mysqli_real_escape_string($db, $description);



    $sql = "INSERT INTO bugs (title, description,)VALUES('$title','$description')";
        //if(($query)==1)
        {
            echo "Thank You! ";
            
        }

    }

?>