<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Bug Fix Status</title>
</head>
<body>
<form method="post" action="changeBugStatus.php">
<?php


include ("connect.php");//Establishing connection with our database
//$dg = new C_DataGrid("SELECT * FROM users", "uid", "users"); This code is not functioning the way i want
$sql="SELECT bugID,title,description FROM bugs WHERE fixed=0 AND uid=".$_SESSION["userID"];//select required dataset from database
    //"SELECT bugID,title,bugDesc FROM bugs WHERE uid=1";//select required dataset from database
$result=mysqli_query($db,$sql);//fetch data from database

echo '<h3>Change Bug Fix Status</h3>'.$_SESSION["$uid"];
echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'Bug ID'.
    '</th>'.'<th>'.'Title'.'</th>'.'<th>'.'Description'.

    '</th>'.'<th>'.'Activate'.'</th>'.'</table>';
//loop through the database and fetch all users with userStatus=0
WHILE($row=mysqli_fetch_assoc($result))
{
    //get the userid, userTpe,userStatus,username
    $bugid=$row['bugID'];
    $title=$row['title'];
    $bugdesc=$row['description'];
   // $username=$row['username'];

    echo '<table border="1" style="width:60%">'.'<col width="60">'. '<col width="60">'.'<col width="60">'.'<col width="60">'.'<tr>'.
        '<a href="changeBugStatus.php?uid="'.$bugid.'>'.'<tr>'.'<td>'.$bugid.'</td>'.'<td>' . $title.'</td>'.'<td>'.
        $bugdesc.'</td>'.'<td>'.
        "<input type='checkbox' name='bugid' value = '$bugid'>".
        '</td>'.'</a>'.'<br>'.'</tr>'.'</table>';



}
?>

    <input type="submit" name="submit" value="submit">
<?php

if(isset($_POST['submit'])){//to run PHP script on submit
    if(!empty($_POST['bugid'])){
// Loop to store and display values of individual checked checkbox.
        foreach($_POST['bugid'] as $bugid)
        {
            //get update query string
            $updatebugs="UPDATE bugs SET fixed = 1 WHERE bugID='$bugid'";

            if(mysqli_query($db,  $updatebugs)){

            } else{
                echo "ERROR: Could not be able to execute"/**$qry. mysqli_error($db)*/;
            }

                // Close connection
           // mysqli_close($db);
        }
    }
}
?>


    </form>

</body>
