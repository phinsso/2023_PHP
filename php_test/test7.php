<?php

$fp = fopen("data2.txt", "r"); // data2.txt는 이미 만들어져있기 때문에 filename 따로 만들지 않았음!
$contents = fread($fp, filesize("data2.txt"));

echo $contents;
fclose($fp);

?>