<?php
include "./db_conn.php"; 

$idx = $_POST['idx'];

$sql = "delete from book where id=$idx";
mysqli_query($conn, $sql);

echo "<script>alert('삭제되었습니다');</script>";

?>
<meta http-equiv="refresh" content='1;url=list.php'>