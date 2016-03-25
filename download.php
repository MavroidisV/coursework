<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include ('connection.php');

if(isset($_GET['id']))
{
// if id is set then get the file with the id from database
    
    
    $query = "SELECT name, type, size, content 
        FROM bugs WHERE bugID=" .$_GET["id"];
    

/*fetch our result from the database
    $result=mysqli_query($db,$query);
    $row=mysqli_fetch_assoc($result);
    $name=['name'];
    $size=['size'];
    $type=['type'];
    $content=['content'];
*/
    $result = mysqli_query($db,$query) or die('Error, query failed');
    list($name, $type, $size, $content) =                                  mysqli_fetch_array($result);
    
    header("Content-length: $size");
    header("Content-type: $type");
    header("Content-Disposition: attachment; filename=$name");
    echo $content;
    

    

}

?>

</body>
