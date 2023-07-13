<?php
$a = array("pineApple","Grapes","Apple","banana");
echo "<pre>";
print_r($a);
echo "<br><br> Using count()...";
echo "<br><br>No of element in array:".count($a);
echo "<br><br>Using sort()..<br>";
sort($a);
echo "<pre>";
print_r($a);
echo "<br><br> Using array reverse()...<br>";
print_r(array_reverse($a));
echo "<br><br>Using list() ..";
list($f1,$f2,$f3,$f4)=$a;
echo "<br>After sorting the fourth item in list is:".$f4;
?>