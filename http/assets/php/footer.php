<?php

// Name: php/footer.php
// Description: Page standard footer

// Footer {{{1
// Contact and Location {{{2

$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12"));

phone($col, "h2", $phoneNumber, $classPhone, $stylePhone);
address($col, "h3", $mapsLink, $mapsAddress, $classAddress, $styleAddress);

// Google Maps {{{2
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));

googleMaps($col, $mapsIfram, 'section-location', $classMaps,  $styleMaps);

// Social Media {{{2
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
socialLinks($col);

// Build {{{1
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
echo $dom->generateHTML();
?>

