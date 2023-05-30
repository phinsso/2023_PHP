<?php
    
    $n = $_POST["number"];

    for($i = 1; $i <= 100; $i++) {
        if($i % $n == 0)
            echo $i."<br/>";
    }
?>