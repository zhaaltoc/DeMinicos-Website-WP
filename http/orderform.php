<?php
// Name: orderform.php
// Authors: Travis Gall
// Description: Order Form

// Header {{{1
require_once "assets/php/header.php";

// Variables {{{1
$imgLogoNoStamp = $img . "/oven_ready.jpeg";

// Layout {{{1
// About Us {{{2
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
element($col, "img", array("src"=>$imgLogoNoStamp, "style"=>$styleOrderForm));

// Footer {{{1
require_once "assets/php/footer.php";
?>
