<?php

// Name: php/footer.php
// Description: Page standard footer

// Footer {{{1
// Address {{{2
$row = element($panel, "div", array("class"=>"row"));
$col = element($row, "div", array("class"=>"col-12"));

phone($col, "h2");
element($col, "div");
address($col, "h3");

// Google Maps {{{2
$row = element($panel, "div", array("id"=>"section-location", "class"=>"row"));
$col = element($row, "div", array("class"=>"col-12 text-center"));
element($col, "iframe", array(
  "id"=>"googleMap",
  "style"=>"width: 75%",
  "frameborder"=>"0",
  "src"=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.831072976366!2d-114.032371!3d51.093125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716500c531255d%3A0xf2d24169e7a44e1b!2sDe+Minico&#39;s!5e0!3m2!1sen!2sca!4v1509148157628"
));

// Social Media {{{2
socialLinks($panel);
?>
