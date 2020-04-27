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
$styleOrderFormTop = "7%";

$styleOrderFormDiv .= "display: inline-block;";
$styleOrderFormDiv .= "width: 100%;";
$styleOrderFormDiv .= "border 2px solid red;";
$styleOrderFormDiv .= "overflow: hidden;";

$styleOrderFormImg .= "width: 90%;";
$styleOrderFormImg .= "position: relative;";
$styleOrderFormImg .= 'top: ' . $styleOrderFormTop . ';';
$styleOrderFormImg .= "transform: translateY(-" . $styleOrderFormTop . ");";

$stringLinkFile = 'Download the Order Form';

// Layout {{{1
// OrderForm {{{2
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
$div = element($col, "div", array("style"=>$styleOrderFormDiv));
element($div, "img", array("src"=>$imgOrderForm, "style"=>$styleOrderFormImg));

$row = element($panel, "div", array("class"=>"row", 'style'=>'padding-bottom:0px;'));
$col = element($row, "div", array("class"=>"col-12 text-center", "style"=>$styleOrderForm));
linkfile($col , "h2" , $doc , $docOrderForm, $stringLinkFile, '', '');

// Footer {{{1
require_once "assets/php/footer.php";
?>
