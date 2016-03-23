<?php
include("check.php");

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1 class="hello">Hello, <em><?php echo $login_user;?>!</em></h1>

<a href = bugform.php>submit a form</a>
<br><br><br>
<a href="logout.php" style="font-size:18px">Logout?</a>
</body>
</html>
 