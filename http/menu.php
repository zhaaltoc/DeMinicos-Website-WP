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
for ($i = 0; $i < 2; $i++) {
    element($col, "br");
}

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
