<?php

// Name: index.php
// Authors: Travis Gall
// Description:

require_once "assets/php/header.php";

function hourRow($tbody, $day, $open, $closed) {
    $tr = element($tbody, "tr");
    $td = element($tr, "td");
    $p = element($td, "p", array("style"=>"margin-bottom:5px;"));
    element($p, "b", array(), $day);
    $td = element($tr, "td");
    element($td, "p", array("style"=>"margin-bottom:5px;"), $open);
    if ($open != "Closed") {
        $td = element($tr, "td");
        element($td, "p", array("style"=>"margin-bottom:5px;"), "-");
        $td = element($tr, "td");
        element($td, "p", array("style"=>"margin-bottom:5px;"), $closed);
    }
}

$hrefFacebook = "https://www.facebook.com/DeMinicos/";
$iconFacebook = $img . "/social/iconFacebook.png";
$hrefInstagram = "https://www.instagram.com/deminicos/";
$iconInstagram = $img . "/social/iconInstagram.png";
$hrefTwitter = "https://twitter.com/DeMinicos";
$iconTwitter = $img . "/social/iconTwitter.png";

$imgStore = $img . "/store.jpg";

$imgLogo = "assets/img/logo.png";
//$imgLogoNoStamp = $img . "/logonostamp.jpg";
$imgLogoNoStamp = $img . "/logostampcolor_reverse.jpg";

// All content will be on panel
$panel = element($body, "div", array("class"=>"container-fluid"));
//$panel = element($panel, "div", array("class"=>"jumbotron"));

// Home {{{1
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12"));
//element($col, "img", array("class"=>"logo", "src"=>$imgLogo));

// About Us {{{1
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
element($col, "img", array("src"=>$imgLogoNoStamp, "style"=>"width: 50%; border-radius: 5%"));
//element($col, "h1", array(), "De Minico's");
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-md-4", "style"=>"padding-bottom: 10px;"));
for ($i = 0; $i < 2; $i++) {
    element($col, "br");
}
element($col, "p", array("class"=>"text-center"), "De Minico’s offers delicious pizza and paninis. Delight in authentic Italian flavours and try the Margherita or Artista pizza. Add a little kick to your day and spice things up with the Volta panini.");
element($col, "br");
element($col, "p", array("class"=>"text-center"), "Order De Minico’s");
element($col, "p", array("class"=>"text-center"), "Call 403-454-6789 for pickup or delivery!");

// Social media links
element($col, "p", array("class"=>"text-center"), "Learn more about us by following us on social media.");
$div = element($col, "div", array("class"=>"text-center"));
$a = element ($div, "a", array("class"=>"socialIcon", "href"=>$hrefFacebook));
element($a, "img", array("src"=>$iconFacebook));
$a = element ($div, "a", array("class"=>"socialIcon", "href"=>$hrefInstagram));
element($a, "img", array("src"=>$iconInstagram));
$a = element ($div, "a", array("class"=>"socialIcon", "href"=>$hrefTwitter));
element($a, "img", array("src"=>$iconTwitter));

$col = element($row, "div", array("class"=>"col-md-4"));
//element($col, "img", array("src"=>$imgStore, "style"=>"width: 100%;"));
//element($col, "img", array("src"=>$imgLogoNoStamp, "style"=>"width: 100%;"));

// Hours {{{2
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

// Section: Catering {{{1
// $row = element($panel, "div", array("class"=>"row row-inverse"));
// $col = element($row, "div", array("class"=>"col-12 text-center section-header"));
// element($col, "h1", array(), "Catering");

// Section: Pick-up and Delivery {{{1
// $row = element($panel, "div", array("class"=>"row"));
// $col = element($row, "div", array("class"=>"col-12 text-center section-header"));
// element($col, "h1", array("class"=>"text-center"), "Pick-up and Delivery");

// Section: Physical Address 
//$row = element($panel, "div", array("class"=>"row"));
//$col = element($row, "div", array("class"=>"col-12"));
//element($col, "h2", array("class"=>"text-center"), "Located at 1319 45Ave NE #5, Calgary, Alberta");

// Google {{{1
// Maps {{{2
//$row = element($panel, "div", array("id"=>"section-location", "class"=>"row"));
//$col = element($row, "div", array("class"=>"col-12 text-center"));
//element($col, "iframe", array(
//    "id"=>"googleMap",
//    "style"=>"width: 75%",
//    "frameborder"=>"0",
//    "src"=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.831072976366!2d-114.032371!3d51.093125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716500c531255d%3A0xf2d24169e7a44e1b!2sDe+Minico&#39;s!5e0!3m2!1sen!2sca!4v1509148157628"
//));

// Footer {{{1
//$row = element($panel, "div", array("id"=>"footer", "class"=>"row"));
//$col = element($row, "div", array("id"=>"socialCol", "class"=>"col-12 text-center"));
//$a = element ($col, "a", array("class"=>"socialIcon", "href"=>$hrefFacebook));
//element($a, "img", array("src"=>$iconFacebook));
//$a = element ($col, "a", array("class"=>"socialIcon", "href"=>$hrefInstagram));
//element($a, "img", array("src"=>$iconInstagram));
//$a = element ($col, "a", array("class"=>"socialIcon", "href"=>$hrefTwitter));
//element($a, "img", array("src"=>$iconTwitter));

require_once "assets/php/footer.php";

echo $dom->generateHTML();

?>
