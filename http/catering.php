<?php

// Name: catering.php
// Authors: Travis Gall
// Description: Catering services menu

require_once "assets/php/header.php";
require_once "../mysql/mysqler.php";

// Menu {{{1
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
element($col, "h1", array(), "Catering Menu");
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-md-12", "style"=>"padding-bottom: 10px;"));
br($col, 2);
menus($conn, $panel);

// Footer {{{1
require_once "assets/php/footer.php";
echo $dom->generateHTML();
?>
