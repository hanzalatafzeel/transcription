<?php 
// include 'rand.php';
$pay = False;
include 'config.php';
if(isset($_POST['pay'])){
    $pay_id = generateRandomString(9);
    $uid = $_SESSION['id'];
    $name = $_POST['fname'];
    $amount = $_POST['amount'];
    $credit = $_POST['credit'];
    $link = $_POST['pay_link'];
    $sql = "INSERT INTO `payment`(`pay_id`, `uid`, `name`, `amount`, `credit`, `pay_link`) VALUES ('$pay_id','$uid','$name','$amount','$credit','$link')";
    $paid = $db->query($sql);
    // if($paid){
    //     $pay = True;
    //     echo "success";
    // }
}

?>