<?php
$title = 'Top Deals';
$Meta_description = 'Get Top Deals On Amazon Palanpur.';
$ROOT = '../../';                       // ROOT DIR FROM SPACIFIC THIS PAGE
include $ROOT . 'page/head.php';        // HEAD.PHP DIRECTORY

//----------------------------------------------
//-------- DON'T TOUCH AREAR: START ------------
//----------------------------------------------

// ------------LOGIC FOR TOP DEALS: START--------------- \\
$i = $mob;
$folder_dir = $mobile_dir;
for ($j = 1; $i >= 1; $i--, $j++) {

    if ($j > 10)
        break;      // condition for breaking loop

    include $folder_dir .  $i . '.php';
}
// -------------LOGIC FOR TOP DEALS: END--------------- \\

include $footer;
