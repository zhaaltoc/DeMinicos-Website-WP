<?php
// Social {{{1
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
  // $div = element($row, "div", array("id"=>"socialCol", "class"=>"col-4 text-center"));
  $a = element ($div, "a", array("class"=>"socialIcon", "href"=>$hrefInstagram));
  // $span = element($a, "span", array("class"=>"instagram"));
  $span = element($a, "span", array());
  // element($span, "span", array("class"=>$iconInstagram));
  element($span, "img", array("src"=>$iconInstagram, 'style'=>$style));

  // Twitter
  // $div = element($row, "div", array("id"=>"socialCol", "class"=>"col-4 text-center"));
  $a = element ($div, "a", array("class"=>"socialIcon", "style"=>"color:#00acee", "href"=>$hrefTwitter));
  $span = element($a, "span", array("class"=>"socialIcon"));
  // element($span, "span", array("class"=>$iconTwitter));
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

  // $div = element($element, "div", array("class"=>"text-center"));
  // $type = element($div, $type, array("class"=>$class, "style"=>$style));
  // $a = element($type, "a", array("href"=>''.$infilepath.$infile, "style"=>$style));
  // element($a, 'span', array("class"=>$class));
  // element($a, 'span', array("class"=>$class), $intext);

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
  element($row,'div',array('id'=>$id, 'class'=>'col-12', 'style'=>$style));
  $col = element($row,'div',array('class'=>'col-12'));
  return element($col, "iframe", array(
    "id"=>"googleMap",
    "class"=>$class,
    "style"=>$style,
    "frameborder"=>"0",
    "src"=>$src
  ));
}

function hourRow($tbody, $day, $open, $closed, $style) { // {{{2
  $tr = element($tbody, "tr");
  $td = element($tr, "td");
  $p = element($td, "p", array("style"=>"margin-bottom:5px;" . $style));
  element($p, "b", array(), $day);
  $td = element($tr, "td");
  element($td, "p", array("style"=>"margin-bottom:5px;" . $style), $open);
  if ($open != "Closed") {
    $td = element($tr, "td");
    element($td, "p", array("style"=>"margin-bottom:5px;" . $style), "-");
    $td = element($tr, "td");
    element($td, "p", array("style"=>"margin-bottom:5px;" . $style), $closed);
  }
}
?>
