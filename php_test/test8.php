<?php

$fp = fopen("data3.txt", "r");
$visit = intval(fgets($fp)) + 1;
echo "당신은 " . $visit . "번째 방문하셨습니다.";

$fp = fopen("data3.txt", "w");
fwrite($fp, $visit);
fclose($fp);


?>