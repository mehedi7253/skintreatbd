<?php
session_start();
if (!isset($_SESSION['email'])){
    header('Location: index.php');
}


require_once '../php/db_connect.php';

$email = $_SESSION['email'];

$sql = "select * from admin WHERE email = '$email'";
$res = mysqli_query($connect, $sql);

$userdata = mysqli_fetch_assoc($res);

?>