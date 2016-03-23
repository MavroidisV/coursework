<body>
<?php

session_start();
    include("connection.php");

//select everything from our bugs table where the id is right
$sql="select * from bugs where bugID=" .$_GET["id"];

//fetch our result from the database
$result=mysqli_query($db,$sql);

//we can scan through each row in the response
$row=mysqli_fetch_assoc($result);

//get the title and id from the bug
$bugTitle=$row['title'];
$bugID=$row['bugID'];
$bugDesc=$row['description'];

echo "<h2>".$bugTitle." </h2>";
echo "<p>".$bugDesc."</p>";




?>
</body>