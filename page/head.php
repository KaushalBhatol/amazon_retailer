<!-- <?php
        // ----  PRODUCT QUANTITY -----
        $lap = 1;   // laptop products
        $mob = 3;   // Mobile products
        $men = 3;   // Men clothes products
        $oth = 1;   // Other products
        $wod = 1;   // Women dress  

        // ----- DIRECTORY SHORTCUTS-----
        $footer = $ROOT . 'page/footer.php';
        $product_dir = $ROOT . 'Product/';
        $base = $ROOT . 'page/base.php';
        $laptop_dir = $product_dir . 'Laptop/';
        $menClothe_dir = $product_dir . 'MenClothe/';
        $mobile_dir = $product_dir . 'Mobile/';
        $other_dir = $product_dir . 'Other/';
        $womenDress_dir = $product_dir . 'WomenDress/';
        // $test_dir = $product_dir . 'test/';
        ?> 
        ---->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $title ?> | Amazon Retailer</title>
    <meta property="og:type" content="website">
    <meta name="description" content="<?= $Meta_description ?>">

    <link rel="icon" type="image/png" sizes="150x150" href="<?= $ROOT ?>assets/img/icon/amazon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $ROOT ?>assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="<?= $ROOT ?>assets/css/nav.css">

</head>

<div id="mySidenav" class="sidenav">

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <a onclick="closeNav()" href="<?= $ROOT ?>">Home</a>
    <a onclick="closeNav()" href="<?= $ROOT ?>page/TopDeals">Top Deals</a>
    <a onclick="closeNav()" href="<?= $ROOT ?>page/Women_Dress">Wome's Dress</a>
    <a onclick="closeNav()" href="<?= $ROOT ?>page/Men_Clothes">Men's Clothes</a>
    <a onclick="closeNav()" href="<?= $ROOT ?>page/Mobile">Mobiles</a>
    <a onclick="closeNav()" href="<?= $ROOT ?>page/Laptop">Laptops</a>
    <a onclick="closeNav()" href="<?= $ROOT ?>page/Other">Other</a>

</div>
<!-- Start: gradient-navbar -->
<nav class="navbar navbar-dark navbar-expand-md" id="app-navbar">
    <div class="container-fluid"><a class="navbar-brand"><span style="font-size:30px;cursor:pointer" id="brand-logo" onclick="openNav()">&#9776;</span></a>
        <a href="<?= $ROOT ?>" class="navbar-brand">Amazon Retailer</a>
    </div>
</nav>

<div id="main">