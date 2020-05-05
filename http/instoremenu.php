<?php

// Name: menu.php
// Authors: Travis Gall
// Description: Main menu

require_once "assets/php/header.php";

/*
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
$div = element($row, "div", array("id"=>"menu"));
$vmenu = element($div, "v-app");
$vmenu = element($col, "v-menu");
$btn = element($vmenu, "v-btn", array(), 'Click');
$card = element($vmenu, "v-card", array(), 'Content');
 */

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
