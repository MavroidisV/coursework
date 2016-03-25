<?php
include('connection.php');
//session start
session_start();
//retrieve currently logged in user
$user_check=$_SESSION['username'];
$id_check=$_Session['result'];
//checks if the username values stored in the session variable actually exists in the database.
$ses_sql = mysqli_query($db,"SELECT username FROM users WHERE username='$user_check' ");
$ses_sql1 = mysqli_query($db,"SELECT userID FROM users WHERE userID='$id_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$row1=mysqli_fetch_array($ses_sql1,MYSQLI_ASSOC);
//if a username is found its stored in the variable below and user id
$login_user=$row['username'];
$login_user1=$row['userID'];
//if not found redirect 
if(!isset($user_check))
{
header("Location: login.php");
}
?>