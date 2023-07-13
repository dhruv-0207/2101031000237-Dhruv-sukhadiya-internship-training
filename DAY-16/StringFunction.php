<?php
    $str = "Apple's world";
    $result = addslashes($str);
    echo $str."<br/>";
    echo $result;
    echo '<br/>'.'<br/>'.'<br/>';

    $str1 = "meet,utkarsh,spandan";
    $result1 = explode(',',$str1);
    echo '<pre/>';
    print_r($result1);
    echo '<br/>'.'<br/>'.'<br/>';

    $implode = implode(' ',$result1);
    echo $implode;
    echo '<br/>'.'<br/>'.'<br/>';

    echo strpos("hello... hi good morning","hi");//case sensitive
    echo '<br/>'.'<br/>'.'<br/>';

    echo strlen("hello...");
    echo '<br/>'.'<br/>'.'<br/>';

    echo stripos("hello... Hi good morning","hi");//case insensitive
    echo '<br/>'.'<br/>'.'<br/>';

    echo strrpos("hello... hi good morning","hi");
    echo '<br/>'.'<br/>'.'<br/>';

    $htmlentity = "<h1>hello</h1>";
    htmlentities($htmlentity);
    echo $htmlentity;
    // echo '<br/>'.'<br/>'.'<br/>';

    html_entity_decode($htmlentity);
    echo $htmlentity;
    echo '<br/>'.'<br/>'.'<br/>';

    $text = "This is simple text";
    echo lcfirst($text);
    echo '<br/>'.'<br/>'.'<br/>';

    $text1 = "this is simple text";
    echo ucfirst($text1);
    echo '<br/>'.'<br/>'.'<br/>';

    $psswrd = "Abc@123";
    echo md5($psswrd);
    echo '<br/>'.'<br/>'.'<br/>';

    $psswrd1 = "Abc1673";
    echo sha1($psswrd1);
    echo '<br/>'.'<br/>'.'<br/>';

    $text = "      Abc@123#";
    echo ltrim($text);
    echo '<br/>'.'<br/>'.'<br/>';

    $text = "Abc@123#&nbsp; &nbsp;";
    echo rtrim($text);
    echo '<br/>'.'<br/>'.'<br/>';

    $text = "     Abc@123#&nbsp; &nbsp;";
    echo trim($text);
    echo '<br/>'.'<br/>'.'<br/>';

    $rtext = "hellooo";
    $text2 = "Good Morning";
    echo str_replace("Good",$rtext,$text2);
    echo '<br/>'.'<br/>'.'<br/>';

    $amount = 10000000;
    $nformat = number_format($amount,3);
    echo $nformat;
?>