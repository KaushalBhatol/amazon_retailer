<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?=$title?> | Amazon Palanpur</title>
    <meta property="og:type" content="website">
    <meta name="description" content="<?=$Meta_description?>">
    
    <link rel="icon" type="image/png" sizes="150x150" href="../assets/img/icon/amazon.png">

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">


<style>
#brand-logo{font-size:34px}
#app-navbar{background:linear-gradient(120deg,#00e4d0,blue)}
    
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0; 
  left: 0;
  background-color: black;
  background:linear-gradient(120deg,#00e4d0,blue);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  background-color: blue;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.closebtn:hover {
    background-color: transparent !important;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>

<div id="mySidenav" class="sidenav">

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <a onclick="closeNav()" href="../">Home</a></li>
    <a onclick="closeNav()" href="../TopDeals">Top Deals</a></li>
    <a onclick="closeNav()" href="../Delivery.php">Delivery Info</a>
    <a onclick="closeNav()" href="../WoMenClothe">Wome's Dress</a></li>
    <a onclick="closeNav()" href="../MenClothe">Men's Clothes</a></li>
    <a onclick="closeNav()" href="../Mobile">Mobiles</a>
    <a onclick="closeNav()" href="../Laptop">Laptops</a>
    <a onclick="closeNav()" href="../Other">Other</a>


</div>
    <!-- Start: gradient-navbar -->
    <nav class="navbar navbar-dark navbar-expand-md" id="app-navbar">
        <div class="container-fluid"><a class="navbar-brand"><span style="font-size:30px;cursor:pointer" id="brand-logo" onclick="openNav()">&#9776;</span></a>
        <a href="../" class="navbar-brand">Amazon Palanpur</a>
        </div>
    </nav>

<div id="main">