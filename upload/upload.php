<?php
    $upload_dir = './uploads/';

    // upload_dir이라는 디렉토리가 없으면
    if(!is_dir($upload_dir)) {
        mkdir($upload_dir); // 폴더 만듦
    }
?>