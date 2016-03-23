<?php

include("connection.php");
//check if it is set; if the user has typed the requirements in the fields
//in the html we have asked for required fields in first name and last name, but not in php; so with a proxy they can be bypassed;
if(isset($_POST["submit"]))
{
    $firstname1= $_POST["firstname"];
    $lastname1 = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone= $_POST ["phone"];

    $name = mysqli_real_escape_string($db, $username);
    $email = mysqli_real_escape_string($db, $email);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);


    $sql="SELECT email FROM users WHERE email='$email'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
    {
        $msg = "Sorry...This email already exists...";
    }
    else
    {
        //echo $name." ".$email." ".$password;
        $query = mysqli_query($db, "INSERT INTO users (firstname, lastname, username, password, email, phone)VALUES ('$firstname1','$lastname1','$username','$password', '$email', '$phone')")or die(mysqli_error($db));
        if($query)
        {
            echo "Thank You! you are now registered.";
            header("location: home.php");
        }

    }
}
?>