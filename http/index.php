<?php
// Name: index.php
// Authors: Travis Gall
// Description: Root page

$_SESSION['page'] = $_GET['page'];

// Class functions, variables and required PHP requires
require_once 'assets/php/header.php';

// Front end determination
if($ORDERFORM || $_SESSION['page'] == 'Order Form')
  require $php . '/orderform.php';
elseif ($_SESSION['page'] == '' || $_SESSION['page'] == 'Home')
  require $php . '/overview.php';
else
  menu($panel, $conn, $classNavMenu, $styleNavMenu);

require_once $php . '/footer.php';
?>
