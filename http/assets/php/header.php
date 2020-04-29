<?php

// Name: php/header.php
// Description: Build HTML document using only DOM elements to generate a valid string

// DOM {{{1
class htmlDOM extends DOMDocument {
  function __construct() { // {{{2
    // Default constructor
    parent::__construct();
  }

  function generateHTML() { // {{{2
    // Generate HTML as a string from the current DOM document
    $html = "<!DOCTYPE html>";
    $html .= parent::saveHTML();
    return $html;
  }

  function addElement($parent, $element, $attributes = array(), $innerHTML = "") { // {{{2
    // Create a DOM element and APPEND to the given parent element
    $child = parent::createElement($element, $innerHTML);
    foreach ($attributes as $name => $value)
      $this->setAttribute($child, $name, $value);
    $parent->appendChild($child);
    return $child;
  }

  function addAttribute($element, $name, $value = "") { // {{{2
    // Create a DOM attribute and APPEND to the given element's attribute
    // TODO [171022] - Append new class to existing classes or create class attribute if none exists
    $attribute = parent::createAttribute($name);
    $attribute->value = $value;
    $element->appendChild($attribute);
  }

  function setAttribute($element, $name, $value = "") { // {{{2
    // Create a DOM attribute and OVERWRITE the given element's attribute
    $attribute = parent::createAttribute($name);
    $attribute->value = $value;
    $element->appendChild($attribute);
  }

  function setInner($element, $innerHTML) { // {{{2
    // OVERWRITE the innerHTML of a DOM element to given value
    $element->nodeValue = $innerHTML;
  }

  function addInner($element, $innerHTML) { // {{{2
    $element->nodeValue = $element->nodeValue . " " . $innerHTML;
  }
}

// GLOBALS {{{1
$dom = new htmlDOM();

function element($parent, $element, $attributes = array(), $innerHTML = "") { // {{{2
  return $GLOBALS["dom"]->addElement($parent, $element, $attributes, $innerHTML);
}

function elements($elementArray) { // {{{2
  $parent = $elementArray[0][0];

  foreach ($elementArray as $elements) {
    $count = count($elements);
    $parent = element($elements[0], $elements[1], $elements[2]);
  }

  return $parent;
}

function addScript($parent, $src, $attributes = array()) { // {{{2
  // Add a script to the DOM with the given src
  return $GLOBALS["dom"]->addElement($parent, "script", array_merge($attributes, array("src"=>$src)));
}

function addStyle($parent, $href, $attributes = array()) { // {{{2
  // Add a stylesheet link with the given href
  return $GLOBALS["dom"]->addElement($parent, "link", array_merge($attributes, array("rel"=>"stylesheet", "href"=>$href)));
}

function addMeta($parent, $attributes = array()) { // {{{2
  return $GLOBALS["dom"]->addElement($parent, "meta", $attributes);
}

function addImage($parent, $src, $attributes = array()) { // {{{2
  return $GLOBALS["dom"]->addElement($parent, "img", array_merge($attributes, array("src"=>$src)));
}

function addInner($element, $class) { // {{{2
  $GLOBALS["dom"]->addInner($element, $class);
}

function addClass($element, $class) { // {{{2
  // Add a class to an existing element
  $GLOBALS["dom"]->addAttribute($element, "class", $class);
}

function addID($element, $id) { // {{{2
  // Add a class to an existing element
  $GLOBALS["dom"]->addAttribute($element, "id", $id);
}

function addName($element, $name) { // {{{2
  // Add a class to an existing element
  $GLOBALS["dom"]->addAttribute($element, "name", $name);
}

function addType($element, $type) { // {{{2
  // Add a class to an existing element
  $GLOBALS["dom"]->addAttribute($element, "type", $type);
}
// Layout {{{1
function br($element, $lines) { // {{{2
  for ($i = 0; $i < $lines; $i++)
    element($element, "br");
}

// Social {{{1
function socialLinks($element) { // {{{2
  $style .= 'max-width:50px;';
  $style .= 'width:10%;';

  $hrefFacebook = "https://www.facebook.com/DeMinicos/";
  // $iconFacebook = 'fab fa-facebook';
  $iconFacebook = '/assets/img/social/icon-facebook.png';
  
  $hrefInstagram = "https://www.instagram.com/deminicos/";
  // $iconInstagram = 'fab fa-instagram';
  $iconInstagram = '/assets/img/social/icon-instagram.png';
  
  $hrefTwitter = "https://twitter.com/DeMinicos";
  // $iconTwitter = 'fab fa-twitter';
  $iconTwitter = '/assets/img/social/icon-twitter.png';

  $row = element($element, "div", array("class"=>"row text-center"));
  $div = element($row, "div", array("id"=>"socialCol", "class"=>"col-12 text-center"));

  // Facebook
  $a = element ($div, "a", array("class"=>"socialIcon", "style"=>"color:#3b5998", "href"=>$hrefFacebook));
  $span = element($a, "span", array("class"=>"socialIcon"));
  element($span, "img", array("src"=>$iconFacebook, 'style'=>$style));

  // Instagram
  // $div = element($row, "div", array("id"=>"socialCol", "class"=>"col-4 text-center"));
  $a = element ($div, "a", array("class"=>"socialIcon", "href"=>$hrefInstagram));
  // $span = element($a, "span", array("class"=>"instagram"));
  $span = element($a, "span", array());
  // element($span, "span", array("class"=>$iconInstagram));
  element($span, "img", array("src"=>$iconInstagram, 'style'=>$style));

  // Twitter
  // $div = element($row, "div", array("id"=>"socialCol", "class"=>"col-4 text-center"));
  $a = element ($div, "a", array("class"=>"socialIcon", "style"=>"color:#00acee", "href"=>$hrefTwitter));
  $span = element($a, "span", array("class"=>"socialIcon"));
  // element($span, "span", array("class"=>$iconTwitter));
  element($span, "img", array("src"=>$iconTwitter, 'style'=>$style));
}

function phone($element, $type, $phoneNumber, $class, $style) { // {{{2
  $classPhone = 'fa fas fa-mobile';

  $div = element($element, "div", array("class"=>"text-center"));
  $type = element($div, $type, array("class"=>$class, "style"=>$style));
  $a = element($type, 'a', array("href"=>"tel:".$phoneNumber, 'style'=>$style));
  element($a, 'span', array("class"=>$classPhone));
  element($a, 'span', array("class"=>$class), ' ' . $phoneNumber);
  return $div;
}

function email($element, $type, $email, $emailcc, $emailSubject, $icon, $str, $class, $style) { // {{{2
  $classEmail = 'fa fas fa-envelope-open';

  $div = element($element, "div", array("class"=>"text-center"));
  $type = element($div, $type, array("class"=>$class, "style"=>$style));
  $a = element($type, "a", array("href"=>"mailto:".$email . "?subject=" . $emailSubject, 'style'=>$style));
  // I attempted to add the cc of office@deminicos.ca.. Instead this didn't seem to work properly. I am missing something.
  //$a = element($type, "a", array("href"=>"'mailto:{$email}?cc={$emailcc}&&subject={$emailSubject}'", 'style'=>$style));
  if ($icon)
    element($a, 'span', array("class"=>$classEmail));
  element($a, 'span', array("class"=>$class), ' ' . $str);
  return $div;
}

function linkfile($element, $type, $infilepath, $infile, $intext, $class, $style) { // {{{2
   
  $div = element($element, "div", array("class"=>"text-center"));
  $elem = element($div, $type, array(), " ");
  $a = element($elem, "a", array("href"=>"".$infilepath.$infile), ' ' .$intext);

  // $div = element($element, "div", array("class"=>"text-center"));
  // $type = element($div, $type, array("class"=>$class, "style"=>$style));
  // $a = element($type, "a", array("href"=>''.$infilepath.$infile, "style"=>$style));
  // element($a, 'span', array("class"=>$class));
  // element($a, 'span', array("class"=>$class), $intext);

  return $div;
}

function address($element, $type, $mapsLink, $mapsAddress, $class, $style) { // {{{2
  $classAddress = 'fa fas fa-map-marker';

  $div = element($element, "div", array("class"=>"text-center"));
  $type = element($div, $type, array("class"=>$class, "style"=>$style));
  $a = element($type, 'a', array("href"=>$mapsLink));
  element($a, 'span', array("class"=>$classAddress));
  element($a, 'span', array("class"=>$class), ' ' . $mapsAddress);
  return $div;
}

function googleMaps($element, $src, $id, $class, $style) { // {{{2
  $div = element($element, "div");
  $row = element($div,'div',array('class'=>'row'));
  element($row,'div',array('id'=>$id, 'class'=>'col-12', 'style'=>$style));
  $col = element($row,'div',array('class'=>'col-12'));
  return element($col, "iframe", array(
    "id"=>"googleMap",
    "class"=>$class,
    "style"=>$style,
    "frameborder"=>"0",
    "src"=>$src
  ));
}

/*
function address($element, $type) { // {{{2
  $mapsLink = "https://www.google.com/maps/place/De+Minico's/@51.0946308,-114.0457049,14.25z/data=!4m12!1m6!3m5!1s0x53716500c531255d:0xf2d24169e7a44e1b!2sDe+Minico's!8m2!3d51.093125!4d-114.032371!3m4!1s0x53716500c531255d:0xf2d24169e7a44e1b!8m2!3d51.093125!4d-114.032371?hl=en-US";
  $mapsAddress = "1319 45 Ave NE #5, Calgary, Alberta";
  $iconMapPointer = 'fas fa-map-marker';

  $div = element($element, "div", array("class"=>"text-center"));
  $elem = element($div, $type, array());
  $a = element($elem, 'a', array("class"=>$iconMapPointer, "href"=>$mapsLink), ' ' . $mapsAddress);
}*/

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
function menu($conn, $query, $category, $col, $allowHeader=true) { // {{{2
  $results = $conn->query($query);
  if ($results->num_rows > 0) {
    element($col, "h2", array(), $category);
    $table = element($col, "table", array("class"=>"table table-hover text-center"));
    $tbody = element($table, "tbody");

    // Header
    if ($allowHeader)
      menuTR($tbody, 'th', "Name", "Description", "Toppings", "Price");

    // Body
    while($result = $results->fetch_assoc()) {
      $query = "SELECT * FROM menu_items_toppings JOIN menu_toppings ON menu_toppings.id = menu_items_toppings.menu_topping_id WHERE menu_item_id = " . $result["id"];
      $results_toppings = $conn->query($query);
      $toppings = array();
      while($topping = $results_toppings->fetch_assoc())
        $toppings[] = $topping["name"];
      menuTR($tbody, 'td', $result['name'], $result['description'], implode(", ", $toppings), "$" . number_format($result['price'], 2));
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
      menu($conn, $query, $category["name"], $colFresh);
    }
  }
}

// Navbar {{{1
function navLink($parent, $id, $inner, $href, $style) { // {{{2
  // Insert navbar link into $parent DOM element
  $li = element($parent, "li", array("id"=>$id, "class"=>"nav-item"));
  return element($li, "a", array("class"=>"nav-link", 'style'=>$style, "href"=>$href), $inner);
}

function navLink2($element, $type, $link, $name) {
  $row = element($element, 'div', array("class"=>"row"));
  $col = element($row, 'div', array("class"=>"col-12", "style"=>"text-align:center"));
  $typeCol = element($col, $type, array("style"=>"padding-bottom:15px; text-allign:center;"));
  return element($typeCol, "a", array("href"=>$link), $name);
}

// Head {{{1
// Default HTML template {{{2
$assets = "assets";
$css = $assets . "/css";
$doc = $assets . "/doc";
$fonts = $assets . "/fonts";
$img = $assets . "/img";
$js = $assets . "/js";
$php = $assets . "/php";
$doc = $assets . "/doc/";

$companyName = "De Minico's";
$favicon = $img . "/favicon.png";

// Brand {{{2
$imgStore = $img . "/store.jpg";
$imgHome = $img  . "/home.png";
// $imgBrand = $img . "/logonostamp.jpg";
$imgBrand = $img . "/logo.png";

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
$body = element($html, "body", array("class"=>"fa", 'style'=>'width:100%;'));

// Header {{{1
// Development Flags {{{2
// Set `index.php` link to display order form and only display order form on nav
$ORDERFORM = true;

// Tab title {{{2
element($head, "title", array(), $companyName);
element($head, "link", array("rel"=>"icon", "href"=>$favicon));

// Metadata {{{2
addMeta($head, array("charset"=>"UTF-8"));
addMeta($head, array("name"=>"viewport", "content"=>"width=device-width", "initial-scale"=>"1", "shrink-to-fit"=>"no"));
// addMeta($head, array("expires"=>"Tue, 01 Jan 2000 00:00:00 GMT"));

// Scripts {{{2
addScript($head, $js . "/jquery.min.js");
addScript($head, $js . "/bootstrap.min.js");
addScript($head, $js . "/script.js");

// Stylesheets {{{2
addStyle($head, 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
addStyle($head, $css . "/bootstrap.min.css");
addStyle($head, $css . "/style.css?rnd=" . rand());
// addStyle($head, $css . "/table.css?rnd=" . rand());
addStyle($head, $css . "/print.css", array("media"=>"print"));

// Nav {{{2
require_once "assets/php/navbar.php";

// Variables {{{2
// Information {{{3
$email = 'office@deminicos.ca';
$emailcc = 'office@deminicos.ca';
$emailSubject = 'I would like to place an order!';
$emailStr = 'Click here to order';
$phoneNumber = "403-454-6789";
$mapsLink = "https://www.google.com/maps/place/De+Minico's/@51.0946308,-114.0457049,14.25z/data=!4m12!1m6!3m5!1s0x53716500c531255d:0xf2d24169e7a44e1b!2sDe+Minico's!8m2!3d51.093125!4d-114.032371!3m4!1s0x53716500c531255d:0xf2d24169e7a44e1b!8m2!3d51.093125!4d-114.032371?hl=en-US";
$mapsAddress = "1319 45 Ave NE #5, Calgary, Alberta";
$mapsIfram = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.831072976366!2d-114.032371!3d51.093125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716500c531255d%3A0xf2d24169e7a44e1b!2sDe+Minico&#39;s!5e0!3m2!1sen!2sca!4v1509148157628";

// Styles {{{3
// Common
$stylePaddingBottom = "padding-bottom:25px;";
$stylePaddingTop = "padding-top:25px;";
$styleFontWeight = "font-weight:bold;";
$styleFontP = $styleFontWeight;
$styleFontP .= "font-size:20px;";

// Address
// $styleAddress = $stylePaddingTop;
$styleAddress = $stylePaddingBottom;
$classAddress = "text-center";

// Background
$background = $img . "/chalkboard.jpg";
$styleBackground = "position:fixed;";
$styleBackground .= "left:-100px;";
$styleBackground .= "top:0;";
$styleBackground .= "height:110%;";
$styleBackground .= "width:100%;";
$styleBackground .= "width:2500px;";
$styleBackground .= "background-image:url('" . $background . "');";
$styleBackground .= "background-size: cover;";

// Phone
$stylePhone = $stylePaddingTop;
$stylePhone .= $stylePaddingBottom;
$classPhone = "text-center";

// Maps
// $styleMaps = $stylePaddingTop;
$styleMaps = $stylePaddingBottom;
$styleMaps .= 'width:75%;';
$classMaps = "";

// Menu
$styleNavMenu = "position:fixed;";
$styleNavMenu .= "top:100px;";
$styleNavMenu .= "left:0;";
$styleNavMenu .= "width:50px;";
$styleNavMenu .= "height:200px;";
$classNavMenu = "";

// Order Form
$styleOrderForm = "width:95%;";
$styleOrderForm .= "border-radius:2%;";
// $styleOrderForm .= $stylePaddingBottom;

// Panel {{{1
$stylePanel = "width:100%;";
$classPanel = "container-fluid ";
$panel = element($body, "div", array("class"=>$classPanel, "style"=>$stylePanel));

// Common Background {{{2
$background = element($panel, "div", array("style"=>$styleBackground));
?>
