<?php
// 사용자가 입력한 id와 pass 가져오기: $_GET / $_POST

$real_id = "test";
$real_pass = "testpass";

$id = $_POST["user_id"]; // $id: 사용자가 입력한 id값이 들어있는 변수
$pass = $_POST["user_pass"]; // $pass: 사용자가 입력한 pass값이 들어있는 변수

if($id == $real_id) {
    if($pass === $real_pass) {
        echo "id ".$id."<br/>";
        echo "pass ".$pass."<br/>";
        echo "로그인 되었습니다";
    }
} else
    echo "아이디 또는 비밀번호가 다릅니다.";

?>