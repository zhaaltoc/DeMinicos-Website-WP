<?php
/*
$row = element($panel, "div", array("class"=>"row"));
fcol = element($row, "div", array("class"=>"col-12 text-center"));
$div = element($row, "div", array("id"=>"menu"));
$vmenu = element($div, "v-app");
$vmenu = element($col, "v-menu");
$btn = element($vmenu, "v-btn", array(), 'Click');
$card = element($vmenu, "v-card", array(), 'Content');
 */

$div = element($panel, 'div');
$page = element(
  element($div, 'div', array('id'=>'page', 'class'=>'row')),
  'div', array('class'=>'col-12'));

$row = element($page, 'div', array('class'=>'row'));

$col = element($row, 'div', array('class'=>'col-md-3'));
$col = element($row, 'div', array('class'=>'col-md-3'));
$div = element($col, 'div', array('class'=>'text-center'));
$app = element($div, "h1", array(), '{{ title }}');
$col = element($row, 'div', array('class'=>'col-md-3'));
$div = element($col, 'div', array('class'=>'text-center'));
$app = element($div, "h1", array('v-on:click'=>'sub'), '{{ subtitle }}');

$div = element($page, 'div', array('class'=>'text-center'));

$div = element($page, 'div', array('class'=>'text-center'));
$app = element($div, "p", array(), 'Count: {{ count }}');

$div = element($page, 'div', array('class'=>'text-center'));
$app = element($div, "button",
  array('v-on:click'=>'count++', 'style'=>'height:20px;'),
  'Up');
$app = element($div, "button",
  array('v-on:click'=>'count--', 'style'=>'height:20px;'),
  'Down');

$div = element($page, 'div', array('class'=>'text-center'));
$app = element($div, "ol");

$div = element($page, 'div', array('class'=>'text-center'));
$app = element($div, "todo-item", 
  array(
    'style'=>'padding-bottom:10px;',
    'v-for'=>'item in mylist',
    'v-bind:todo'=>'item',
    'v-bind:key'=>'item.id'));
$app = element($div, "todo-item2", 
  array(
    'style'=>'padding-bottom:10px;',
    'v-for'=>'item in mylist',
    'v-bind:todo'=>'item',
    'v-bind:key'=>'item.id'));

$app = element($div, "async-example");

$div = element($panel, 'div');
$bob = element(
  element($div, 'div', array('id'=>'bob', 'class'=>'row')),
  'div', array('class'=>'col-12'));

$row = element($bob, 'div', array('class'=>'row'));
$col = element($row, 'div', array('class'=>'col-md-3'));
$col = element($row, 'div', array('class'=>'col-md-3'));
$div = element($col, 'div', array('class'=>'text-center'));
$app = element($div, "h1", array(), '{{ title }}');
$col = element($row, 'div', array('class'=>'col-md-3'));
$div = element($col, 'div', array('class'=>'text-center'));
$app = element($div, "h1", array('v-on:click'=>'sub'), '{{ subtitle }}');
?>
