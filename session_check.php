<?php
    session_start();
    if(!IsSet($_SESSION['user_name']) or $_SESSION['user_id'] !=1)
    {
        header("location: login.php");
    }   
?>