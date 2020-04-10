<?php

// Name: index.php
// Description:

require_once "assets/php/layout/header.php";

$navPickup->setAttribute('class', 'nav-link active');

$jumbotron = $dom->htmlElement($body, "div", array("class"=>"jumbotron"));
$dom->htmlElement($jumbotron, "div", array("class"=>"container"));
$dom->htmlElement(true, "h1", array("class"=>"display-3"), "$TITLE");
$dom->htmlElement(true, "p", array(), "Heading");
$div = $dom->htmlElement(true, "div");
$dom->htmlElement($div, "a", array("class" => "btn btn-primary btn-lg", "href" => "#", "role" => "button"), "Learn More >>");

$container = $dom->htmlElement($body, "div", array("class" => "container"));
$row = $dom->htmlElement($container, "div", array("class" => "row text-center"));
$dom->htmlElement($row, "div", array("class" => "col-md-4"));
$dom->htmlElement(true, "h2", array(), "Heading");
$dom->htmlElement(true, "p", array(), "Heading");
$p = $dom->htmlElement(true, "p");
$dom->htmlElement($p, "a", array("class" => "btn btn-secondary", "href" => "#", "role" => "button"), "Learn More >>");
$dom->htmlElement($row, "div", array("class" => "col-md-4"));
$dom->htmlElement(true, "h2", array(), "Heading");
$dom->htmlElement(true, "p", array(), "Heading");
$p = $dom->htmlElement(true, "p");
$dom->htmlElement($p, "a", array("class" => "btn btn-secondary", "href" => "#", "role" => "button"), "Learn More >>");
$dom->htmlElement($row, "div", array("class" => "col-md-4"));
$dom->htmlElement(true, "h2", array(), "Heading");
$dom->htmlElement(true, "p", array(), "Heading");
$p = $dom->htmlElement(true, "p");
$dom->htmlElement($p, "a", array("class" => "btn btn-secondary", "href" => "#", "role" => "button"), "Learn More >>");
$dom->htmlElement($container, "hr");
$dom->htmlElement($container, "footer");
$dom->htmlElement(true, "p", array(), "© Company 2017");

require_once "assets/php/layout/footer.php";

?>
