<?php

// 저장
$filename = "data.txt";

// <파일 쓰기>

// 오픈
/* $fp = fopen($filename, "a"); // $fp가 data.txt를 가리키고 있음 (포인터, 참조변수랑 비슷한 개념)
// w: write -> 기존 내용이 사라지고 새로운 문자로 치환이 됨
// a: append - > 기존 내용에 새로 내용이 추가됨

// 쓰기
$str = "Mary had a dog";
$str1 = "Tom had a cat";
fwrite($fp, $str1);

// 닫기
fclose($fp);
echo "저장되었습니다"; */

// ------------------------------------------------------------------------------------------

// <파일 읽기>

$fp = fopen($filename, "r");
// r: read -> 파일에 있는 내용을 읽어옴

while(!feof($fp)) { // $fp 포인터가 가리키고 있는 게 끝이 아닐 동안 실행 (file end of file)
    //echo fgets($fp);
    echo fgetc($fp);
} 

?>