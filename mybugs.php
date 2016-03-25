<link rel="stylesheet" type="text/css" href="style.css">
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

date_default_timezone_set('UTC');
$date = date('Y-m-d');

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

//echo "<h3 class='h3'>BUG ID:" .$bugID."</h3>";
echo "<h3 class='h3a'>".$bugTitle." </h3>";
echo "<p>".$bugDesc."</p>";
echo "<br>";

//!!!!!!!!!show the comments in the main page!!!!!!!!!!
echo "<h3 class='h3a'>Comments of all users </h3>";

$sql1="select * from comments where bugID=" .$_GET["id"];

//fetch our result from the database
$result=mysqli_query($db,$sql1);

//scan through each row
while ($row=mysqli_fetch_assoc($result)){
    //get the tile and id from the bug
    $datepost=$row ['postDate'];
    $userID=$row['userID'];
    $comment = $row['descriptionC'];

    //sql for username

    $sql2="select username from users where userID=" .$userID;
    $result2=mysqli_query($db,$sql2);
    $row = mysqli_fetch_assoc($result2);
    $username=$row ['username'];
    //write the link to the page
    echo $username;
    echo $userID;
    echo "<h4 class='h4'>".$username. ".$datepost  commented:</h4>";
    echo $comment;
}

 //-------------------------------------------
//for comments look down

$id=$_SESSION["userID"];
if(isset($_POST["submit"])) {
    
    $comment = $_POST["comment"];

    $comment = mysqli_real_escape_string($db, $comment);
    
    $qry = "INSERT  INTO comments(bugID, userID, descriptionC, postDate) VALUES ('$bugID', '$id','$comment','$date')";

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
    <p class="p">Comment now:</p>
    <textarea name="comment" cols="40" rows="5" class="input-text1" ></textarea>
    <p></p>
    <input type="submit" name="submit" value="submit">
</form>

<a href = home.php>Go back to Home</a>


</body> 