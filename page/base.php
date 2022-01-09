<?php
//----------------------------------------------
//-------- DON'T TOUCH AREAR: START ------------
//----------------------------------------------

// ------------LOGIC: START--------------- \\
echo '<!-- ';
$i = $_GET['i'];                         // GETTING I VALUE FROM URL
if ($i == null || $i < 1 || $i > $limit) // ERROR HANDLER
    $i = $limit;

$pre = $i + 10;
if ($pre > $limit)                      // ERROR HANDLER FOR PREVIOU PAGE BUTTON
    $pre = $limit;
echo ' -->';

for ($j = 1; $i >= 1; $i--, $j++) {     // LOOP FOR LISTING PRODUCTS NEW TO OLD
    if ($j > 10)
        break;
    include $folder_dir .  $i . '.php'; // PRODUCT FILE
}

$next_page = './?i=' . $i;              // NEXT PAGE URL
$pre_page = './?i=' . $pre;             // PREVIOUS PAGE URL

// -------------LOGIC: END--------------- \\

// NAVIGATION BUTTONS: START
echo '
<div class="container ">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">' .  $title . '</a>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">';
if ($i != $limit - 10 && $limit > 10) {
    echo '<li class="nav-item"><a class="nav-link" href="' . $pre_page . '">Previous</a></li>';
}
if ($i != 0) {
    echo '<li class="nav-item"><a class="nav-link" href="' . $next_page . '">Next</a></li>';
}
echo '
                </ul>
            </div>
        </div>
    </nav>
</div>';
// NAVIGATION BUTTONS: END
include $footer;
