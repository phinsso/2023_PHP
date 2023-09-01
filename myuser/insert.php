<?php
//접속: mysqli_connect(접속주소,아이디,비번,사용할 디비);
/* $host='localhost';
$id='test';
$pass='1111';
$db='test';
$port='3307';
$conn=mysqli_connect($host,$id,$pass,$db,$port); */
include "./db_conn.php";

// if($conn){
//     echo "Connected!";

// }else{
//     echo "Failed!";
// }

$uid=$_POST['userid'];
$uname=$_POST['username'];

echo $uid."".$uname;

$sql="insert into myuser(user_id,user_name)values('$uid','$uname')";
mysqli_query($conn,$sql);
// echo " Inserted!!";

// 자바스크립트 alert창 띄우기
echo "<script>alert('가입되었습니다');</script>";

mysqli_close($conn);
?>

<!-- 입력완료 버튼을 누르면 2초 후에 list.php 화면으로 이동하기-->
<meta http-equiv="refresh" content='2;url=index.php'>