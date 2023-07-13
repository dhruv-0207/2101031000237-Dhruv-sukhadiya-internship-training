<?php
    $x="123.abc";
    echo "a=".$x;
    echo "<br>Type of a in ".gettype($x);
    settype($x,"int");
    echo "<br>After conversion of a is ".gettype($x);
?>