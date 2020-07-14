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
// Variables {{{1
$assets = "assets";
$css = $assets . "/css";
$doc = $assets . "/doc";
$fonts = $assets . "/fonts";
$img = $assets . "/img";
$js = $assets . "/js";
$mysql = "../mysql";
$php = $assets . "/php";

$companyName = "De Minico's";

// Build {{{1
$ORDERFORM = false;

require_once $mysql . '/mysqler.php';

require_once $php . '/menu.php';
require_once $php . '/social.php';

require_once $php . '/images.php';
require_once $php . '/style.php';

require_once $php . '/body.php';
require_once $php . '/navbar.php';

require_once $php . '/style.php';
?>
