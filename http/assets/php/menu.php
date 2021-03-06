<?php
// Menu {{{1

function myquery($conn, $query) { // {{{2
  return $conn->query($query);
}

function pages($conn) { // {{{2
  $query = 'SELECT * FROM pages WHERE active = 1 ORDER BY weight';
  return $conn->query($query);
}

function categories($conn, $page) { // {{{2
  $page_query = myquery($conn, '
SELECT * FROM pages WHERE name = "' . $page . '"');

  $pages = array();
  while($page = mysqli_fetch_assoc($page_query)) {
    $pages[] = $page;
  }

  $categories[] = array();
  foreach($pages as $page) {

    $queryStr = '
SELECT * FROM categories, pages_categories
WHERE pages_categories.categories_id = categories.id
AND pages_categories.pages_id = "' . $page['id'] . '"
AND active = 1
ORDER BY weight';

    $results = $conn->query($queryStr) or die($conn->error);
    while($category = $results->fetch_assoc()) {
      $categories[] = $category;
    }
  }
  return $categories;
}

function categories_items($conn, $categories_id) { // {{{2
  $items = array();
  $queryStr = '
SELECT items.id, items.name, items.price_id, items.description, items.shortdesc FROM items, categories_items
WHERE categories_items.categories_id = "' . $categories_id . '"
AND categories_items.items_id = items.id
AND items.active = 1
ORDER BY weight';

  $results = $conn->query($queryStr) or die($conn->error);
  while($item = $results->fetch_assoc()) {
    $items[] = $item;
  }
  return $items;
}

function items_addon($conn, $items_id) {
  $addons = array();
  $queryStr = '
SELECT * FROM items, addon, items_addon
WHERE items_addon.items_id = "' . $items_id . '"
AND items_addon.addon_id = addon.id
AND addon.items_id = items.id
ORDER BY weight';

  $results = $conn->query($queryStr) or die($conn->error);
  while($addon = $results->fetch_assoc()) {
    $addons[] = $addon['name'];
  }
  return $addons;
}

function items_price($conn, $items_id) {
  $prices = array();
  $queryStr = '
SELECT * FROM items, price, items_price
WHERE items_price.items_id = "' . $items_id . '"
AND items_price.price_id = price.id';

  $results = $conn->query($queryStr) or die($conn->error);
  while($price = $results->fetch_assoc()) {
    if ($price['active'] != 0)
      $prices[] = $price['price'];
  }

  // Only return the first valid price
  return $prices[0];
}

function price($conn, $price_id) {
  $prices = array();
  $queryStr = '
SELECT price FROM price
WHERE id = "' . $price_id . '"';

  $results = $conn->query($queryStr) or die($conn->error);
  while($price = $results->fetch_assoc()) {
    $prices[] = $price['price'];
  }

  // Only return the first valid price
  return $prices[0];
}

function navMenu($element, $navs, $class, $style) { // {{{2
  $box = element($element, "div", array('class'=>$class, 'style'=>$style . 'z-index:100;'));
  foreach($navs as $nav) {
    $row = element($box, 'div', array('class'=>'row'));
    $col = element($row, 'div', array('class'=>'col-12', 'style'=>'padding-bottom:25px;'));
    $p = element($col, 'h5');
    element($p, 'a', array('href'=>'#', 'class'=>'menu nav-item', 'id'=>str_replace(' ', '_', $nav['name']), 'style'=>'font-size:1.0em;cursor:pointer;'), $nav['name']);
  }
  return $box;
}

function menuItem($element, $name, $price, $toppings, $id) { // {{{2
  $rowCol = element($element, "div", array("class"=>"menu-time menu-width menu-" . $id));
  $row = element($rowCol, "div", array("class"=>"row pricingTable-firstTable", 'style'=>'padding:0;'));

  $content = element($row, "div", array("class"=>"col-12 pricingTable-firstTable_table", "style"=>"padding:10px"));
  
  $row = element($content, "div", array("class"=>"row"));
  $col = element($row, "div", array("class"=>"col-10"));
  element($col, "h1", array("class"=>"menu pricingTable-firstTable_table__header", "style"=>"font-weight:bold;width:100%;text-align:center"), $name);

  $col = element($row, "div", array("class"=>"col-1", 'style'=>'white-space:nowrap'));
  $p = element($col, "p", array("class"=>"", "style"=>"margin-left:-20px;padding-top:15px;color:black;width:100%;font-weight:bold;"));
  element($p, 'span', array('style'=>'vertical-align:text-top;font-size:0.7em;'), "$");
  element($p, 'span', array(), $price);
  element($p, 'span', array(), "");

  $row = element($content, "div", array("class"=>"row"));
  $col = element($row, "div", array("class"=>"col-12"));
  $toppingsList = element($col, "div", array("class"=>"pricingTable-firstTable_table__options"));
  $p = element($toppingsList, "p", array("style"=>"font-weight:bold;text-align:left;"), implode(", ", $toppings));
}

function menu($element, $conn, $classNavMenu, $styleNavMenu) {
  $row = element($element, "div", array("class"=>"row"));
  $col = element($row, "div", array("class"=>"col-12 text-center"));

  $name = array();
  $results = categories($conn, str_replace('+',' ',$_SESSION['page']));
  foreach($results as $result)
    $categories[] = $result;

  foreach($categories as $category) {
    if ($category['name'] != '') {
      // TODO: DMNC-33 [200525] - 75px is shared in script.js
      element($col, 'h1', array('id'=>'section-' . str_replace(' ','_',$category['name']), 'class'=>'menu', 'style'=>'padding-left:75px;font-size:4.5em;color:rgb(204,204,51);'), $category['name']);
      $items = categories_items($conn, $category['categories_id']);
      $i=0; // Force a new line, when we switch categories.
      foreach($items as $item) {
        if ($item['name'] != ''){
          if ($i % 2 == 0) {
            $row = element($col, "div", array("class"=>"row"));
          }
          $addons = items_addon($conn, $item['id']);
          
          if ($addons[0]=='')
            $addons[0]=$item['description'];
          
          menuItem($row, $item['name'], price($conn,$item['price_id']), $addons, $category['name']);		
          $i++;
        }
      }
    }
  }
  navMenu($element, $categories, $classNavMenu,  $styleNavMenu);
}
?>
