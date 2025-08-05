<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name =$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

     $stmt=$conn->prepare("INSERT INTO users(name, email,password,role) VALUES(?,?,?,?)");
     $stmt->bind_param("ssss", $name, $email, $hashedPassword ,$role);

      if($stmt->execute()) {
        header("Location: success.html");
    exit();
      }
      else{
        echo "error: ".$stmt->error;
      }
}
?>