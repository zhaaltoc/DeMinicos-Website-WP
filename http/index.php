<?php
// Name: index.php
// Authors: Travis Gall
// Description: Root page

$_SESSION['page'] = $_GET['page'];

require_once 'assets/php/header.php';
require_once $php . '/style.php';

if($ORDERFORM || $_SESSION['page'] == 'Order Form') {
  require $php . '/orderform.php';
}
else {
  if ($_SESSION['page'] == '' || $_SESSION['page'] == 'Home')
    require $php . '/overview.php';
  else
    menu($panel, $conn, $classNavMenu, $styleNavMenu);
}

require_once $php . '/footer.php';
?>
