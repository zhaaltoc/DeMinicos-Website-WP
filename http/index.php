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
  // $div = element($col, "div", array('v-on:click'=>'sub'));
  $app = element($col, "h1", array('v-on:click'=>'sub', 'id'=>'page'), '{{ subtitle }}');

  // element($col, "h1", array(), "In Store Menu");

  require $php . '/overview.php';
}

// Footer {{{1
require_once $php . '/footer.php';
?>
