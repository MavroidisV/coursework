<?php
include('connection.php');
session_start();
$user_check=$_SESSION['username'];
$id_check=$_Session['result'];

$ses_sql = mysqli_query($db,"SELECT username FROM users WHERE username='$user_check' ");
$ses_sql1 = mysqli_query($db,"SELECT userID FROM users WHERE userID='$id_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$row1=mysqli_fetch_array($ses_sql1,MYSQLI_ASSOC);

$login_user=$row['username'];
$login_user1=$row['userID'];

if(!isset($user_check))
{
header("Location: register.php");
}
?>