<?php 
session_start();
if(!isset($_SESSION['admin'])){
    header("location: ./adminlogin.php");
}


include 'config.php';

$sql = "SELECT * FROM `files` WHERE str is NULL ";
$list = $db->query($sql);
$sql = "SELECT * FROM `payment` WHERE confirm = 'False' ";
$pay = $db->query($sql);
if(isset($_POST['confirm'])){
    $id = $_POST['confirm'];
    $uid = $_POST['uid'];
    $addon = $_POST['addon'];
    $sql_a = "UPDATE `payment` SET `confirm`= True  WHERE pay_id = '$id' ";
    $sql_b = "SELECT `credit` FROM `user` WHERE uid = '$uid' ";
    $confirm = $db->query($sql_a);
    $user = $db->query($sql_b);
    if($confirm && mysqli_num_rows($user) == 1){
      $row = mysqli_fetch_array($user);
      $credit = $row['credit'];
      $balance = $credit + $addon;
      $sql = "UPDATE `user` SET `credit`= '$balance'  WHERE uid = '$uid' ";
      $result = $db->query($sql);
      if($result){
        header("location: adminpannel.php");
      }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transcription </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="userpannel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>
    
<nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Trans<span>cription</span></a></div>
            <ul class="menu">
            <li><a href="./" class="menu-btn">Home</a></li>
                <li><a href="logout.php" class="menu-btn">Logout</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
<section class="yourupload" id="download">
        <div class="container">
            <h2 class="title ">Payment List</h2>
              <table class="rwd-table">
                <tbody>
                  <tr>
                    <th>S no.</th>
                    <th>Full Name</th>
                    <th>Hash Link</th>
                    
                    <th>Amount</th>
                    <th></th>
                  </tr>
                  <?php 
                  
                  if (mysqli_num_rows($pay) > 0 ) {
                    $count = 0;
                   while( $row = mysqli_fetch_array($pay)){
                  ?>
                  <tr>
                    <td data-th="S no.">
                      <?php echo ++$count; ?>
                    </td>
                    <td data-th="Full Name">
                    <?php echo $row['name']; ?>
                  </td>
                  <td data-th="Hash Link">
                    <a href="<?php echo $row['pay_link']; ?> "  >check</a>
                  </td>
                  <form action="" method="post" >
                  <input type="text" style="display:none" name="uid" id="uid" value="<?php echo $row['uid']; ?>">
                    <td data-th="Amount">
                    <input type="number" name="addon" id="addon" value="<?php echo $row['credit']; ?>" readonly >
                    </td>
                    
                    <td data-th="Download File">
                     <button type="submit" name="confirm" id="confirm" value="<?php echo $row['pay_id']?>"> confirm</button>
                    </td>
                    </form>
                  </tr>
                  <?php } 
                  } else {
                    ?>
                     <tr>
                    <td  colspan="5" >
                      No Payment availbale to confirm
                    </td>
                  </tr>
                    <?php 
                  }
                  ?>

                
                  
                </tbody>
              </table>
        
            </div>
    </section>
    <section class="yourupload" id="download">
        <div class="container">
            <h2 class="title ">Uploaded Files</h2>
              <table class="rwd-table">
                <tbody>
                  <tr>
                    <th>S no.</th>
                    <th>File Name</th>
                    <th>File Type</th>
                    
                    <th>File</th>
                    <th colspan="2">STR</th>
                    
                  </tr>
                  <?php 
                  
                  if (mysqli_num_rows($list) > 0 ) {
                    $count = 0;
                   while( $row = mysqli_fetch_array($list)){
                  ?>
                  <tr>
                    <td data-th="S no.">
                      <?php echo ++$count; ?>
                    </td>
                    <td data-th="File Name">
                    <?php echo $row['file']; ?>
                    </td>
                    <td data-th="File Type">
                    <?php echo $row['type']; ?>
                    </td>
                    
                    <td data-th="Uploaded File">
                      <a href="upload/<?php echo $row['file']; ?> " download >Download</a>
                    </td>
                    <form action="upload_str.php" method="post" enctype="multipart/form-data">
                    <td data-th="Download File">
                    <input type="file" name="file" id="file" >
                    </td>
                    <td data-th="Download File">
                    <button type="submit" name="str" id="str" value="<?php echo $row['upload_id']?>" >UPLOAD</button>
                    </td>
                   </form>
                  </tr>
                  <?php } 
                  } else {
                    ?>
                     <tr>
                    <td  colspan="5" >
                      No Uploads availbale 
                    </td>
                  </tr>
                    <?php 
                  }
                  ?>

                
                  
                </tbody>
              </table>
        
            </div>
    </section>

</body>
</html>