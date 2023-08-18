<?php
include('./db_conn.php');  // ./ : 현재 폴더를 가리킴

$idx = $_POST['idx'];  // 삭제할 번호가 들어있음

$sql = "delete from myuser where id=$idx";
mysqli_query($conn, $sql);
echo "Deleted!";

?>