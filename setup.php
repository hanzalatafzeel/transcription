<?php 
include 'config.php';
session_start();
if(isset($_POST['login'])){
    $uname =  $_POST['admin'];
    $password =  $_POST['password'];
 
    $sql = "SELECT `admin_key` FROM `admin` WHERE admin_id  = '$uname' && password = '$password'";
    $result = $db->query($sql);
    if (mysqli_num_rows($result) == 1) {
 
     $row = mysqli_fetch_array($result);
    $_SESSION['admin'] = $row['admin_key'];
     // $_SESSION['email'] = $email;
     header("location: adminpannel.php");
}
}


?>
