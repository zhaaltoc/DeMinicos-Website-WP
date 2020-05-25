<?
// colors 
$colorwhite = "#ffffff";
$colorblack = "#000000";
$colorwhite = "#ffffff";
$coloryellow = "#cccc33";

// Body {{{1
$styleBody = 'width:100%;';
$classBody = 'fa';

// Panel {{{1
$stylePaddingBottom = "padding-bottom:25px;";
$stylePaddingTop = "padding-top:25px;";
$styleFontWeight = "font-weight:bold;";
$styleFontP = $styleFontWeight;
$styleFontP .= "font-size:20px;";

// Address
// $styleAddress = $stylePaddingTop;
$styleAddress = $stylePaddingBottom;
$classAddress = "text-center";

// Background
$background = $img . "/chalkboard.jpg";
$styleBackground = "position:fixed;";
$styleBackground .= "left:-100px;";
$styleBackground .= "top:0;";
$styleBackground .= "height:110%;";
$styleBackground .= $styleBody;
$styleBackground .= "width:2500px;";
$styleBackground .= "background-image:url('" . $background . "');";
$styleBackground .= "background-size: cover;";

// Nav
$styleNavTop = "1%";
$styleNav .= 'background-color:'.$colorblack.';';
$styleNav .= 'color: '.$coloryellow.';';
$styleNav .= 'opacity:0.88;';
$styleNav .= "border-radius:10%;";
$styleNav .= 'top: -' . $styleNavTop . ';';
$styleNav .= "transform: translateY(" . $styleNavTop . ");";

$styleNavButton .= 'background-color: transparent;';
$styleNavButton .= 'font-size:1em;';
$styleNavButton .= 'font-weight:bold;';
$styleNavButton .= 'color: '.$coloryellow.';';
$styleNavButton .= "background-image: url(\"data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E\");";

$styleNavLinks .= 'background-color: transparent;';
$styleNavLinks .= 'font-size:1.5em;';
$styleNavLinks .= 'font-weight:bold;';
$styleNavLinks .= 'color: '.$coloryellow.';';
$classNavLinks .= 'navbar-nav ';
$classNavLinks .= 'ml-auto ';

// Phone
$stylePhone = $stylePaddingTop;
$stylePhone .= $stylePaddingBottom;
$classPhone = "text-center";

// Maps
// $styleMaps = $stylePaddingTop;
$styleMaps = $stylePaddingBottom;
$styleMaps .= 'width:75%;';
$classMaps = "";

// Menu
$styleNavMenu = "position:fixed;";
$styleNavMenu .= "top:100px;";
$styleNavMenu .= "left:0;";
$styleNavMenu .= "width:50px;";
$styleNavMenu .= "height:200px;";
$classNavMenu = "";

// Order Form
$styleOrderForm = "width:95%;";
$styleOrderForm .= "border-radius:2%;";
$styleOrderForm .= $stylePaddingBottom;

// Panel {{{2
$stylePanel = $styleBody;
$classPanel = "container-fluid ";

// Full Call {{{1
$styleBold .= 'font-style:bold;';

$stylePFontSize .= 'font-size:1.3em;';
$stylePAFontSize .= 'font-size:1.4em;';

// General {{{1
// Font {{{2
$classFont .= '';
$styleFont .= '';
$styleFontP .= $styleFont;
$styleFontP .= $stylePFontSize;

// Custom {{{1
// Phone {{{2
$classPhone .= '';
$stylePhone .= '';
$stylePhoneP .= $stylePhone;
// $stylePhoneP .= $styleBold;
$stylePhoneP .= $stylePAFontSize;

// Hours {{{2
$styleHourRowMargin = 'margin-bottom:10px;';
$styleDays .= $styleHourRowMargin;
$styleDays .= $stylePAFontSize;
$styleDays .= $styleBold;
$styleHours .= $styleHourRowMargin;
$styleHours .= $stylePFontSize;
?>
