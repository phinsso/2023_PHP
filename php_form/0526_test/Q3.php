<?php

    $n = $_POST["number"];
    $sum = 0;
    $cnt = 0;

    for($i = 100; $i <= 999; $i++) {
        if($i % $n == 0) {
            $sum += $i;
            $cnt++;
        }
    }

    echo "합계: ".$sum."   개수: ".$cnt;

?>