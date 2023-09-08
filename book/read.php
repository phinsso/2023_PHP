<?php
    include "./db_conn.php";

    $idx = $_GET['idx'];

    $sql = "select * from book where id=$idx";
    $result = mysqli_query($conn, $sql);
    $re = mysqli_fetch_row($result);
?>

<form method = "post" action = "update.php">
    번호 <input type=text name="idx" value="<?php echo $re[0] ?>" disabled></br/>
    제목 <input type=text name="title" value="<?php echo $re[1] ?>"><br />
    저자 <input type=text name="author" value="<?php echo $re[2] ?>"><br />
    내용 <input type=text name="content" value="<?php echo $re[6] ?>"><br />

    <!-- idx 값 넘기는 방법
    hidden
-->
    <input type="hidden" name="idx" value="<?php echo $re[0] ?>" ><br />
    <button type="submit">수정</button>

    <input type="hidden" name="idx" value="<?php echo $re[0] ?>" ><br />
    <button type="submit" formaction="delete.php">삭제</button>
</form>