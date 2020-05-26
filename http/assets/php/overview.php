<?php
// Name: overview.php
// Authors: Travis Gall
// Description: Main index

$imgLogo = $img . "/logo.png";
$imgLogoNoStamp = $img . "/logonostamp.jpg";
// $imgLogoNoStamp = $img . "/logostampcolor_reverse.jpg";

// About Us {{{1
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
// $div = element($col, "div", array("style"=>"padding-top:65px;"));
element($col, "img", array("src"=>$imgLogoNoStamp, "style"=>"width: 50%; border-radius: 5%;"));

$row = element($panel, "div", array("class"=>"text-center row"));
$col = element($row, "div", array("class"=>"col-md-12", "style"=>"padding-bottom: 50px;"));

// Description {{{2
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-md-4", "style"=>"padding-top: 15px;"));
element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "De Minico’s offers delicious pizza and paninis. Delight in authentic Italian flavours and try the Margherita or Artista pizza. Add a little kick to your day and spice things up with the Volta panini.");
element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "Order De Minico’s");

// TEST VUE {{{2
// element($col, "div", array("id"=>"app"), "{{ message }}");

// $dev = element($col, "div", array("id"=>"app-2"));
// element($dev, "span", array("v-bind:title"=>"message"), "Mouse Over Me!");

// $dev = element($col, "div", array("id"=>"app-3"));
// element($dev, "span", array("v-if"=>"seen"), "Now you see me!");

// Phone {{{2
phone($col, "p", $phoneNumber, $classPhone, $stylePhoneP);

// Social Media {{{2
element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "Learn more about us by following us on social media.");
socialLinks($col);

// Navigation {{{2
// $col = element($row, "div", array("class"=>"text-center col-md-1"));
$col = element($row, "div", array("class"=>"col-md-4", "style"=>"padding-top:30px; text-align:center;"));
navLink2($col, 'h3', 'index.php?page=In+Store+Menu', 'In Store Menu');
navLink2($col, 'h3', 'index.php?page=Order+Form', 'Order Form');
//navLink2($col, 'h3', 'catering.php', 'Catering');
//navLink2($col, 'h3', 'photogallery.php', 'Photo Gallery');

// Hours {{{2
$col = element($row, "div", array("class"=>"text-center col-md-4"));
$row = element($col, "div", array("class"=>"row"));

$col = element($row, "div", array("class"=>"col-12"));
element($col, "h2", array("style"=>"padding-top:15px;"), "Hours");

// $col = element($row, "div", array("class"=>"col-2"));
$col = element($row, "div", array("class"=>"col-12", 'style'=>'text-align:right;'));
$table = element($col, "table", array('style'=>'margin-left:-10px;width:100%;'));
$tbody = element($table, "tbody");
hourRow($tbody, "Monday", "11 A.M.", "2 P.M.", $styleDays, $styleHours);
hourRow($tbody, "Tuesday", "11 A.M.", "6 P.M.", $styleDays, $styleHours);
hourRow($tbody, "Wednsday", "11 A.M.", "6 P.M.", $styleDays, $styleHours);
hourRow($tbody, "Thursday", "11 A.M.", "6 P.M.", $styleDays, $styleHours);
hourRow($tbody, "Friday", "11 A.M.", "8 P.M.", $styleDays, $styleHours);
hourRow($tbody, "Saturday", "Closed", "", $styleDays, $styleHours);
hourRow($tbody, "Sunday", "Closed", "", $styleDays, $styleHours);
?>
