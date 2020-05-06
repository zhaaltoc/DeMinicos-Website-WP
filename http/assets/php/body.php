<?php
// Body {{{1
$html = element($dom, "html");
$head = element($html, "head");
$body = element($html, "body", array("class"=>$classBody, "style"=>$styleBody));

// Header {{{1
element($head, "title", array(), $companyName);
element($head, "link", array("rel"=>"icon", "href"=>$favicon));

// Metadata {{{1
addMeta($head, array("charset"=>"UTF-8"));
addMeta($head, array("name"=>"viewport", "content"=>"width=device-width", "initial-scale"=>"1", "shrink-to-fit"=>"no"));

// Style {{{1
addStyle($head, 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
addStyle($head, $css . "/bootstrap.min.css");
addStyle($head, $css . "/style.css?rnd=" . rand());
addStyle($head, $css . "/table.css?rnd=" . rand());

$panel = element($body, "div", array('id'=>'panel', "class"=>$classPanel, "style"=>$stylePanel));
$background = element($panel, "div", array("style"=>$styleBackground));
?>
