<?php

//logout for inserting in the pages
session_start();
if(session_destroy())
{
header("Location: index.html");
}

?>