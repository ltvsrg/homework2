<?php
$x = rand(0,100);
echo 'Число ',$x;
$a=1;
$b=1;
$c;
for($i=0; $i<=$a;$i++) {
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
?>
