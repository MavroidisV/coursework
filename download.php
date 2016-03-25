<?php

include ('connection.php');

if(isset($_GET['id']))
{
// if id is set then get the file with the id from database
    
    
    $query = "SELECT name, type, size, content 
        FROM bugs WHERE bugID=" .$_GET["id"];

//fetch our result from the database
    $result=mysqli_query($db,$query);
    list($name, $type, $size, $content) =mysqli_fetch_assoc($result);

    header("Content-length: $size");
    header("Content-type: $type");
    header("Content-Disposition: attachment; filename=$name");
    echo $content;
    
    exit;
}

?>