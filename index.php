<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Amazon Palanpur</title>
    <meta property="og:type" content="website">
    <meta name="description" content="amazon retailer for palanpur city. also get palanpur amazon delivery centers locations.">
    
    <link rel="icon" type="image/png" sizes="770x774" href="assets/img/icon/amazon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<div id="mySidenav" class="sidenav">

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <a class='tablinks' onclick="closeNav()" id="defaultOpen">Home</a></li>
    <a class='tablinks' onclick="closeNav()" href="page/Top_Deals">Top Deals</a></li>
    <a class='tablinks' onclick="closeNav()" href="page/Delivery">Delivery Info</a>
    <a class='tablinks' onclick="closeNav()" href="page/Women_Dress">Wome's Dress</a></li>
    <a class='tablinks' onclick="closeNav()" href="page/Men_Clothes">Men's Clothes</a></li>
    <a class='tablinks' onclick="closeNav()" href="page/Mobiles">Mobiles</a>
    <a class='tablinks' onclick="closeNav()" href="page/Laptops">Laptops</a>
    <a class='tablinks' onclick="closeNav()" href="page/Other">Other</a>

</div>
    <!-- Start: gradient-navbar -->
    <nav class="navbar navbar-dark navbar-expand-md" id="app-navbar">
        <div class="container-fluid"><a class="navbar-brand"><span style="font-size:30px;cursor:pointer" id="brand-logo" onclick="openNav()">&#9776;</span></a>
        <a href="index.php" class="navbar-brand">Amazon Palanpur</a>
        </div>
    </nav>


<div id="main">             <!-- -----------Body Area :  START ------------------>

    <?php include 'page/Home/index.php'; ?>

</div>             <!-- -----------Body Area :  END ------------------>

<!-- -----------FOOTER Area :  START ------------------>

 <?php $year = date("Y"); ?>

<div class="footer-basic"><p class="copyright"style="padding-top: 5px;padding-bottom: 10px;">Amazon Palanpur © <?=$year?> <br></p></div>

<script> 
//---------------Side Nav bar script ----------------------

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>