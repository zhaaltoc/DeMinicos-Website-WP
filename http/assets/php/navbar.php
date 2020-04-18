<?php

// Name: php/navbar.php
// Description:

$nav = element($body, "nav", array("class"=>"navbar navbar-toggleable-md fixed-top navbar-inverse bg-inverse"));
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
navLink($navLinks, "home", "Home", "/");

navLink($navLinks, "instoremenu", "In Store Menu", "menu.php");
navLink($navLinks, "freezermenu", "Heat and Eat", "freezer.php");
navLink($navLinks, "catering", "Catering", "catering.php");
navLink($navLinks, "photogallery", "Photo Gallery", "photogallery.php");

// Delivery dropdown
//$li = element($navLinks, "li", array("class"=>"nav-item dropdown"));
//$a = element($li, "a", array("class"=>"nav-link dropdown-toggle", "data-toggle"=>"dropdown"), "Delivery");
//$div = element($li, "div", array("class"=>"dropdown-menu"));
//$a = element($div, "a", array("class"=>"dropdown-item", "href"=>$hrefDoordash), "DoorDash");
//$a = element($div, "a", array("class"=>"dropdown-item", "href"=>$hrefSkipDish), "Skip the Dishes");
//$li = element($navBar, "li", array("class"=>"nav-item"));
//element($li, "img", array("class"=>"navbar", "src"=>$imgDoordash, "alt"=>"", "style"=>"height: 50px; margin-top: -5px;"));
navLink($navLinks, "location", "Location", "#");
?>
