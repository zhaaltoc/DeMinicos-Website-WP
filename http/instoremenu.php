<?php

// Name: menu.php
// Authors: Travis Gall
// Description: Main menu

require_once "assets/php/header.php";

if($ORDERFORM)
  require $php . '/orderform.php';

else {
  $row = element($panel, "div", array("class"=>"row"));
  $col = element($row, "div", array("class"=>"col-12 text-center"));
  element($col, "h1", array(), "In Store Menu");
  menus($conn, $panel, 'Pizza');
  menus($conn, $panel, 'Drinks');
  menus($conn, $panel, 'Desserts');

  $name = array();
  $results = categories($conn, 'In Store Menu');
  foreach($results as $result)
    $name[] = $result['name'];
  navMenu($panel, $name, $classNavMenu,  $styleNavMenu);

}

// Footer {{{1
require_once "assets/php/footer.php";
?>
