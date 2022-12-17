<!DOCTYPE html>
<html>
<body onload="loadImage()">

<?php
//$q='D:\\';
$q=$_GET["q"];
exec("start $q");


?>
<script>
    function loadImage() {
        this.window.close();
    }

</script>

</body>
</html>