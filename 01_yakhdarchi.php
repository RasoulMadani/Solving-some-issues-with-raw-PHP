<?php
// in the name of allah
$dama = 110;
if ($dama < 0 && $dama > -273) {
    echo 'Ice';
} elseif ($dama >= 0 && $dama <= 100) {
    echo 'water';
} else {
    echo 'Steam';
}
