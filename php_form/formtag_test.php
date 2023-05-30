<?php

    $id = $_POST["user_id"];
    $password = $_POST["user_password"];
    $pwCheck = $_POST["user_password_check"];
    $name = $_POST["user_name"];
    $gender = $_POST["user_gender"];
    $emailFront = $_POST["user_email"];
    $emailBack = $_POST["user_email2"];
    $address = $_POST["user_address"];
    $detailAddress = $_POST["user_detail_address"];
    $telecom = $_POST["user_telecom"];
    $areaCode = $_POST["user_area_code"];
    $cellphoneMiddle = $_POST["user_cellphone_middle"];
    $cellphoneLast = $_POST["user_cellphone_last"];

    echo $id."<br/>";
    echo $password."<br/>";
    echo $pwCheck."<br/>";
    echo $name."<br/>";
    echo $gender."<br/>";
    echo $emailFront."<br/>";
    echo $emailBack."<br/>";
    echo $address."<br/>";
    echo $detailAddress."<br/>";
    echo $telecom."<br/>";
    echo $areaCode."<br/>";
    echo $cellphoneMiddle."<br/>";
    echo $cellphoneLast."<br/>";


?>