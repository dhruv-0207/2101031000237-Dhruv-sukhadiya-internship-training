<?php
$a = array(1,3,5,7,9,11);
echo "<pre>";
print_r($a);
$sum = 0;
foreach($a as $value){
    $sum+=$value;
}
echo "sum of the given array is ".$sum;
?>