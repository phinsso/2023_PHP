<?php

$idx = $_GET['idx'];
echo "id: " . $idx;

// db 접속
$conn = mysqli_connect('localhost', 'test', '1111', 'test', '3307');

// id가 $idx인 거 가져오기
$sql = "select * from myuser where id=$idx";
// 쿼리 함수 날려서 $result에 대입
$result = mysqli_query($conn, $sql);
// $result에 있는 값들을 한 줄씩 가지고 와서 $re에 대입
$re = mysqli_fetch_row($result);
// $re 출력
?>

<form method = "post" action= "update.php">
    순번<input type="text" name="idx" value="<?php echo $re[0] ?>" disabled></br/>
    아이디<input type="text" name="userid" value="<?php echo $re[1] ?>"><br/>
    이름<input type="text" name="username" value="<?php echo $re[2] ?>"><br/>

    <!-- update.php로 idx값을 넘기기 -->
    <input type="hidden" name="idx" value="<?php echo $re[0] ?>"><br/>
    <button type="submit">수정 완료</button>
  </form>