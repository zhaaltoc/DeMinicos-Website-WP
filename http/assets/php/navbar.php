<?php
// Name: php/navbar.php
// Description: Site navigation

$styleNavTop = "1%";
$styleNav .= 'background-color:#aaaa33;';
$styleNav .= 'opacity:0.66;';
$styleNav .= "border-radius:10%;";
$styleNav .= 'top: -' . $styleNavTop . ';';
$styleNav .= "transform: translateY(" . $styleNavTop . ");";

$nav = element($body, "nav", array("class"=>"navbar navbar-toggleable-md fixed-top navbar-light bg-light", "style"=>$styleNav));// navbar-inverse bg-inverse"));
// $nav = element($body, "nav", array("class"=>"navbar navbar-toggleable-md fixed-top navbar-light bg-light", "style"=>"background-color:transparent"));// navbar-inverse bg-inverse"));
$navToggler = element($nav, "button", array(
    "class"=>"navbar-toggler navbar-toggler-right",
    "type"=>"button",
    "data-toggle"=>"collapse",
    "data-target"=>"#navbarSupportedContent",
    "aria-controls"=>"navbarSupportedContent",
    "aria-expanded"=>"false",
    "aria-label"=>"Toggle navigation"
));
element($navToggler, "span", array("class"=>"navbar-toggler-icon"));

$navBrand = element($nav, "a", array("class"=>"navbar-brand", "href"=>$hrefBrand));
element($navBrand, "img", array("class"=>"navbar", "src"=>$imgBrand, "alt"=>"", "style"=>"padding:0; height: 32px; border-radius:10%"));
$navBar = element($nav, "div", array("id"=>"navbarSupportedContent", "class"=>"collapse navbar-collapse"));


$styleNavLinks .= 'background-color: transparent;';
$styleNavLinks .= 'font-size:1.5em;';
$styleNavLinks .= 'font-weight:bold;';
$styleNavLinks .= 'color: #ffffff;';
$classNavLinks .= 'navbar-nav ';
$classNavLinks .= 'ml-auto ';

$navLinks = element($navBar, "ul", array('class'=>$classNavLinks));
navLink($navLinks, "home", "", "/", $styleNavLinks); // Extra space still a link
if(!$ORDERFORM) {
  navLink($navLinks, "home", "Home", "/", $styleNavLinks);
  navLink($navLinks, "instoremenu", "In Store Menu", "menu.php", $styleNavLinks);
  navLink($navLinks, "freezermenu", "Heat and Eat", "freezer.php", $styleNavLinks);
  navLink($navLinks, "catering", "Catering", "catering.php", $styleNavLinks);
  navLink($navLinks, "photogallery", "Photo Gallery", "photogallery.php", $styleNavLinks);
  navLink($navLinks, "orderform", "Order Form", "orderform.php", $styleNavLinks);
}
else {
  navLink($navLinks, "orderform", "Order Form", "/", $styleNavLinks);
}
navLink($navLinks, "location", "Location", "#", $styleNavLinks);
?>
