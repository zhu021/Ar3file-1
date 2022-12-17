<!DOCTYPE html>
<html>
<!--<script src="https://unpkg.com/react@16/umd/react.production.min.js"></script>-->
<!--<script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>-->
<!--<script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<link type="text/css" rel="stylesheet" href="Assets/main.css" />
<body>

<pre style="word-wrap: break-word;">
<?php
date_default_timezone_set("Asia/Tehran");
require "./Classes/DB.php";
require "./Classes/main.php";



function check(){
    $dir_check=scandir('./times');$fileexist1=array();
    //fecko(scandir('./times'));
    foreach ($dir_check as $dir_checked) {
        $dir_checked="times/".$dir_checked;
        if (is_file($dir_checked)) {
            array_push($fileexist1,$dir_checked);
        }
    }
    //fecko(json_decode(file_get_contents($fileexist1[0])));
    echo date("F j, Y, g:i a",basename($fileexist1[0],".txt"));
    echo count(check1(json_decode(file_get_contents($fileexist1[0]))));
}

$scanned_dir=scandir('./times');$fileexist=FALSE;
//fecko(scandir('./times'));
foreach ($scanned_dir as $scanned) {
    $scanned="times/".$scanned;
    if (is_file($scanned)) {
        $fileexist=TRUE;
    }
}
if($fileexist) check();

fecko(count(check1()));



//$conn = new mysqli("localhost","root","","test");
//foreach ($files as $file){
//    if($file['type']=="php") {
//        $thispath = $file['path'];
//        $sql = "INSERT INTO php (path)
//        VALUES ('$thispath')";
//        if ($conn->query($sql) === TRUE) {
//            echo $thispath . PHP_EOL;
//        } else {
//            echo "Error: " . $sql . "<br>" . $conn->error;
//        }
//    }
//}


//$sql="INSERT INTO dir (path)
//VALUES ('$filescheckinfo', '$files')";
//
//$conn = new mysqli("localhost","root","","test");
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

?>
</pre>

</body>
</html>