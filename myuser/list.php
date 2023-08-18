<?php
// 1. db 접속
$conn = mysqli_connect('localhost', 'test', '1111', 'test', '3307');

// 2. myuser 테이블의 모든 데이터 조회 쿼리 날리기
$sql = "select * from myuser order by id desc";
$result = mysqli_query($conn, $sql);

// mysqli_num_rows() : 데이터 갯수 구하는 함수 (데이터가 몇 줄인지)
$count = mysqli_num_rows($result);

for($i = 0; $i < $count; $i++) {
    $re = mysqli_fetch_row($result);
    echo $re[0]." ".$re[1]." ".$re[2]."<br/>";
}


?>

ehco "<table border><tr><td>#</td><td>아이디</td><td>이름</td><tr><td>$re[0]</td><td>$re[1]</td><td>$re[2]</td>";

<?php
    mysqli_close($conn);
?>