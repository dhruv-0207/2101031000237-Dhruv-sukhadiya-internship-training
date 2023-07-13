<?php
$num = 7; // the number you want to check
$num1 = 10;

if($num % 2 == 0) {
    echo $num . " is even.";
} else {
    echo $num . " is odd.";
}

echo "<br/>";

if ($num == $num1) {
    echo "The values are equal.";
} elseif ($num > $num1) {
    echo "num 1 is greater than num 2.";
} else {
    echo "num 2 is greater than num 1.";
}
?>
