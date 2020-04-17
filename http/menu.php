<?php

// Name: menu.php
// Authors: Travis Gall
// Description: Main menu

require_once "assets/php/header.php";
require_once "../mysql/mysqler.php";

// Menu {{{1
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
element($col, "h1", array(), "In Store Menu");
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-md-12", "style"=>"padding-bottom: 10px;"));
br($col, 2);
menus($conn, $panel);

$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-4"));
$pricingTable = element($col, "div", array("class"=>"pricingTable"));
element($pricingTable, "h2", array("class"=>"pricingTable-title"), "Pizza");
element($pricingTable, "h3", array("class"=>"pricingTable-subtitle"), "Look at our Pizza");
$ul = element($pricingTable, "ul", array("class"=>"pricingTable-firstTable"));
$li = element($ul, "li", array("class"=>"pricingTable-firstTable_table"));
element($li, "h1", array("class"=>"pricingTable-firstTable_table_header"), "Cheese Pizza");
$p = element($li, "p", array("class"=>"pricingTable-firstTable_table_pricing"));
element($p, "span", array(), "$");
element($p, "span", array(), "15.00");
element($p, "span", array(), "Slice");

$toppings = element($ul, "ul", array("class"=>"pricingTable-firstTable_table_options"));
element($toppings, "li", array(), "Cheese");
element($ul, "div", array("class"=>"pricingTable-firstTable_table__getstart"), "Get Started Now");

// Footer {{{1
require_once "assets/php/footer.php";
?>
