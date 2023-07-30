<?php
session_start();
include 'config.php';
if(isset($_POST['login'])){
    
   $email =  $_POST['email'];
   $password =  md5($_POST['password']);

   $sql = "SELECT `uid`, `name`, `credit` FROM `user` WHERE email = '$email' && password = '$password'";
   $result = $db->query($sql);
   if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_array($result);
    $_SESSION['logged'] = true;
    $_SESSION['name'] = $row['name'];
    $_SESSION['id'] = $row['uid'];
    $_SESSION['credit'] = $row['credit'];
    // $_SESSION['email'] = $email;
    header("location: userpannel.php");
   
}
}
?>