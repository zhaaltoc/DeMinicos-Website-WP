<?php
// Name: orderform.php
// Authors: Travis Gall
// Description: Order Form

// Header {{{1
require_once "assets/php/header.php";

// Variables {{{1
$imgLogoNoStamp = $img . "/orderform/orderform.png";

// Layout {{{1
// About Us {{{2

$styleOrderFormDiv .= "display: inline-block;";
$styleOrderFormDiv .= "width: 100%;";
// $styleOrderFormDiv .= "height: 80%;";
$styleOrderFormDiv .= "border 2px solid red;";
$styleOrderFormDiv .= "overflow: hidden;";

$styleOrderFormImgTop = "7%";
$styleOrderFormImg .= "width: 90%;";
$styleOrderFormImg .= "position: relative;";
$styleOrderFormImg .= 'top: ' . $styleOrderFormImgTop . ';';
$styleOrderFormImg .= "transform: translateY(-" . $styleOrderFormImgTop . ");";

$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center", "style"=>$styleOrderForm));
$div = element($col, "div", array("style"=>$styleOrderFormDiv));
element($div, "img", array("src"=>$imgLogoNoStamp, "style"=>$styleOrderFormImg));

// Footer {{{1
require_once "assets/php/footer.php";
?>
