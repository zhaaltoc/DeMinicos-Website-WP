<?php
// Name: index.php
// Authors: Travis Gall
// Description: Root page

require_once 'assets/php/header.php';
require_once $php . '/style.php';

if($ORDERFORM) {
  require $php . '/orderform.php';
}
else {
  $row = element($panel, "div", array("class"=>"row"));
  $col = element($row, "div", array('id'=>'page', "class"=>"col-12 text-center"));
  $app = element($col, "h1", array(), '{{ title }}');
  $app = element($col, "h1", array('v-on:click'=>'sub'), '{{ subtitle }}');
  $app = element($col, "p", array(), 'Count: {{ count }}');
  $app = element($col, "button", array('v-on:click'=>'count++', 'style'=>'height:20px;'), 'Up');
  $app = element($col, "button", array('v-on:click'=>'count--', 'style'=>'height:20px;'), 'Down');
  
  // $row = element($panel, "div", array("class"=>"row"));
  // $col = element($row, "div", array('id'=>'', "class"=>"col-12 text-center"));
  
  // $col = element($row, "div", array('id'=>'page', "class"=>"col-12 text-center"));

  // element($col, "h1", array(), "In Store Menu");

  require $php . '/overview.php';
}

// Footer {{{1
require_once $php . '/footer.php';
?>
