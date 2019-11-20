<?php 
    session_start();
    if(!isset($_SESSION['auth_success'])){
        header('location: index.php');
    }
