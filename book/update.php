<?php
// conn 변수 선언 대신 include
include "./db_conn.php";

$idx = $_POST['idx'];
$title = $_POST['title'];
$author = $_POST['author'];
$content = $_POST['content'];

// update 쿼리를 사용하여 $sql에 넣고 query() 날리기
$sql = "update book set title='$title', author='$author', content='$content' where id=$idx";
mysqli_query($conn, $sql);
echo "<script>alert('수정되었습니다');</script>";

?>
<meta http-equiv="refresh" content='1;url=list.php'>