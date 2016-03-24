<?php
include("check.php");

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <style>h2 {text-align: center} </style>
    <style>a:link {color: #fff}</style>
    
    
    <style type="text/css">
    nav ul {

    border-radius: 4px;
    border: 1px #606 solid;
    width:100px;
    background-color: #fff;
    text-align: center;
    margin: auto;/*element middle page*/
    padding: 100px;        }

    nav ul li {
        display: inline;

    }

    nav ul li a {
        text-decoration: none;
        padding: .4em 0.5em;
        color: #606;
        background-color: #fff;
        font-size:20px;

    }

    nav ul li a:hover {
        color: #fff;
        background-color: #606;
    }

    </style>
  
</head>

<body>

<h2 class="h2">Hello, <em><?php echo $login_user;?>!</em></h2>



<header>

    <h1 class="h1"> Welcome</h1>
    <br>
    <br>

    <nav>

        <ul>
            <li> <a href  = "bugform.php">Bug Report</a></li><br><br>
            <li> <a href = "buglist.php">Bug List</a></li><br><br>
        </ul>
        
        <a href = "logout.php">Log out</a>

    </nav>

</header>




</body>
</html>
 