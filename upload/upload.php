<?php
    // 사용자가 업로드한 파일을 모아둘 폴더
    $upload_dir = './uploads/';

    // upload_dir이라는 디렉토리가 없으면
    if(!is_dir($upload_dir)) {
        mkdir($upload_dir); // 폴더 만듦
    }
    // echo $_FILES["userfile"]["name"] . "<br/>" . $_FILES["userfile"]["size"] . "<br/>" . $_FILES["userfile"]["tmp_name"] . "<br/>" . $_FILES["userfile"]["type"];


    $uploaded_files = $_FILES['userfile'];

    foreach ($uploaded_files['tmp_name'] as $key => $tmp_name) {
        $upload_file = $upload_dir . basename($uploaded_files['name'][$key]);

        if (move_uploaded_file($tmp_name, $upload_file)) {
            echo "업로드 성공: " . $upload_file . "<br>";
        } else {
            echo "업로드 실패: " . $uploaded_files['name'][$key] . "<br>";
        }
    }

    // basename(): 파일 이름만 뽑아내는 함수
     /* $upload_file = $upload_dir.basename($_FILES['userfile']['name']);
    
    // 파일을 uploads 폴더 안으로
    // move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file);

    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file)) {
        echo "업로드 성공";
    } else echo "업로드 실패";

    echo $upload_file; */
?>