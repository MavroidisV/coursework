<?php

include("connection.php");
//check if the user has typed the requirements in the fields
//in the html we have asked for required fields in first name and last name, but not in php; so with a proxy they can be bypassed;
if(isset($_POST["submit"]))
{
    $firstname1= $_POST["firstname"];
    $lastname1 = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone= $_POST ["phone"];
    
//sql injection protection
    $name = mysqli_real_escape_string($db, $username);
    $email = mysqli_real_escape_string($db, $email);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);

//email check; if you find the same email in the daatabase show error &msg else proceed with input values
    $sql="SELECT email FROM users WHERE email='$email'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
    {
        $msg = "Sorry...This email already exists...";
    }
    else
    {
        
        $query = mysqli_query($db, "INSERT INTO users (firstname, lastname, username, password, email, phone)VALUES ('$firstname1','$lastname1','$username','$password', '$email', '$phone')")or die(mysqli_error($db));
        if(($query)==1)
        {
           //echo msg and redirect user after 4 seconds
            echo "Thank You! you are now registered and you will be redirected to Log In for the first time";
            header("Refresh: 4; url=userlogin.php");
           
        }

    }
}
?>