<?php
// Name: index.php
// Authors: Travis Gall
// Description: Main index

require_once "assets/php/header.php";

$imgLogo = $img . "/logo.png";
$imgLogoNoStamp = $img . "/logonostamp.jpg";
// $imgLogoNoStamp = $img . "/logostampcolor_reverse.jpg";
//

if($ORDERFORM) {
require "orderform.php";
}
else {
  // About Us {{{1
  $row = element($panel, "div", array("class"=>"row"));
  $col = element($row, "div", array("class"=>"col-12 text-center"));
  element($col, "img", array("src"=>$imgLogoNoStamp, "style"=>"width: 50%; border-radius: 5%"));

  $row = element($panel, "div", array("class"=>"row"));
  $col = element($row, "div", array("class"=>"col-md-12", "style"=>"padding-bottom: 50px;"));

  // Description {{{2
  $row = element($panel, "div", array("class"=>"row"));
  $col = element($row, "div", array("class"=>"col-md-4", "style"=>"padding-top: 15px;"));
  element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "De Minico’s offers delicious pizza and paninis. Delight in authentic Italian flavours and try the Margherita or Artista pizza. Add a little kick to your day and spice things up with the Volta panini.");
  element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "Order De Minico’s");

  // Phone {{{2
  $stylePhone = "";
  $classPhone = "text-center";
  phone($col, "p", $phoneNumber, $classPhone, $stylePhone);
  // phone($col, "h2", $phoneNumber, $styleFontP);

  // Social Media {{{2
  element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "Learn more about us by following us on social media.");
  socialLinks($col);

  // Navigation {{{2
  $col = element($row, "div", array("class"=>"col-md-4", "style"=>"padding-top:30px; text-align:center;"));
  navLink2($col, 'h5', 'menu.php', 'In Store Menu');
  navLink2($col, 'h5', 'freezer.php', 'Heat and Eat');
  navLink2($col, 'h5', 'catering.php', 'Catering');
  navLink2($col, 'h5', 'photogallery.php', 'Photo Gallery');

  // Hours {{{2
  $col = element($row, "div", array("class"=>"col-md-4"));
  $row = element($col, "div", array("class"=>"row"));

  $col = element($row, "div", array("class"=>"col-12"));
  element($col, "h2", array("class"=>"text-center", "style"=>"padding-top:15px;"), "Hours");

  $col = element($row, "div", array("class"=>"col-2"));
  $col = element($row, "div", array("class"=>"col-10"));
  $table = element($col, "table", array("class"=>"text-center"));
  $tbody = element($table, "tbody");
  hourRow($tbody, "Monday", "11 A.M.", "2 P.M.", $styleFontP);
  hourRow($tbody, "Tuesday", "11 A.M.", "6 P.M.", $styleFontP);
  hourRow($tbody, "Wednsday", "11 A.M.", "6 P.M.", $styleFontP);
  hourRow($tbody, "Thursday", "11 A.M.", "6 P.M.", $styleFontP);
  hourRow($tbody, "Friday", "11 A.M.", "8 P.M.", $styleFontP);
  hourRow($tbody, "Saturday", "Closed", "", $styleFontP);
  hourRow($tbody, "Sunday", "Closed", "", $styleFontP);
}

// Footer {{{1
require_once "assets/php/footer.php";
?>
