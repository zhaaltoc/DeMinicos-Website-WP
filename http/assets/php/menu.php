<?php
// Menu {{{1

function myquery($conn, $query) { // {{{2
  // return $_GLOBAL['conn']->query($query);
  // return $results;
  // $results = $conn->query($query);
  return $conn->query($query);
}

function pages($conn) { // {{{2
  $query = 'SELECT * FROM pages';
  return myquery($query);
}

function category_items($conn, $category) { // {{{2
    $queryStr = '
SELECT * FROM items, categories_items
WHERE categories_items.items_id = items.id
AND categories_items.id = "' . $category['id'] . '"';
  return $items;
}

function categories($conn, $page) { // {{{2
  $page_query = myquery($conn, '
SELECT * FROM pages WHERE name = "' . $page . '"');

  $pages[] = array();
  while($page = mysqli_fetch_assoc($page_query)) {
    $pages[] = $page;
  }

  $categories[] = array();
  foreach($pages as $page) {

    $queryStr = '
SELECT * FROM categories, pages_categories
WHERE pages_categories.categories_id = categories.id
AND pages_categories.pages_id = "' . $page['id'] . '"';

    $results = $conn->query($queryStr) or die($conn->error);
    while($category = $results->fetch_assoc()) {
      $categories[] = $category;
    }
  }
  return $categories;
}

function items($conn, $categories_id) { // {{{2
  $items[] = array();
  $queryStr = '
SELECT * FROM items, categories_items
WHERE categories_items.categories_id = "' . $categories_id . '"
AND categories_items.items_id = items.id';

  $results = $conn->query($queryStr) or die($conn->error);
  while($item = $results->fetch_assoc()) {
    $items[] = $item;
  }
  return $items;
}

function menu($conn, $query, $category, $description, $col, $allowHeader=true) { // {{{2
  $results = $conn->query($query);
  if ($results->num_rows > 0) {
    // element($col, "h2", array(), $category);

    $row = element($col, 'div', array('class'=>'row'));
    element($row, 'div', array('class'=>'col-1'));
    $col = element($row, 'div', array('class'=>'col-11'));
    $pricingTable = element($col, "div", array("class"=>"pricingTable"));
    element($pricingTable, "h2", array('id'=>$category, "class"=>"pricingTable-title"), $category);
    element($pricingTable, "h3", array("class"=>"pricingTable-subtitle"), $description);
    $row = element($pricingTable, "div", array("class"=>"row"));

    // Body
    $i = 0;
    while($result = $results->fetch_assoc()) {
      $query = "SELECT * FROM menu_items_toppings JOIN menu_toppings ON menu_items_toppings.menu_topping_id WHERE menu_item_id = " . $result["id"];
      $results_toppings = $conn->query($query);
      $toppings = array();
      while($topping = $results_toppings->fetch_assoc())
        $toppings[] = $topping["name"];
      if ($i % 2 == 0) {
        $row = element($pricingTable, "div", array("class"=>"row"));
        element($row, "div", array("class"=>"col-1"));
      }
      menuItem($pricingTable, $row, $result['name'], number_format($result['price'], 2), $toppings);
      $i++;
    }
  }
}

function menuTR($tbody, $type, $name, $description, $toppings, $price) { // {{{2
  $tr = element($tbody, 'tr');
  $td = element($tr, $type);
  $p = element($td, "p", array("style"=>"margin-bottom:5px;"), $name);
  $td = element($tr, $type);
  $p = element($td, "p", array("style"=>"margin-bottom:5px;"), $description);
  $td = element($tr, $type);
  $p = element($td, "p", array("style"=>"margin-bottom:5px;"), $toppings);
  $td = element($tr, $type);
  $p = element($td, "p", array("style"=>"margin-bottom:5px;"), $price);
}

function menus($conn, $panel, $menu) { // {{{2
  // $query = "SELECT * FROM menu_categories";
  $query = 'SELECT * FROM `menu_categories` WHERE name = "' . $menu . '"';
  $categories = $conn->query($query);

  if ($categories->num_rows > 0) {
    // output data of each row
    $row = element($panel, "div", array("class"=>"row"));
    $colFresh = element($row, "div", array("class"=>"col-12 text-center"));

    while($category = $categories->fetch_assoc()) {
      // Fresh
      $query = "SELECT * FROM menu_items WHERE category_id=" . $category["id"];
      $results = $conn->query($query);
      menu($conn, $query, $category["name"], $category["description"], $colFresh);
    }
  }
}

function menuItem($menu, $element, $name, $price, $toppings) { // {{{2
  $rowCol = element($element, "div", array("class"=>"col-md-5 text-center"));
  $row = element($rowCol, "div", array("class"=>"row pricingTable-firstTable"));

  // $content = element($row, "div", array("class"=>"col-2", "style"=>"padding:25px"));
  $content = element($row, "div", array("class"=>"col-12 pricingTable-firstTable_table", "style"=>"padding:25px"));
  $row = element($content, "div", array("class"=>"row"));

  $col = element($row, "div", array("class"=>"col-md-12"));
  element($col, "h1", array("class"=>"pricingTable-firstTable_table__header", "style"=>"font-weight:bold;width:100%;text-align:center"), $name);
  
  $row = element($content, "div", array("class"=>"row"));
  $col = element($row, "div", array("class"=>"col-md-3 text-center"));
  $p = element($col, "p", array("class"=>"pricingTable-firstTable_table__pricing", "style"=>"font-weight:bold;"));
  element($p, 'span', array(), "$");
  element($p, 'span', array(), $price);
  element($p, 'span', array(), "");
  $col = element($row, "div", array("class"=>"col-md-9"));
  $toppingsList = element($col, "div", array("class"=>"pricingTable-firstTable_table__options"));
  $p = element($toppingsList, "p", array("style"=>"font-weight:bold;"), implode(', ', $toppings));
}

function navMenu($element, $navs, $class, $style) { // {{{2
  $box = element($element, "div", array('class'=>$class, 'style'=>$style));
  foreach($navs as $nav) {
    $row = element($box, 'div', array('class'=>'row'));
    $col = element($row, 'div', array('class'=>'col-12', 'style'=>'padding-bottom:25px;'));
    $p = element($col, 'h5');
    element($p, 'a', array('href'=>'#' . $nav['name']), $nav['name']);
  }
  return $box;
}
?>
