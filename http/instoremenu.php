<?php

// Name: menu.php
// Authors: Travis Gall
// Description: Main menu

require_once "assets/php/header.php";

$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
element($col, "h1", array(), "In Store Menu");
menus($conn, $panel, 'Pizza');
menus($conn, $panel, 'Drinks');
menus($conn, $panel, 'Desserts');

// Menu {{{1
navMenu($panel, array('Pizza', 'Drinks', 'Desserts'), $classNavMenu,  $styleNavMenu);

// Footer {{{1
require_once "assets/php/footer.php";
?>
