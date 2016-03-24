
<?php

//refresh the page every 5 mins*******n
header('Refresh: 300'); ?>

<body>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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

echo "<h3>BUG ID:" .$bugID."</h3>";
echo "<h3>".$bugTitle." </h3>";
echo "<p>".$bugDesc."</p>";

//!!!!!!!!!show the comments in the main page!!!!!!!!!!
echo "<h2>Comments of all users </h2>";"<br>";

$sql1="select * from comments where bugID=" .$_GET["id"];

//fetch our result from the database
$result=mysqli_query($db,$sql1);

//scan through each row
while ($row=mysqli_fetch_assoc($result)){
    //get the tile and id from the bug
    $userID=$row['userID'];
    $comment = $row['descriptionC'];
    //write the link to the page
    echo "<h4>User ".$userID. " commented</h4>";
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
        echo "Thank You! you have submitted a comment! We will reload your page now......and your page will reload every 5 mins!!!";
        header("Refresh: 5;");
    }else {
        echo "ERROR: Could not be able to execute" . $qry . mysqli_error($db);
    }
    
}

?>
<br><br>
<form method="post" action=>
    <p>Comments:</p>
    <textarea name="comment" cols="40" rows="5"  ></textarea>
    <p></p>
    <input type="submit" name="submit" value="submit">
</form>

<a href = home.php>Go back to Home</a>


</body> 