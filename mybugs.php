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

//!!!!!!!!!show the comments in the main page!!!!!!!!!!

$sql1="select * from comments where bugID=" .$_GET["id"];

//fetch our result from the database
$result=mysqli_query($db,$sql1);

//scan through each row
while ($row=mysqli_fetch_assoc($result)){
    //get the tile and id from the bug
    $commentTitle=$row['title'];
    $comment = $row['comment'];
    //write the link to the page
    echo '<h3>'.$title.'</h3>';
    echo '<p>'.$comment.'</p>';
}

 //-------------------------------------------
//for comments look down

$id=$_SESSION["userID"];
if(isset($_POST["submit"])) {
    
    $comment = $_POST["comment"];

    $comment = mysqli_real_escape_string($db, $comment);
    
    $qry = "INSERT  INTO comments(bugID, userID, descriptionC) VALUES ('$bugID', '$id','$comment')";

    $result2 = mysqli_query($db,$qry) or die(mysqli_error($db));
    if ($result2) {
        echo "Thank You! your comment is now submitted.";
        echo "Please <a href = 'userlogin.php'>Login</a>";
    }else {
        echo "ERROR: Could not be able to execute" . $qry . mysqli_error($db);
    }
    

        //redirect user to login screen
        //header("location: index.php");
   
}


?>

<form method="post" action=>
    <p>Comments</p>
    <textarea name="comment" cols="40" rows="5"  ></textarea>
    <p></p>
    <input type="submit" name="submit" value="submit">
</form>


</body>