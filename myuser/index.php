<!-- index.php: myuser 테이블 리스트를 출력하는 페이지 -->

<head>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="main.css">
</head>

<table border class="table table-striped table-hover">
    <tr><td>#</td><td>아이디</td><td>이름</td><td>비고</td></tr>

<?php
// 1. db 접속
$conn = mysqli_connect('localhost', 'test', '1111', 'test', '3307');

// 2. myuser 테이블의 모든 데이터 조회 쿼리 날리기
$sql = "select * from myuser order by id desc";
$result = mysqli_query($conn, $sql);

// mysqli_num_rows() : 데이터 갯수 구하는 함수 (데이터가 몇 줄인지)
$count = mysqli_num_rows($result);

for($i = 0; $i < $count; $i++) {
    $re = mysqli_fetch_array($result);
    // echo "<tr><td>$re[id]</td><td>$re[user_id]</td><td>$re[user_name]</td><td><a href='update_form.php?idx=$re[id]'>수정</a>&nbsp;<a href='delete_form.php> 삭제</a></td></tr>";

    echo "<tr><td>$re[0]</td><td>$re[1]</td><td>$re[2]</td><td><a href='update_form.php?idx=$re[0]'>수정</a>&nbsp; <a href='delete_form.php'>삭제</a></td></tr>";

}
?>
</table>

<a href="add.html">사용자 추가하기</a>

<?php
    mysqli_close($conn);
?>