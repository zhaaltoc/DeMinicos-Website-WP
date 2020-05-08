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
  require $php . '/overview.php';
}

// Footer {{{1
require_once $php . '/footer.php';
?>
