<?php

// 1. 1~10 까지의 합 구하기

$sum = 0;

for($i = 0; $i < 10; $i++) {
    $sum += $i;
}

echo $sum;
echo "<br/><br/>";

// 2. 1~100 사이의 짝수의 합 구하기

$sum1 = 0;

for($i = 1; $i <= 100; $i++) {
    if($i % 2 == 0)
        $sum1 += $i;
}

echo $sum1;
echo "<br/><br/>";


// 3. $num = 5일 때 짝수인지 홀수인지 판별하기
$num = 5;

if($num % 2 == 0)
    echo "짝수";
else
    echo "홀수";

echo "<br/><br/>";

// 4. 1~100 사이의 3의 배수 출력

for($i = 1; $i <= 100; $i++) {
    if($i % 3 == 0) {
        echo $i;
        echo " ";
    }
}

echo "<br/><br/>";

// 5. 2단~5단까지 구구단 출력

for($i = 2; $i <= 5; $i++) {
    for($j = 1; $j <= 9; $j++) {
        echo $i . "*" . $j . "=" . $i * $j . "<br/>";
    }
    echo "<br/>";
}

// 6. 3, 4를 가지고 삼각형의 넓이 구하기

$sum = 0;
$sum = (3*4) / 2;
echo $sum;

?>