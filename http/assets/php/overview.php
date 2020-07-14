<?php
// Name: overview.php
// Authors: Travis Gall
// Description: Main index

$imgLogo = $img . "/logo.png";
// $imgLogo = $img . "/DeMinicos_logo_color_reverse_spot-2.png";
$imgLogoNoStamp = $img . "/logonostamp.jpg";
// $imgLogoNoStamp = $img . "/logostampcolor_reverse.jpg";

// Overview {{{1
// Logo {{{2
$row = element($panel, "div", array("class"=>"row", 'style'=>'padding-bottom:50px;'));
$col = element($row, "div", array("class"=>"col-12 text-center"));
$style .= 'height:6.5em;';
$style .= 'width:6.5em;';
$style .= 'max-width:100;';
$hrefDeminicos = "https://test.deminicos.ca";
$a = element ($col, "a", array("class"=>"socialIcon", "style"=>"color:#3b5998", 'href'=>'.'));
element($a, "img", array("src"=>$imgLogo, 'style'=>$style));

// Overview {{{2
// About Us {{{3
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-md-4", "style"=>"padding-top: 15px;"));
//element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "De Minico’s offers delicious pizza and paninis. Delight in authentic Italian flavours and try the Margherita or Artista pizza. Add a little kick to your day and spice things up with the Volta panini.");
//element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "Order De Minico’s");

element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "Come in, welcome to De Minico's where we are about family first and foremost.");
element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "We welcome everyone into our store, to try our delectables, and share a story or two.");
element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "We want you to feel welcomed.  ");
element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "Our mission is to help you bring your family back to the table by providing high quality food all members of your family will enjoy.");
element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), " ");
element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "De Minico's guarantees to deliver our family's values through nutritionally wholesome fresh ingredients with no additives or preservatives - food you can trust.");
element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), " ");
element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "We look forward to having our food at your table.");
element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), " ");
element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "Call now for pickup or delivery.");

// Phone {{{3
phone($col, "p", $phoneNumber, $classPhone, $stylePhoneP);

// Social Media {{{3
element($col, "p", array("class"=>"text-center", "style"=>$styleFontP), "Learn more about us by following us on social media.");
socialLinks($col);

// Navigation {{{3
$col = element($row, "div", array("class"=>"col-md-4", "style"=>"padding-top:30px; text-align:center;"));
if(!$ORDERFORM) {
  $results = pages($conn);
  while($result = $results->fetch_assoc()) {
    $name = $result['name'];
    $navLink = str_replace(' ', '', strtolower($name));// . '.php';
    navLink2($col, 'h3', 'index.php?page='.urlencode($name), $name);
  }
} else {
  navLink2($navLinks, "orderform", "Order Form", "/", $styleNavLinks);
}

// Hours {{{3
$col = element($row, "div", array("class"=>"text-center col-md-4"));
$row = element($col, "div", array("class"=>"row"));

$col = element($row, "div", array("class"=>"col-12"));
element($col, "h2", array("style"=>"padding-top:15px;"), "Hours");

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

// TEST VUE {{{2
// element($col, "div", array("id"=>"app"), "{{ message }}");

// $dev = element($col, "div", array("id"=>"app-2"));
// element($dev, "span", array("v-bind:title"=>"message"), "Mouse Over Me!");

// $dev = element($col, "div", array("id"=>"app-3"));
// element($dev, "span", array("v-if"=>"seen"), "Now you see me!");

?>
