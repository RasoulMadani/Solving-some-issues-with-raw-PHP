<?php
// in the name of allah
//راه حل اول
$myNumber = 55;
$myColor = 'red';
$myText = 'I Love Ghasem soleimani';
echo ("<p style='font-size:" . $myNumber . ";color:" . $myColor . "'>" . $myText . "</p>");
// راه حل دوم 
?>
<p style="color:<?php echo $myColor; ?>;font-size:<?php echo $myNumber; ?>"><?php echo $myText; ?></p>