<?php
$x = rand(0, 100);
echo 'Число ', $x;
$a = 1;
$b = 1;
$c;
do {
    if ($a > $x) {
        echo ' не входит в числовой ряд';
        break;
    } else if ($a == $x) {
        echo ' входит в числовой ряд';
        break;
    } else {
        $c = $a;
        $a += $b;
        $b = $c;
    }
}
while (true);
?>