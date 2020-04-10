<?php

// Name: index.php
// Authors: Travis Gall
// Description:

require_once "assets/php/header.php";
require_once "../mysql/mysqler.php";

// TODO-TJG [180204] - Update menu functions to be one function(array of html ready data, bool is header)
function menuHead($tbody, $name, $description, $toppings, $price) {
  $tr = element($tbody, "tr");
  $th = element($tr, "th");
  $p = element($th, "p", array("style"=>"margin-bottom:5px;"), $name);
  $th = element($tr, "th");
  $p = element($th, "p", array("style"=>"margin-bottom:5px;"), $description);
  $th = element($tr, "th");
  $p = element($th, "p", array("style"=>"margin-bottom:5px;"), $toppings);
  $th = element($tr, "th");
  $p = element($th, "p", array("style"=>"margin-bottom:5px;"), $price);
}

function menuRow($tbody, $name, $description, $toppings, $price) {
  $tr = element($tbody, "tr");
  $td = element($tr, "td");
  $p = element($td, "p", array("style"=>"margin-bottom:5px;"), $name);
  $td = element($tr, "td");
  $p = element($td, "p", array("style"=>"margin-bottom:5px;"), $description);
  $td = element($tr, "td");
  $p = element($td, "p", array("style"=>"margin-bottom:5px;"), implode(", ",$toppings));
  $td = element($tr, "td");
  $p = element($td, "p", array("style"=>"margin-bottom:5px;"), "$" . number_format($price, 2));
}

function submenu($conn, $query, $name, $col) {
  $results = $conn->query($query);
  if ($results->num_rows > 0) {
    element($col, "h2", array(), $name);
    $table = element($col, "table", array("class"=>"table table-hover text-center"));
    $tbody = element($table, "tbody");
    menuHead($tbody, "Name", "Description", "Toppings", "Price");

    while($result = $results->fetch_assoc()) {
      $query = "SELECT * FROM menu_items_toppings JOIN menu_toppings ON menu_toppings.id = menu_items_toppings.menu_topping_id WHERE menu_item_id = " . $result["id"];
      $results_toppings = $conn->query($query);
      $toppings = array();
      while($topping = $results_toppings->fetch_assoc()) {
        $toppings[] = $topping["name"];
      }

      menuRow($tbody, $result["name"], $result["description"], $toppings, $result["price"]);
    } // $result->fetch
  }
}

$hrefFacebook = "https://www.facebook.com/DeMinicos/";
$iconFacebook = $img . "/social/iconFacebook.png";
$hrefInstagram = "https://www.instagram.com/deminicos/";
$iconInstagram = $img . "/social/iconInstagram.png";
$hrefTwitter = "https://twitter.com/DeMinicos";
$iconTwitter = $img . "/social/iconTwitter.png";

$imgStore = $img . "/store.jpg";

// All content will be on panel
$panel = element($body, "div", array("class"=>"container-fluid"));
//$panel = element($panel, "div", array("class"=>"jumbotron"));

// Home {{{1
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12"));

// Menu {{{1
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
element($col, "h1", array(), "Photo Gallery");
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-md-12", "style"=>"padding-bottom: 10px;"));
for ($i = 0; $i < 2; $i++) {
    element($col, "br");
}
//TODO-AJJ [200409] - Add a photo gallery slider to this page. 
// Need to link to a google photo album.
$query = "SELECT * FROM menu_categories";
$categories = $conn->query($query);

if ($categories->num_rows > 0) {
  // output data of each row
  $row = element($panel, "div", array("class"=>"row"));
  $colFresh = element($row, "div", array("class"=>"offset-1 col-10 text-center"));
  // $colFrozen = element($row, "div", array("class"=>"col-6 text-center"));

  while($category = $categories->fetch_assoc()) {
    // Fresh
    $query = "SELECT * FROM menu_items WHERE category_id=" . $category["id"];
    $results = $conn->query($query);
    submenu($conn, $query, $category["name"], $colFresh);

    // Frozen
    // $query = "SELECT * FROM menu_items WHERE availableFrozen AND category_id=" . $category["id"];
    // $results = $conn->query($query);
    // submenu($conn, $query, "Frozen " . $category["name"], $colFrozen);
  } // $category->fetch
} // $categories > 0

require_once "assets/php/footer.php";

echo $dom->generateHTML();

?>
