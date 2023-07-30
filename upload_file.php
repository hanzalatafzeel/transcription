<?php
include 'rand.php';
include 'config.php';
if(isset($_POST['upload'])){
$error = false;
$success = false;
$errortext = "";
$successtext = "";
$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
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
    
    

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
        $error = true;
        $errortext = $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      include_once('getid3\getid3\getid3.php');
       $getID3 = new getID3;
      $file = $getID3->analyze('upload/'.$_FILES["file"]["name"]);
      if( $_SESSION['credit'] < (int)$file['playtime_string']){
        $error = true;
        $errortext = "upload video lesser or equal to your credit";
        unlink('upload/'.$_FILES["file"]["name"]);
      }
      else{
        $upload_id = generateRandomString(9);
        $uid =  $_SESSION['id'];
        $type = $_FILES["file"]["type"];
        $file = $_FILES["file"]["name"];
        $sql = "INSERT INTO `files`(`upload_id`, `uid`, `type`, `file`) VALUES ('$upload_id','$uid','$type','$file')";
        $result = $db->query($sql);
        if($result){
          $success = true;
          $successtext = "uploaded " . $_FILES["file"]["name"] . "<br/> translation available in 1 hour. <br/>THANKS! "; 
        }
      }
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