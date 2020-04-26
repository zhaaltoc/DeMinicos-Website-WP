<?php

// Name: php/navbar.php
// Description: Site navigation

// $nav = element($body, "nav", array("class"=>"navbar navbar-toggleable-md fixed-top navbar-light bg-light", "style"=>"background-color:#ffffff"));// navbar-inverse bg-inverse"));
$nav = element($body, "nav", array("class"=>"navbar navbar-toggleable-md fixed-top navbar-light bg-light", "style"=>"background-color:transparent"));// navbar-inverse bg-inverse"));
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
$navLinks = element($navBar, "ul", array("class"=>"navbar-nav ml-auto"));
navLink($navLinks, "home", "", "/"); // Extra space still a link
if(!$ORDERFORM) {
  navLink($navLinks, "home", "Home", "/");
  navLink($navLinks, "instoremenu", "In Store Menu", "menu.php");
  navLink($navLinks, "freezermenu", "Heat and Eat", "freezer.php");
  navLink($navLinks, "catering", "Catering", "catering.php");
  navLink($navLinks, "photogallery", "Photo Gallery", "photogallery.php");
  navLink($navLinks, "orderform", "Order Form", "orderform.php");
}
else {
  navLink($navLinks, "orderform", "Order Form", "/");
}
navLink($navLinks, "location", "Location", "#");
?>
