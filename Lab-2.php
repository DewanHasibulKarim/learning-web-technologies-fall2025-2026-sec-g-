1.
<?php
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area: $area<br>";
echo "Perimeter: $perimeter";
?>
<br>
2.
<?php
$amount = 1000;
$vat = $amount * 0.15;

echo "VAT: $vat";
?>
<br>
3.
<?php
$num = 7;

if ($num % 2 == 0) {
    echo "Even Number";
} else {
    echo "Odd Number";
}
?>
<br>
4.
<?php
$a = 10;
$b = 25;
$c = 15;

if ($a > $b && $a > $c) {
    echo "$a is largest";
} elseif ($b > $a && $b > $c) {
    echo "$b is largest";
} else {
    echo "$c is largest";
}
?>
<br>
5.
<?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>
<br>
6.
<?php
$numbers = [5, 10, 15, 20, 25];
$search = 15;
$found = false;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search found in array";
} else {
    echo "$search NOT found";
}
?>
<br>

7.
shape-1<br>
<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>
<br>
shape-2<br>
<?php
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
?>
<br>
shape-3<br>
<?php
$char = "A";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
        $char++;
    }
    echo "<br>";
}
?>
<br>
8.
Define 2D Array
<?php
$arr = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];
?>
<br>
Print Shape 1:-<br>
<?php
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3 - $i; $j++) {
        echo $arr[$i][$j] . " ";
    }
    echo "<br>";
}
?>
<br>
Print Shape 2:- <br>
<?php
for ($i = 0; $i < 3; $i++) {
    for ($j = 3 - $i; $j < 4; $j++) {
        echo $arr[$i][$j] . " ";
    }
    echo "<br>";
}
?>

