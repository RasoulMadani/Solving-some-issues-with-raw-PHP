<?php
// in the name of allah
$n = 5;

$space = $n;
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat("&nbsp;", $space - $i) . str_repeat("*", $i) . str_repeat("&nbsp;", 2 * ($space - $i)) . str_repeat("*", $i) . "<br>";
}
for ($j = $n - 1; $j > 0; $j--) {
    echo str_repeat("&nbsp;", $space - $j) . str_repeat("*", $j) . str_repeat("&nbsp;", 2 * ($space - $j)) . str_repeat("*", $j) . "<br>";
}
