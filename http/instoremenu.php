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
  
  $name = array();
  $results = categories($conn, 'In Store Menu');
  foreach($results as $result)
    $categories[] = $result;

  foreach($categories as $category) {
    element($col, 'h1', array(), $category['name']);
    $items = categories_items($conn, $category['categories_id']);
    foreach($items as $item) {
      if ($item['name'] != ''){
        // element($col, 'p', array(), $item['name']);
      // element($col, 'p', array(), $item['shortdesc']);
      // element($col, 'p', array(), $item['description']);
      // element($col, 'p', array(), $item['imagename']);
      // element($col, 'p', array(), $item['notes']);
      // element($col, 'p', array(), $item['instock']); // Bool
      // element($col, 'p', array(), $item['acrive']); // Bool
      if ($i % 2 == 0) {
        $row = element($col, "div", array("class"=>"row"));
        element($row, "div", array("class"=>"col-1"));
      }
      // menuItem($row, $item['name'], $item['id'], array($item['description']));
      menuItem($row, $item['name'], $item['id'], array($item['shortdesc']));
      $i++;
      }
    }
  }
  navMenu($panel, $categories, $classNavMenu,  $styleNavMenu);
}

// Footer {{{1
require_once "assets/php/footer.php";
?>
