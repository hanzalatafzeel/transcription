<?php 
session_start();
if(!isset($_SESSION['id'])){
header("location: ./");
}
include 'upload_file.php';
include 'payment.php';
include 'config.php';
$uid =  $_SESSION['id'];
$sql = "SELECT * FROM `files` WHERE uid = '$uid' ";
$list = $db->query($sql);


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

    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Trans<span>cription</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About Us</a></li>
                <li><a href="#pricing" class="menu-btn">Pricing</a></li>
                <li><a href="#upload" class="menu-btn">Upload File</a></li>
                <!-- <span class="nnavbar">

                    <li><a class="cd-signin" href="#0">Sign in</a></li>
                    <li><a class="cd-signup" href="#0">Sign up</a></li>
                </span> -->
                <li><a href="#download" class="menu-btn">Download File</a></li>
                <li><a href="logout.php" class="menu-btn">Logout</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Your Name</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <!-- <a href="#">Hire me</a> -->
            </div>
        </div>
    </section>

    <!-- pricing section start  -->

    <section class="services" id="pricing">
        <div class="max-width">
            <h2 class="title">Pricing</h2>
            <div class="serv-content">

                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Basic Plan</div>
                        <p>Lorem ipsum dor Lorem, ipsum.</p>
                        <p>Lorem ipsum dor Lorem, ipsum.</p>
                        <p>Lorem ipsum dor Lorem, ipsum.</p>
                        <p>Lorem ipsum dor Lorem, ipsum.</p>
                        <p>Lorem ipsum dor Lorem, ipsum.</p>
                        <p>Lorem ipsum dor Lorem, ipsum.</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Regular Plan</div>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Premium Plan</div>
                        <p>Lorem ipsum dor Lorem, ipsum </p>
                        <p>Lorem ipsum dor Lorem, ipsum </p>
                        <p>Lorem ipsum dor Lorem, ipsum </p>
                        <p>Lorem ipsum dor Lorem, ipsum </p>
                        <p>Lorem ipsum dor Lorem, ipsum </p>
                        <p>Lorem ipsum dor Lorem, ipsum </p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="pay">
    <?php if(isset($_POST['pay'])){
        
        if($paid){
        ?>
        <h2 class="success"> Your payment is submitted  </h2>
        <?php } }?>
        <div class="card">
            <h2 class="title">Payment </h2>
            <form class="payment" action="" method="post">
                <input type="text" placeholder="Full Name" name="fname"> <br>
                <input type="number" placeholder="Amount" name="amount"> <br>
                <input type="number" placeholder="Cedit" name="credit"> <br>
                <input type="link" placeholder="Cedit" name="pay_link">
                <input type="submit" name="pay" id="pay" value="Pay Now">

            </form>

        </div>
    </section>
    
    <!-- upload  -->
    <section class="upload" id="upload">
        
        <h2 class=" credit">Credit: <?php echo $_SESSION['credit'];?> min</h2>
        <h2 class="title">Upload Your Files Here</h2>
        <?php
if(isset($_POST['upload'])){
  if($error){
  ?>
       <h2 class="error"><?php echo $errortext; ?></h2>
        <?php }
        
        if($success){
        ?>
        <h2 class="success"><?php echo $successtext; ?> </h2>
        <?php }} ?>
        <form action="" method="post" enctype="multipart/form-data">
            <!-- <input type="text" value="Click here and press tab to test keyboard interaction."> -->
            <label class="file" >
                <p id="get" >Drop a file or click to select one</p>
                <input type="file" name="file" id="file" >
                <!-- use multiple, even if it’s not allowed, to be able to show an info text -->
            </label>

            <button type="submit" name="upload">Upload</button>
        </form>
        <!--
        TODO:
         • add clear/reset option
         • add validation of type and size
    -->
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
                    <th>STR</th>
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
                    <td data-th="Download File">
                     <?php if($row['str'] == NULL ){
                     
                      ?>
                        Awaited 
                        <?php } else {?>
                          <a href="str/<?php echo $row['str']; ?> " download >Download</a>
                          <?php } ?>
                    </td>
                  </tr>
                  <?php } 
                  } else {
                    ?>
                     <tr>
                    <td colspan="4" >
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


    <script >
     $(document).ready(function () {
            
    $('input[type=file]').change(function () {
        //console.log(this.files);
        var f = this.files;
        var el = $('#get');
        if (f.length > 1) {
            console.log(this.files, 1);
            el.text('Sorry, multiple files are not allowed');
            return;
        }
        const d= f[0].duration;
        // console.log(d);
        // el.removeClass('focus');
        el.html(f[0].name + '<br>' +
            '<span class="sml">' +
            'type: ' + f[0].type + ', ' +
            Math.round(f[0].size / 1024) + ' KB</span>' + '<br>' + '<div id="mediainfo">'+ 'Type and Duration');
    });

    $('input[type=file]').on('focus', function () {
        $(this).parent().addClass('focus');
    });

    $('input[type=file]').on('blur', function () {
        $(this).parent().removeClass('focus');
    });

});
    </script>


    <script src="script.js"></script>
</body>

</html>