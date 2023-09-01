<?php
// conn 변수 선언 대신 include
include "./db_conn.php";

$idx = $_POST['idx'];
$userid = $_POST['userid'];
$username = $_POST['username'];

// update 쿼리를 사용하여 $sql에 넣고 query() 날리기
$sql = "update myuser set user_id='$userid', user_name='$username' where id=$idx";
mysqli_query($conn, $sql);
echo "<script>alert('수정되었습니다');</script>";

?>
<meta http-equiv="refresh" content='2;url=index.php'>