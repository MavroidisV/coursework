
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Change Bug Fixed-Status</title>
</head>

<body>

<form method="post" action="comments.php">
    
    <?php
    session_start();
    $uid=$_SESSION["userID"];
    echo $uid;


    
    //Establishing connection with our database
    include ("connect.php");
    //select required dataset from database
    $sql="SELECT bugID,title,description FROM bugs";
    //fetch data from database
    $result=mysqli_query($db,$sql);
    
    //creation of tables - column names and then with the while loop for each iteration create row and assign values

    echo '<h3>Comment on bugs </h3>'.$_SESSION["userID"];
    echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'Bug ID'.
        '</th>'.'<th>'.'Title'.'</th>'.'<th>'.'Description'.

        '</th>'.'<th>'.'Select Bug'.'</th>'.'</table>';

    //loop through the database and fetch all users with userStatus=0
    WHILE($row=mysqli_fetch_assoc($result))
    {
        //get the userid, userTpe,userStatus,username
        $bugID=$row['bugID'];
        $title=$row['title'];
        $description=$row['description'];
        

        echo '<table border="1" style="width:60%">'.'<col width="60">'. '<col width="60">'.'<col width="60">'.'<col width="60">'.'<tr>'.
            '<a href="bugStatusChange.php?uid=" '.$bugID.'>'.'<tr>'.'<td>'.$bugID.'</td>'.'<td>' . $title.'</td>'.'<td>'.
            $description.'</td>'.'<td>'.
            "<input type='radio' name='commentRadio' value='$bugID'>".
            '</td>'.'</a>'.'<br>'.'</tr>'.'</table>';



    }
    ?>

    <p>Comments</p>
    <textarea name="comment" cols="40" rows="5"  ></textarea>
    <p></p>
    <input type="submit" name="submit" value="submit">
    <?php

    if(isset($_POST['submit'])){
        
        $currentBugID = $_POST['commentRadio'];

        $comment= $_POST['comment'];

         echo $currentBugID;
         echo $uid;
         echo $comment;

        $qry="INSERT  INTO comments(bugID, userID, descriptionC) VALUES ('$currentBugID', '$uid','$comment')";

        if(mysqli_query($db, $qry)){
            echo "Records added successfully.";
        } 
        else{
            echo "ERROR: Could not be able to execute" .$qry. mysqli_error($db);
        }
        // Close connection
        mysqli_close($db);
    }
    ?>


</form>

</body>