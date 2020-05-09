<?php
// Name: php/navbar.php
// Description: Site navigation

// Functions {{{1
function navLink($parent, $id, $inner, $href, $style) { // {{{2
  $div = element($parent, 'div', array('id'=>'nav'));
  $li = element($div, "li", array("class"=>"nav-item"));
  // return element($li, "a", array('id'=>'nav', 'v-on:click'=>'nav("' . $inner . '")', "class"=>"nav-link", 'style'=>$style, "href"=>$href), $inner);
  // return element($li, "a", array("class"=>"nav-link", 'style'=>$style, "href"=>$href . '?page="' . urlencode($inner) . '"'), $inner);
  if ($id != 'location')
    return element($li, "a", array("class"=>"nav-link", 'style'=>$style, "href"=>'index.php?page=' . urlencode($inner)), $inner);
  return element($li, "a", array("class"=>"nav-link", 'style'=>$style, "href"=>"#" . $id), $inner);
}

function navLink2($element, $type, $link, $name) { // {{{2
  $row = element($element, 'div', array("class"=>"row"));
  $col = element($row, 'div', array("class"=>"col-12", "style"=>"text-align:center"));
  $typeCol = element($col, $type, array("style"=>"padding-bottom:15px; text-allign:center;"));
  return element($typeCol, "a", array("href"=>$link), $name);
}

// Navbar {{{1
$nav = element($body, "nav", array("class"=>"navbar navbar-toggleable-md fixed-top navbar-light bg-light", "style"=>$styleNav));// navbar-inverse bg-inverse"));
// $nav = element($body, "nav", array("class"=>"navbar navbar-toggleable-md fixed-top navbar-light bg-light", "style"=>"background-color:transparent"));// navbar-inverse bg-inverse"));
$navToggler = element($nav, "button", array(
    "class"=>"navbar-toggler navbar-toggler-right",
    "type"=>"button",
    "data-toggle"=>"collapse",
    "data-target"=>"#navbarSupportedContent",
    "aria-controls"=>"navbarSupportedContent",
    "aria-expanded"=>"false",
    "aria-label"=>"Toggle navigation"
));
element($navToggler, "span", array("class"=>"navbar-toggler-icon"));

$navBrand = element($nav, "a", array("class"=>"navbar-brand", "href"=>$hrefBrand));
element($navBrand, "img", array("class"=>"navbar", "src"=>$imgBrand, "alt"=>"", "style"=>"padding:0; height: 32px; border-radius:10%"));
$navBar = element($nav, "div", array("id"=>"navbarSupportedContent", "class"=>"collapse navbar-collapse"));

$navLinks = element($navBar, "ul", array('id'=>'nav', 'class'=>$classNavLinks));

// Query pages
$queryNav = 'SELECT name FROM pages';
$results = $conn->query($queryNav);

// Create nav from results
navLink($navLinks, "homepage", "", "/", $styleNavLinks); // Extra space still a link
if(!$ORDERFORM) {
  navLink($navLinks, "homepage", "Home", "/", $styleNavLinks);

  while($result = $results->fetch_assoc()) {
    $name = $result['name'];
    $navLink = str_replace(' ', '', strtolower($name));// . '.php';
    // navLink($navLinks, $navLink, $name, '#'[>$navLink<], $styleNavLinks);
    navLink($navLinks, $navLink, $name, $navLink . '.php', $styleNavLinks);
  }
} else {
  navLink($navLinks, "orderform", "Order Form", "/", $styleNavLinks);
}
navLink($navLinks, "location", "Location", "#", $styleNavLinks);
?>
