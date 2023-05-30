<style>
    h1 {
        color: red;
    }
</style>

<?php
echo "<h1>strlen()</h1>";
$str = "php is a popular scripting language";
echo strlen($str); //strlen: 공백 포함 문자열의 길이를 반환
?>

<hr>

<?php
echo "<h1>strcmp()</h1>"; //strcmp: 문자열 비교해서 일치하면 0, 불일치하면 1
$var1 = "hello";
$var2 = "Hello";
$result = strcmp($var1, $var2);
echo "result: ".$result; // 1 나옴 (대소문자 다르기 때문에)
?>

<hr>

<?php
echo "<h1>strpos()</h1>"; // (문자열1, 문자2) 문자열 1에서 문자 2가 있는 인덱스를 반환
$str = "abcdef";
$find = "c";
$pos = strpos($str, $find);
echo "pos: " . $pos; // 2 출력 (인덱스는 0부터)
?>

<hr>

<?php
echo "<h1>strtolower() / strtoupper()</h1>"; // 소문자, 대문자 변환
$str = "Mary had a Little lamb and she loved IT so MUCH";
echo strtolower($str . "<br/>");
echo strtoupper($str);
?>

<hr>

<?php
echo "<h1>substr()</h1>";
//문자열 추출 (문자열, 시작 인덱스, 추출할 인덱스 개수) / 추출할 인덱스 개수가 빠질 경우, 시작 인덱스부터 끝까지
$str = "hellophpwelcome";
$result = substr($str,5,5);
echo $result . "<br/>";
$result2 = substr($str,3);
echo $result2;
?>

<?php
echo "<h1>implode()</h1>";
// 배열의 값을 구분자를 기준으로 한 문자열로 변환 (구분 문자, 출력할 배열)
$arr = array("pizza1", "pizza2", "pizza3", "pizza4", "pizza5");

$str = implode(",", $arr);
echo "implode:" . $str;
?>

<hr>

<?php
echo "<h1>explode()</h1>";
// 문자열을 구분자를 기준으로 한 배열로 변환
$str = "apple/mango/strawberry/melon";
$arr = explode("/", $str);

foreach($arr as $item) {
    echo $item."<br/>";
 }
?>

<hr>

<?php
echo "<h1>str_replace()</h1>";
// (원래 문자열, 변경 문자열, 변경할 배열)
$txt = "You should eat fruits, shoud not buy";
$result = str_replace("should", "cloud", $txt);
echo "변경 전 문자열: " . $txt;
echo "<br/>변경 후 문자열: " . $result;
?>