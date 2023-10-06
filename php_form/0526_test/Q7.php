<?php
    $n = $_POST["number"];
    $arr = $_POST["integer"];

    $tempArr = explode(' ', $arr);
    $avg = 0;

    for($i = 0; $i < $n; $i++) {
        $avg += $tempArr[$i];
    }

    $avg /= $n;

    echo $avg;

?>