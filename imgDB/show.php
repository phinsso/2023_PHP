<script>
    function action_imageView(url) {
        if(url) {
            var imgW=document.getElementById('img1').naturalWidth;
            var imgH=document.getElementById('img1').naturalHeight;
            var imgWindow=window.open("","_image_view_","width="+imgW+",height="+imgH);
            imgWindow.document.write("<img src='"+url+"'>");
        }
    }
</script>

<?php
    include "./db_conn.php";

    $sql = "select fname, fsize, fpath, ftmp_name from image";
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    for($i =0; $i < $count; $i++) {
        $re = mysqli_fetch_array($result);

        echo $re['fname'] . "<br>" . $re['fsize'] . "<br>" . $re['fpath'] . "<br>" . $re['ftmp_name'] . "<br><br><br>";

?>

<img src="<?php echo $re['fpath']?>" onclick="action_imageView('<?php echo $re['fpath']?>')" id="img1" width="50px" height="50px">
<?php
    }
?>