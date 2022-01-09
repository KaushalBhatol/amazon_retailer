<?php
$title = 'Top Deals';
$Meta_description = 'Get Top Deals On Amazon Palanpur.';
$ROOT = '../../';                       // ROOT DIR FROM SPACIFIC THIS PAGE
include $ROOT . 'page/head.php';        // HEAD.PHP DIRECTORY

//----------------------------------------------
//-------- DON'T TOUCH AREAR: START ------------
//----------------------------------------------

// ------------LOGIC FOR TOP DEALS: START--------------- \\
for ($i = 0; $i < 5; $i++) {
    if ($mob > 0) {
        include $mobile_dir .  $mob . '.php';
        $mob--;
    }
    if ($lap > 0) {
        include $laptop_dir .  $lap . '.php';
        $lap--;
    }
    if ($men > 0) {
        include $menClothe_dir .  $men . '.php';
        $men--;
    }
    if ($oth > 0) {
        include $other_dir .  $oth . '.php';
        $oth--;
    }
    if ($wod > 0) {
        include $womenDress_dir .  $wod  . '.php';
        $wod--;
    }
}
// -------------LOGIC FOR TOP DEALS: END--------------- \\

include $footer;
