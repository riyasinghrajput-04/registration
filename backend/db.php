<?php
$host="sql312.infinityfree.com";
$user="if0_39637144";
$pass="1Zgc5c2YHZ";
$db="if0_39637144_register";

$conn= new mysqli($host, $user, $pass, $db);
if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
?>