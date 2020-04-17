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
br($col, 2);

$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
$pricingTable = element($col, "div", array("class"=>"pricingTable"));
element($pricingTable, "h2", array("class"=>"pricingTable-title"), "Pizza");
element($pricingTable, "h3", array("class"=>"pricingTable-subtitle"), "Look at our Pizza");
$row = element($pricingTable, "div", array("class"=>"row"));

// $col = element($menu, "div", array("class"=>"col-4"));
// $col = element($row, "div", array("class"=>"col-md-4 text-center"));
// $ul = element($col, "ul", array("class"=>"pricingTable-firstTable"));
// $li = element($ul, "li", array("class"=>"pricingTable-firstTable_table", "style"=>"width:100%; padding:50px"));
// element($li, "h1", array("class"=>"pricingTable-firstTable_table_header"), "Cheese Pizza");
// $p = element($li, "p", array("class"=>"pricingTable-firstTable_table_pricing"));
// element($p, "span", array(), "$");
// element($p, "span", array(), "15.00");
// element($p, "span", array(), " / Slice");
menuItem($pricingTable, $row);
menuItem($pricingTable, $row);
menuItem($pricingTable, $row);
menuItem($pricingTable, $row);
$col = element($row, "div", array("class"=>"col-md-4 text-center"));
element($col,"p",array(),"");
menuItem($pricingTable, $row);
menuItem($pricingTable, $row);
menuItem($pricingTable, $row);
menuItem($pricingTable, $row);
$col = element($row, "div", array("class"=>"col-md-4 text-center"));
element($col,"p",array(),"");
menuItem($pricingTable, $row);
menuItem($pricingTable, $row);
$col = element($row, "div", array("class"=>"col-md-4 text-center"));
element($col,"p",array(),"");
menuItem($pricingTable, $row);

element($pricingTable, "div", array("class"=>"pricingTable-firstTable_table__getstart"), "Get Started Now");

menus($conn, $panel);

// Footer {{{1
require_once "assets/php/footer.php";
?>
