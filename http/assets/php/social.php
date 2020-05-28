<?php
// Variables {{{1
$hrefBrand = "/";
$imgDoordash = $img . "/doordash.png";
$hrefDoordash = "https://www.doordash.com/store/de-minico-s-calgary-99506/";
$imgDoordash = $img . "/skipdish.png";
$hrefSkipDish = "https://www.skipthedishes.com/de-minicos";

$email = 'office@deminicos.ca';
$emailcc = 'office@deminicos.ca';
$emailSubject = 'I would like to place an order!';
$emailStr = 'Click here to order';
$phoneNumber = "403-454-6789";
$mapsLink = "https://www.google.com/maps/place/De+Minico's/@51.0946308,-114.0457049,14.25z/data=!4m12!1m6!3m5!1s0x53716500c531255d:0xf2d24169e7a44e1b!2sDe+Minico's!8m2!3d51.093125!4d-114.032371!3m4!1s0x53716500c531255d:0xf2d24169e7a44e1b!8m2!3d51.093125!4d-114.032371?hl=en-US";
$mapsAddress = "1319 45 Ave NE #5, Calgary, Alberta";
$mapsIfram = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.831072976366!2d-114.032371!3d51.093125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716500c531255d%3A0xf2d24169e7a44e1b!2sDe+Minico&#39;s!5e0!3m2!1sen!2sca!4v1509148157628";

// Functions {{{1
function serviceLinks($element) { // {{{2
  $style .= 'max-width:50px;';

  $hrefBestCalgary = "https://www.thebestcalgary.com/best-catering-calgary/#6_De_Minicos";
  $iconBestCalgary = '/assets/img/thebestcalgary.png';
  
  $hrefTripAdvisor = "https://www.tripadvisor.ca/Restaurant_Review-g154913-d10744753-Reviews-De_Minico_s-Calgary_Alberta.html";
  $iconTripAdvisor = '/assets/img/tripadvisor.png';
  
  $row = element($element, "div", array("class"=>"row text-center"));
  $div = element($row, "div", array("id"=>"socialCol", "class"=>"col-12 text-center", 'style'=>'padding-top:0;'));

  // The Best Calgary
  $a = element ($div, "a", array("class"=>"socialIcon", "style"=>"color:#3b5998", "href"=>$hrefBestCalgary));
  $span = element($a, "span", array("class"=>"socialIcon"));
  element($span, "img", array("src"=>$iconBestCalgary, 'style'=>$style));
  
  // The Best Calgary
  $a = element ($div, "a", array("class"=>"socialIcon", "style"=>"color:#3b5998", "href"=>$hrefTripAdvisor));
  $span = element($a, "span", array("class"=>"socialIcon"));
  element($span, "img", array("src"=>$iconTripAdvisor, 'style'=>$style));
}

function socialLinks($element) { // {{{2
  $style .= 'max-width:50px;';
  $style .= 'width:10%;';

  $hrefFacebook = "https://www.facebook.com/DeMinicos/";
  // $iconFacebook = 'fab fa-facebook';
  $iconFacebook = '/assets/img/social/icon-facebook.png';
  
  $hrefInstagram = "https://www.instagram.com/deminicos/";
  // $iconInstagram = 'fab fa-instagram';
  $iconInstagram = '/assets/img/social/icon-instagram.png';
  
  $hrefTwitter = "https://twitter.com/DeMinicos";
  // $iconTwitter = 'fab fa-twitter';
  $iconTwitter = '/assets/img/social/icon-twitter.png';

  $row = element($element, "div", array("class"=>"row text-center"));
  $div = element($row, "div", array("id"=>"socialCol", "class"=>"col-12 text-center"));

  // Facebook
  $a = element ($div, "a", array("class"=>"socialIcon", "style"=>"color:#3b5998", "href"=>$hrefFacebook));
  $span = element($a, "span", array("class"=>"socialIcon"));
  element($span, "img", array("src"=>$iconFacebook, 'style'=>$style));

  // Instagram
  $a = element ($div, "a", array("class"=>"socialIcon", "href"=>$hrefInstagram));
  $span = element($a, "span", array());
  element($span, "img", array("src"=>$iconInstagram, 'style'=>$style));

  // Twitter
  $a = element ($div, "a", array("class"=>"socialIcon", "style"=>"color:#00acee", "href"=>$hrefTwitter));
  $span = element($a, "span", array("class"=>"socialIcon"));
  element($span, "img", array("src"=>$iconTwitter, 'style'=>$style));
}

function phone($element, $type, $phoneNumber, $class, $style) { // {{{2
  $classPhone = 'fa fas fa-mobile';

  $div = element($element, "div", array("class"=>"text-center"));
  $type = element($div, $type, array("class"=>$class, "style"=>$style));
  $a = element($type, 'a', array("href"=>"tel:".$phoneNumber, 'style'=>$style));
  element($a, 'span', array("class"=>$classPhone));
  element($a, 'span', array("class"=>$class), ' ' . $phoneNumber);
  return $div;
}

function email($element, $type, $email, $emailcc, $emailSubject, $icon, $str, $class, $style) { // {{{2
  $classEmail = 'fa fas fa-envelope-open';

  $div = element($element, "div", array("class"=>"text-center"));
  $type = element($div, $type, array("class"=>$class, "style"=>$style));
  $a = element($type, "a", array("href"=>"mailto:".$email . "?subject=" . $emailSubject, 'style'=>$style));
  // I attempted to add the cc of office@deminicos.ca.. Instead this didn't seem to work properly. I am missing something.
  //$a = element($type, "a", array("href"=>"'mailto:{$email}?cc={$emailcc}&&subject={$emailSubject}'", 'style'=>$style));
  if ($icon)
    element($a, 'span', array("class"=>$classEmail));
  element($a, 'span', array("class"=>$class), ' ' . $str);
  return $div;
}

function linkfile($element, $type, $infilepath, $infile, $intext, $class, $style) { // {{{2
  $div = element($element, "div", array("class"=>"text-center"));
  $elem = element($div, $type, array(), " ");
  $a = element($elem, "a", array("href"=>"".$infilepath.$infile), ' ' .$intext);
  return $div;
}

function address($element, $type, $mapsLink, $mapsAddress, $class, $style) { // {{{2
  $classAddress = 'fa fas fa-map-marker';

  $div = element($element, "div", array("class"=>"text-center"));
  $type = element($div, $type, array("class"=>$class, "style"=>$style));
  $a = element($type, 'a', array("href"=>$mapsLink));
  element($a, 'span', array("class"=>$classAddress));
  element($a, 'span', array("class"=>$class), ' ' . $mapsAddress);
  return $div;
}

function googleMaps($element, $src, $id, $class, $style) { // {{{2
  $div = element($element, "div");
  $row = element($div,'div',array('class'=>'row'));
  element($row,'div',array('id'=>'section-' . $id, 'class'=>'col-12', 'style'=>$style));
  $col = element($row,'div',array('class'=>'col-12'));
  return element($col, "iframe", array(
    "id"=>"googleMap",
    "class"=>$class,
    "style"=>$style,
    "frameborder"=>"0",
    "src"=>$src
  ));
}

function hourRow($tbody, $day, $open, $closed, $styleDays, $styleHours) { // {{{2
  $tr = element($tbody, "tr");
  $td = element($tr, "td", array('style'=>$style));
  $p = element($td, "p", array("style"=>"margin-bottom:5px;" . $styleDays));
  $td = element($tr, "td");
  element($p, "b", array('style'=>$styleDays), $day);
  $td = element($tr, "td", array('style'=>''));
  element($td, "p", array('style'=>'padding-right:10px;'),'');
  $td = element($tr, "td");
  element($td, "p", array("style"=>"text-align:right;margin-bottom:5px;" . $styleHours), $open);
  if ($open != "Closed") {
    $td = element($tr, "td");
    element($td, "p", array("style"=>"text-align:center;margin-bottom:5px;".$styleHours), "-");
    $td = element($tr, "td");
    element($td, "p", array("style"=>"width:100%;text-align:left;margin-bottom:5px;" . $styleHours), $closed);
  }
}
?>
