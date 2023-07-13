<?php
echo "The original array is :<br>";
$a = array("name1"=>"meet","name3"=>"utkarsh","name2"=>"divy","name5"=>"spandan","name4"=>"dhyey","name6"=>"dhairya");
echo"<pre>";
print_r($a);
echo "After sorting Arary..<br>";
ksort($a);
echo "<pre>";
print_r($a);
?>