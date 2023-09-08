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
    <tr><td>#</td><td>제목</td><td>저자</td><td>가격</td><td>출판사</td><td>장르</td><td>성별</td><td>IP</td></tr>

<?php

include "./db_conn.php";

// sql에 select, id별로 내림차순
$sql = "select * from book order by id desc";
$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);

for($i = 0; $i < $count; $i++) {
    $re = mysqli_fetch_row($result);

    if($re[7] == 1) $re[7] = "남자";
    else $re[7] = "여자";

    // $_SERVER[REMOTE_ADDR]: 글 작성자의 IP 표시
    echo "<tr><td>$re[0]</td><td><a href='read.php?idx=$re[0]'>$re[1]</a></td><td>$re[2]</td><td>$re[3]</td><td>$re[4]</td><td>$re[5]</td><td>$re[7]</td><td><?php echo $_SERVER[REMOTE_ADDR] ?></td></tr>";
}
?>
</table>

<?php
    mysqli_close($conn);
?>