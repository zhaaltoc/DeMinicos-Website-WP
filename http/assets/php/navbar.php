<?php
// Name: php/navbar.php
// Description: Site navigation

// Functions {{{1
function navLink($parent, $id, $inner, $href, $style) { // {{{2
  // Insert navbar link into $parent DOM element
  $li = element($parent, "li", array("id"=>$id, "class"=>"nav-item"));
  return element($li, "a", array("class"=>"nav-link", 'style'=>$style, "href"=>$href), $inner);
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

$navLinks = element($navBar, "ul", array('class'=>$classNavLinks));

$queryNav = 'SELECT name FROM pages';
$results = $conn->query($queryNav);
navLink($navLinks, "home", "", "/", $styleNavLinks); // Extra space still a link
if(!$ORDERFORM) {
  navLink($navLinks, "home", "Home", "/", $styleNavLinks);
  while($result = $results->fetch_assoc()) {
    $name = $result['name'];
    $navLink = str_replace(' ', '', strtolower($name)) . '.php';
    navLink($navLinks, "home", $name, $navLink, $styleNavLinks);
  }
} else {
  navLink($navLinks, "orderform", "Order Form", "/", $styleNavLinks);
}
navLink($navLinks, "location", "Location", "#", $styleNavLinks);
?>
