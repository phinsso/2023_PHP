<?php

    $integer = $_POST["integer"];
    $arr = explode(' ', $integer);

    $odd = 0;
    $even = 0;

    for($i = 0; $i < sizeof($arr); $i++) {
        if($arr[$i] % 2 != 0)
            $odd += $arr[$i];
        else
            $even += $arr[$i];
    }

    echo "홀수의 합: ".$odd."<br/>";
    echo "짝수의 합: ".$even;
?>