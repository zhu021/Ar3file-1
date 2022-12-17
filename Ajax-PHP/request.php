<?php
date_default_timezone_set("Asia/Tehran");
clearstatcache();
require "../Classes/main.php";

?>
<pre>
<?php

//echo " ".$fmt->format(2015/05/03);

//$path = 'D:';
//$rdi = new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::KEY_AS_PATHNAME);
//foreach (new RecursiveIteratorIterator($rdi, RecursiveIteratorIterator::SELF_FIRST) as $file => $info) {
//    echo $file."\n";
//}

$temp_arr = scan("D:\\xampp\\htdocs\\ar3file");
    $x = 0;$v = [];
//    while($x < count($temp_arr)){
//        //array_push($v,"path"=>"$temp_arr[$x]['path']");
//
//            $v["path" . $x] = $temp_arr[$x]["path"];
//            ++$x;
//
//    }
$json = json_encode(array(
    "client" => array(
        "build" => "1.0",
        "name" => "xxxxxx",
        "version" => "1.0"
    ),
    "protocolVersion" => 4,
    "data" => array(
        "distributorId" => "xxxx",
        "distributorPin" => "xxxx",
        "locale" => "en-US"
    )
));
    //print_r($temp_arr);
    print_r(array_unique($temp_arr));
    //print_r($p);
    //echo json_encode($temp_arr);
    //print_r($v);
    //echo json_encode($v)."<br>";
//$iterator = new DirectoryIterator(dirname('D:\xampp\htdocs\ar3f\times\امدادگران.txt'));
//foreach ($iterator as $fileinfo) {
//    if ($fileinfo->isFile()) {
//        echo $fileinfo->getFilename() . " " . $fileinfo->getMTime() . "<br>";
//        echo $fileinfo->getFilename() . " changed at :" . $fileinfo->getCTime() . "<br>";
//
//    }
//}

//$iterator = new RecursiveDirectoryIterator("D:\\xampp");
//foreach ($iterator as $fileinfo) {
////    if ($fileinfo->isFile()) {
//        echo $fileinfo->getFilename() . " | " . mime_content_type($fileinfo->getPathname()). "<br>";
//
//
//}
clearstatcache();
?>

</pre>
