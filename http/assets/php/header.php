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
// }}}

// Default HTML template
$assets = "assets";
$css = $assets . "/css";
$img = $assets . "/img";
$js = $assets . "/js";
$php = $assets . "/php";

$companyName = "De Minico's";
$favicon = $img . "/favicon.png";

// Base structure
$html = element($dom, "html");
$head = element($html, "head");
$body = element($html, "body");

// Head {{{

// Tab title
element($head, "title", array(), $companyName);
element($head, "link", array("rel"=>"icon", "href"=>$favicon));

// Metadata
addMeta($head, array("charset"=>"UTF-8"));
addMeta($head, array("name"=>"viewport", "content"=>"width=device-width", "initial-scale"=>"1", "shrink-to-fit"=>"no"));

// Scripts
addScript($head, $js . "/jquery.min.js");
addScript($head, $js . "/bootstrap.min.js");
addScript($head, $js . "/script.js");

// Stylesheets
addStyle($head, $css . "/font-awesome.css");
addStyle($head, $css . "/bootstrap.min.css");
addStyle($head, $css . "/style.css");
addStyle($head, $css . "/print.css", array("media"=>"print"));

// }}} Head

// Body {{{

// Load navbar
require_once "assets/php/navbar.php";

// }}} Body
?>
