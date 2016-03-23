<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include("connection.php");
    include ("buglist.php");
//select everything from our bugs table where the id is right
$sql="select bugID,title,description from bugs where bugID= ".$_GET["bugID"];

//fetch our result from the database
$result=mysqli_query($db,$sql);

//we can scan through each row in the response
$row=mysqli_fetch_assoc($result);

//get the title and id from the bug
$bugTitle=$row['title'];
$bugID=$row['bugID'];
$bugDesc=$row['description'];

echo "<h2>".$bugTitle." </h2>";
echo "<p>".$bugDesc."</p>"




?>
</body>