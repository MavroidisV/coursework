<?php
session_start();
?>

<?php

$uid=$_SESSION["userid"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Change Bug Fixed-Status</title>
</head>
<body>
<form method="post" action="comments.php">
    <?php


    include ("connect.php");//Establishing connection with our database
    //$dg = new C_DataGrid("SELECT * FROM users", "uid", "users"); This code is not functioning the way i want
    $sql="SELECT bugID,title,bugDesc FROM bugs";//select required dataset from database
    //"SELECT bugID,title,bugDesc FROM bugs WHERE uid=1";//select required dataset from database
    $result=mysqli_query($db,$sql);//fetch data from database

    echo '<h3>Comment on bugs </h3>'.$_SESSION["$userid"];
    echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'Bug ID'.
        '</th>'.'<th>'.'Title'.'</th>'.'<th>'.'Description'.

        '</th>'.'<th>'.'Select Bug'.'</th>'.'</table>';

    //loop through the database and fetch all users with userStatus=0
    WHILE($row=mysqli_fetch_assoc($result))
    {
        //get the userid, userTpe,userStatus,username
        $bugid=$row['bugID'];
        $title=$row['title'];
        $bugdesc=$row['bugDesc'];
        // $username=$row['username];

        echo '<table border="1" style="width:60%">'.'<col width="60">'. '<col width="60">'.'<col width="60">'.'<col width="60">'.'<tr>'.
            '<a href="changeBugStatus.php?uid="'.$bugid.'>'.'<tr>'.'<td>'.$bugid.'</td>'.'<td>' . $title.'</td>'.'<td>'.
            $bugdesc.'</td>'.'<td>'.
            "<input type='radio' name='commentRadio' value='$bugid'>".
            '</td>'.'</a>'.'<br>'.'</tr>'.'</table>';



    }
    //echo '<a href="commen">';
    ?>

    <p>Comments</p>
    <textarea name="comment" cols="40" rows="5"  ></textarea>
    <p></p>
    <input type="submit" name="submit" value="submit">
    <?php

    if(isset($_POST['submit'])){//to run PHP script on submit
        //get variables for comment table
        $currentBugID = $_POST['commentRadio'];

        $comment= $_POST['comment'];

        // echo $currentBugID;
        //echo $uid;
        // echo $comment;

        $qry="INSERT  INTO bjtscomments(bugID, uid, bjtscomment) VALUES ('$currentBugID', '$uid','$comment')";

        if(mysqli_query($db, $qry)){
            echo "Records added successfully.";

            //redirect user to login screen
            //header("location: index.php");
        } else{
            echo "ERROR: Could not be able to execute" .$qry. mysqli_error($db);
        }
        // Close connection
        mysqli_close($db);
    }
    ?>


</form>

</body>