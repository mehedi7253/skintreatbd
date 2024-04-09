<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/13/2020
 * Time: 3:42 PM
 */
    session_start();
    unset($_SESSION['email']);
    session_destroy();
    header('location: index.php');
?>