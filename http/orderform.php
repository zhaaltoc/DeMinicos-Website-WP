<?php
// Name: orderform.php
// Authors: Travis Gall
// Description: Order Form

// Header {{{1
require_once "assets/php/header.php";

// Variables {{{1
$imgOrderForm = $img . "/De Minico’s order list.PNG";
$docOrderForm = "De Minico’s order list.pdf";

// Style {{{2
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

// Layout {{{1
// OrderForm {{{2
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center", "style"=>$styleOrderForm));
$div = element($col, "div", array("style"=>$styleOrderFormDiv));
element($div, "img", array("src"=>$imgOrderForm, "style"=>$styleOrderFormImg));

linkfile($col , "h2" , $doc , $docOrderForm, "Download the Order Form");

// Footer {{{1
require_once "assets/php/footer.php";
?>
