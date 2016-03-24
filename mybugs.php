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

echo $bugID;
echo "<h2>".$bugTitle." </h2>";
echo "<p>".$bugDesc."</p>";
 
//for comments look down


$id=$_SESSION["userID"];

if(isset($_POST["submit"])) {
    $comment = $_POST["comment"];

    $comment = mysqli_real_escape_string($db, $comment);

    $qry = "INSERT  INTO comments(bugID, userID, descriptionC) VALUES ('$bugID', '$id','$comment')";

    if (mysqli_query($db, $qry)) {
        echo "Records added successfully.";

        //redirect user to login screen
        //header("location: index.php");
    } else {
        echo "ERROR: Could not be able to execute" . $qry . mysqli_error($db);
    }

}


?>

<form method="post" action="mybugs.php">
    <p>Comments</p>
    <textarea name="comment" cols="40" rows="5"  ></textarea>
    <p></p>
    <input type="submit" name="submit" value="submit">



</body>