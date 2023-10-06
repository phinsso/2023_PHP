<?php
    $n = $_POST["number"];

    $sum = 0;

    for($i = 1; $i <= $n; $i++) {
        if($i % 5 == 0)
            $sum += $i;
    }

    echo $sum;
?>