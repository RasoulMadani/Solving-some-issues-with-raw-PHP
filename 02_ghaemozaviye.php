<?php
$a = 5;
$b = 4;
$c = 5;
$aa = pow($a, 2);
$bb = pow($b, 2);
$cc = pow($c, 2);
// if( 25 == 16 + 25 || 16 == 25 + 25 || 25 == 16 + 25 ){
//     echo 'yes';
// }else{
//     echo 'نمی شود نداریم بزار برو ';
// }
if ($aa == $bb + $cc || $bb == $aa + $cc || $cc == $bb + $cc) {
    echo 'yes';
} else {
    echo 'نمی شود';
}
