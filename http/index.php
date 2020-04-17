<?php

// Name: index.php
// Authors: Travis Gall
// Description: Main index

require_once "assets/php/header.php";

$imgLogo = "assets/img/logo.png";
//$imgLogoNoStamp = $img . "/logonostamp.jpg";
$imgLogoNoStamp = $img . "/logostampcolor_reverse.jpg";

// About Us {{{1
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
element($col, "img", array("src"=>$imgLogoNoStamp, "style"=>"width: 50%; border-radius: 5%"));
//element($col, "h1", array(), "De Minico's");
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-md-4", "style"=>"padding-bottom: 10px;"));

br($col, 2);

// Description {{{2
element($col, "p", array("class"=>"text-center"), "De Minico’s offers delicious pizza and paninis. Delight in authentic Italian flavours and try the Margherita or Artista pizza. Add a little kick to your day and spice things up with the Volta panini.");
element($col, "br");
element($col, "p", array("class"=>"text-center"), "Order De Minico’s");

// Phone {{{2
phone($col, "text");

// Social Media {{{2
element($col, "p", array("class"=>"text-center"), "Learn more about us by following us on social media.");
socialLinks($col);

$div = element($col, "div", array("class"=>"text-center"));
$a = element ($div, "a", array("class"=>"socialIcon", "href"=>$hrefFacebook));
element($a, "i", array("class"=>$iconFacebook));
$a = element ($div, "a", array("class"=>"socialIcon", "href"=>$hrefInstagram));
element($a, "i", array("class"=>$iconInstagram));
$a = element ($div, "a", array("class"=>"socialIcon", "href"=>$hrefTwitter));
element($a, "i", array("class"=>$iconTwitter));

$col = element($row, "div", array("class"=>"col-md-4"));
//element($col, "img", array("src"=>$imgStore, "style"=>"width: 100%;"));
//element($col, "img", array("src"=>$imgLogoNoStamp, "style"=>"width: 100%;"));

// Hours {{{1
$col = element($row, "div", array("class"=>"col-md-4"));
$row = element($col, "div", array("class"=>"row"));

$col = element($row, "div", array("class"=>"col-12"));
element($col, "h2", array("class"=>"text-center", "style"=>"padding-top:15px;"), "Hours");

$col = element($row, "div", array("class"=>"col-2"));
$col = element($row, "div", array("class"=>"col-10"));
$table = element($col, "table", array("class"=>"text-center"));
$tbody = element($table, "tbody");
hourRow($tbody, "Monday", "11 A.M.", "2 P.M.");
hourRow($tbody, "Tuesday", "11 A.M.", "6 P.M.");
hourRow($tbody, "Wednsday", "11 A.M.", "6 P.M.");
hourRow($tbody, "Thursday", "11 A.M.", "6 P.M.");
hourRow($tbody, "Friday", "11 A.M.", "8 P.M.");
hourRow($tbody, "Saturday", "Closed", "");
hourRow($tbody, "Sunday", "Closed", "");

// Footer {{{1
require_once "assets/php/footer.php";
echo $dom->generateHTML();
?>
