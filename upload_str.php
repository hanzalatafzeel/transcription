<?php
include 'rand.php';
include 'config.php';
if(isset($_POST['str'])){
$error = false;
$success = false;
$errortext = "";
$successtext = "";
$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma","str");
$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

if (in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] > 0)
    {
      $error = true;
      $errortext = "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    
        move_uploaded_file($_FILES["file"]["tmp_name"],
      "str/" . $_FILES["file"]["name"]);
     
        $id = $_POST['str'];
        $file = $_FILES["file"]["name"];
        $sql = "UPDATE `files` SET `str`='$file' WHERE upload_id = '$id'";
        echo "$sql";
        $result = $db->query($sql);
        if($result){
          $success = true;
          $successtext = "uploaded " . $_FILES["file"]["name"] . "<br/> translation available in 1 hour. <br/>THANKS! "; 
          header("location: adminpannel.php");
        }
      
      
    }
  }
else
  {
    $error = true;
    $errortext = "Invalid file";
  }
 

}
?>