<?php
    // BLOB 타입
    
    // 1. db 연결
    include "./db_conn.php";

    // 2. 업로드 된 파일 편집
    // 서버에 올라간 임시파일을 읽어와서 특수문자에 \ 추가해서 $_file에 대입

    // file_get_contents(): 파일의 내용을 읽어오는 함수
    // addslashes(): 슬래시를 추가한다 (이미지는 바이너리이기 때문에 이스케이프 문자를 추가함)
    $_file = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $sql = "insert into img_test1(image) values('$_file')";
    mysqli_query($conn, $sql);
    echo "Saved!";

?>