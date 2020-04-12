<?php

// Name: php/header.php
// Description: Build HTML document using only DOM elements to generate a valid string

# htmlDOM {{{
class htmlDOM extends DOMDocument {
    // Default constructor
    function __construct() {
        parent::__construct();
    }

    // Generate HTML as a string from the current DOM document
    function generateHTML() {
        $html = "<!DOCTYPE html>";
        $html .= parent::saveHTML();
        return $html;
    }

    // Create a DOM element and APPEND to the given parent element
    function addElement($parent, $element, $attributes = array(), $innerHTML = "") {
        $child = parent::createElement($element, $innerHTML);
        foreach ($attributes as $name => $value)
            $this->setAttribute($child, $name, $value);
        $parent->appendChild($child);
        return $child;
    }

    // Create a DOM attribute and APPEND to the given element's attribute
    function addAttribute($element, $name, $value = "") {
        // TODO [171022] - Append new class to existing classes or create class attribute if none exists
        $attribute = parent::createAttribute($name);
        $attribute->value = $value;
        $element->appendChild($attribute);
    }

    // Create a DOM attribute and OVERWRITE the given element's attribute
    function setAttribute($element, $name, $value = "") {
        $attribute = parent::createAttribute($name);
        $attribute->value = $value;
        $element->appendChild($attribute);
    }

    // OVERWRITE the innerHTML of a DOM element to given value
    function setInner($element, $innerHTML) {
        $element->nodeValue = $innerHTML;
    }

    function addInner($element, $innerHTML) {
        $element->nodeValue = $element->nodeValue . " " . $innerHTML;
    }

}

// GLOBALS
$dom = new htmlDOM();

function element($parent, $element, $attributes = array(), $innerHTML = "") {
    return $GLOBALS["dom"]->addElement($parent, $element, $attributes, $innerHTML);
}

function elements($elementArray) {
    $parent = $elementArray[0][0];

    $i = 0;
    foreach ($elementArray as $elements) {
        $count = count($elements);
        $parent = element($elements[0], $elements[1], $elements[2]);
        /*
        if ($i = 0) {
            $parent = element($elements[0], $elements[1], $elements[2]);
        }
        else {
            $parent = element($parent, $elements[0], $elements[1]);
        }
         */

        $i++;
    }

    return $parent;
}

// Add a script to the DOM with the given src
function addScript($parent, $src, $attributes = array()) {
    return $GLOBALS["dom"]->addElement($parent, "script", array_merge($attributes, array("src"=>$src)));
}

// Add a stylesheet link with the given href
function addStyle($parent, $href, $attributes = array()) {
    return $GLOBALS["dom"]->addElement($parent, "link", array_merge($attributes, array("rel"=>"stylesheet", "href"=>$href)));
}

function addMeta($parent, $attributes = array()) {
    return $GLOBALS["dom"]->addElement($parent, "meta", $attributes);
}

function addImage($parent, $src, $attributes = array()) {
    return $GLOBALS["dom"]->addElement($parent, "img", array_merge($attributes, array("src"=>$src)));
}


function addInner($element, $class) {
    $GLOBALS["dom"]->addInner($element, $class);
}

// Add a class to an existing element
function addClass($element, $class) {
    $GLOBALS["dom"]->addAttribute($element, "class", $class);
}

// Add a class to an existing element
function addID($element, $id) {
    $GLOBALS["dom"]->addAttribute($element, "id", $id);
}

// Add a class to an existing element
function addName($element, $name) {
    $GLOBALS["dom"]->addAttribute($element, "name", $name);
}

// Add a class to an existing element
function addType($element, $type) {
    $GLOBALS["dom"]->addAttribute($element, "type", $type);
}
// Social {{{1
function socialLinks($element) { // {{{2
  $hrefFacebook = "https://www.facebook.com/DeMinicos/";
  $iconFacebook = 'fab fa-facebook';
  $hrefInstagram = "https://www.instagram.com/deminicos/";
  $iconInstagram = 'fab fa-instagram';
  $hrefTwitter = "https://twitter.com/DeMinicos";
  $iconTwitter = 'fab fa-twitter-square';

  $row = element($element, "div", array("class"=>"text-center"));
  $div = element($row, "div", array("id"=>"socialCol", "class"=>"col-12 text-center"));
  $a = element ($div, "a", array("class"=>"socialIcon", "href"=>$hrefFacebook));
  element($a, "i", array("class"=>$iconFacebook));
  $a = element ($div, "a", array("class"=>"socialIcon", "href"=>$hrefInstagram));
  element($a, "i", array("class"=>$iconInstagram));
  $a = element ($div, "a", array("class"=>"socialIcon", "href"=>$hrefTwitter));
  element($a, "i", array("class"=>$iconTwitter));
}



function br($element, $lines) { // {{{2
  for ($i = 0; $i < $lines; $i++) {
    element($element, "br");
  }
}

function phone($element, $phoneNumber, $type) { // {{{2
  $div = element($element, "div", array("class"=>"text-center"));
  $elem = element($div, $type, array(), "Call ");
  element($elem, "a", array("href"=>"tel:".$phoneNumber), $phoneNumber);
  element($elem, "text", array(), " for pickup or delivery!");
}

// Hours {{{1
function hourRow($tbody, $day, $open, $closed) { // {{{2
    $tr = element($tbody, "tr");
    $td = element($tr, "td");
    $p = element($td, "p", array("style"=>"margin-bottom:5px;"));
    element($p, "b", array(), $day);
    $td = element($tr, "td");
    element($td, "p", array("style"=>"margin-bottom:5px;"), $open);
    if ($open != "Closed") {
        $td = element($tr, "td");
        element($td, "p", array("style"=>"margin-bottom:5px;"), "-");
        $td = element($tr, "td");
        element($td, "p", array("style"=>"margin-bottom:5px;"), $closed);
    }
}

// Menus {{{1
// TODO-TJG [180204] - Update menu functions to be one function(array of html ready data, bool is header)
function menuHead($tbody, $name, $description, $toppings, $price) { // {{{2
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

function menuRow($tbody, $name, $description, $toppings, $price) { // {{{2
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

function submenu($conn, $query, $name, $col) { // {{{2
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


function menus($conn, $panel) { // {{{2
  $query = "SELECT * FROM menu_categories";
  $categories = $conn->query($query);

  if ($categories->num_rows > 0) {
    // output data of each row
    $row = element($panel, "div", array("class"=>"row"));
    $colFresh = element($row, "div", array("class"=>"offset-1 col-10 text-center"));

    while($category = $categories->fetch_assoc()) {
      // Fresh
      $query = "SELECT * FROM menu_items WHERE category_id=" . $category["id"];
      $results = $conn->query($query);
      submenu($conn, $query, $category["name"], $colFresh);
    }
  }
}

// Navbar {{{1
function navLink($parent, $id, $inner, $href) { // {{{2
  // Insert navbar link into $parent DOM element
  $li = element($parent, "li", array("id"=>$id, "class"=>"nav-item"));
  $a = element($li, "a", array("class"=>"nav-link", "href"=>$href), $inner);
}

// Head {{{1
// Default HTML template {{{2
$assets = "assets";
$css = $assets . "/css";
$img = $assets . "/img";
$js = $assets . "/js";
$php = $assets . "/php";

$companyName = "De Minico's";
$favicon = $img . "/favicon.png";

// Brand {{{2
$imgStore = $img . "/store.jpg";
$imgHome = $img  . "/home.png";
$imgBrand = $img . "/logonostamp.jpg";

// Phone {{{2
$phoneNumber = "403-454-6789";

// Service {{{2
// $imgBrand = $img . "/banner.png";
$hrefBrand = "/";
$imgDoordash = $img . "/doordash.png";
$hrefDoordash = "https://www.doordash.com/store/de-minico-s-calgary-99506/";
$imgDoordash = $img . "/skipdish.png";
$hrefSkipDish = "https://www.skipthedishes.com/de-minicos";

// Base structure {{{2
$html = element($dom, "html");
$head = element($html, "head");
$body = element($html, "body", array("class"=>"fa"));

// Tab title {{{2
element($head, "title", array(), $companyName);
element($head, "link", array("rel"=>"icon", "href"=>$favicon));

// Metadata {{{2
addMeta($head, array("charset"=>"UTF-8"));
addMeta($head, array("name"=>"viewport", "content"=>"width=device-width", "initial-scale"=>"1", "shrink-to-fit"=>"no"));

// Scripts {{{2
addScript($head, $js . "/jquery.min.js");
addScript($head, $js . "/bootstrap.min.js");
addScript($head, $js . "/script.js");

// Stylesheets {{{2
addStyle($head, 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
addStyle($head, $css . "/bootstrap.min.css");
addStyle($head, $css . "/style.css");
addStyle($head, $css . "/print.css", array("media"=>"print"));

// Nav {{{2
require_once "assets/php/navbar.php";

// Panel {{{2
// All content will be on panel
$panel = element($body, "div", array("class"=>"container-fluid"));
?>
