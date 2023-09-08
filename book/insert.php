<?php
    include "./db_conn.php";

    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $publish = $_POST['publish'];
    $genre = $_POST['sel'];
    $content = $_POST['content'];
    $gender = $_POST['gender'];

    // echo $title . " " . $author . " " . $price . " " . $publish . " " . $genre . " " . $content . "  " . $gender;

    $sql="insert into book(title, author, price, publish, genre, content, gender)values('$title', '$author', '$price', '$publish', '$genre', '$content', '$gender')";
    mysqli_query($conn,$sql);
    echo "<script>alert('추가되었습니다');</script>";
    mysqli_close($conn);

?>
<meta http-equiv="refresh" content='1;url=list.php'>