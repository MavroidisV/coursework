<?php
session_start();
include("connection.php");


    // Define $username and $password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // To protect from MySQL injection
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);

    //Check username and password from database
    $sql="SELECT userID FROM users WHERE username='$username' and password='$password'";

    $result=mysqli_query($db,$sql);

//If username and password exist in our database then create a session.
    //Otherwise echo error.
if(mysqli_num_rows($result) == 1)
{
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $username;
    $_SESSION['userID'] = $row['userID'];
    header("location: home.php"); // Redirecting To another Page
}else
{
    echo "Incorrect username or password.";

}

?>
