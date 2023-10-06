<?php
    include "./db_conn.php";

    // 업로드 할 폴더 경로
    $upload_dir = './uploads/';

    // 만약 폴더가 없으면
    if(!is_dir($upload_dir)) {
        mkdir($upload_dir); // 폴더 만듦
    }

    $upload_file = $upload_dir.basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $upload_file);

    echo $upload_file;

    $fname = $_FILES['image']['name'];
    $fsize = $_FILES['image']['size'];
    $ftmp_name = $_FILES['image']['tmp_name'];

    $sql = "insert into image(fname, fsize, fpath, ftmp_name) values ('$fname', '$fsize', '$upload_file', '$ftmp_name')";
    mysqli_query($conn, $sql);
?>

<meta http-equiv="refresh" content='2;url=show.php'>