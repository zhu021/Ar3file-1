
<!DOCTYPE html>
<html>
<body onload="//loadImage()">

<?php
$pp='D:\xampp\htdocs\Ar3file\تست\برنامه ها';
$pp=urlencode($pp);
    $conn=mysqli_connect('localhost', 'root', '',"test");

    $sql = "INSERT INTO test (path, moddate, tags) VALUES ('$pp','2015/05/05','test')";
    if ($conn->query($sql) === TRUE) {
        echo urldecode($pp);
    } else {
        echo $conn->error;
    }
    $conn->close();


//$q=$_GET["q"];
//exec("start $q");


?>
<script>
    function loadImage() {
        this.window.close();
    }

</script>

</body>
</html>