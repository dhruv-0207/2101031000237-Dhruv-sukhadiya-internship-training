<?php
    $array1 = array("key1"=>50,
                    "key2"=>100,
                    "key3"=>150);
    $array2 = array(12,34,55,67,8);
    $array_bracets=["value1","value2","value3"];

    // multidimensional array
    $array3 = array("first"=>array("first_first"=>20),
                "second"=>array(array("second_first"=>20,
                "second_second"=>array("second_second_first"=>"sub sub array")
    )));
    print_r($array1);
    print_r($array2);
    print_r($array_bracets);
    print_r($array3);


    //sorting
    $sort=sort($array1);
    $asort = asort($array2);
    //rsort($array1);
    //ksort($array2);

    print_r($sort);
    print_r($asort);

    // print_r($array1);
    // print_r($array2);
?>