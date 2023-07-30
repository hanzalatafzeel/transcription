<?php
// session_start();
include 'rand.php';
include 'config.php';
echo "sign_up";
if(isset($_POST['signup'])){
    $uid = generateRandomString(9);
   $name =  $_POST['signup-name'];
   $email =  $_POST['signup-email'];
   $password =  md5($_POST['signup-password']);
    
   $sql = "INSERT INTO `user`(`uid`,`name`,`email`,`password`,`admin_key`) VALUES ('$uid','$name','$email','$password','admin00')";
   $result = $db->query($sql);
   if($result){
    echo "pass";
   }else{
    echo "failed";
   }
    
}
?>