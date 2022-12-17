<?php
    date_default_timezone_set("Asia/Tehran");
    function fecko()
    {
        $args = func_get_args();
        if ($args AND is_array($args[0]) || is_object($args[0])) {
            echo "</br>";
             print_r($args);
             var_dump($args);
            echo "</br>";
        } else {
            echo "<pre>";
            if($args) {
                print_r($args[0]);
            }
            echo "</pre>";
        }
    }

    function ar3file_fileinfo($path){
        $path=$path;
        clearstatcache();
        if (file_exists($path)) {
            clearstatcache();
            echo "last modified: " . date ("F d Y H:i:s.", filemtime($path)).PHP_EOL;
            echo $path . ': ' . filesize($path) . ' bytes'.PHP_EOL;
            if(is_uploaded_file($path)) echo "YES!".PHP_EOL ;
            echo "$path was last changed: " . date("F d Y H:i:s.", filectime($path)).PHP_EOL;
            echo "$path was last accessed: " . date("F d Y H:i:s.", fileatime($path)).PHP_EOL;
            clearstatcache();
        }
    }

    //checks two arrays and return paths risk factor info
    function compare(array $path1, array $path2){
        $risk=0;
        $path1count($path1);count($path2);

//        foreach ($objects as $fileinfo) {
//            $filetype=$fileinfo->getExtension();
//            if ($fileinfo->isFile()) {
//                clearstatcache();
//                if ($filetype == "php") ++$php;
//                if ($filetype == "js") ++$js;
//                if ($filetype == "xml") ++$xml;
//                if ($filetype == "php" || $filetype == "js" || $filetype == "xml") {
//                    clearstatcache();
//                    $isUploaded=is_uploaded_file($fileinfo->getPathname()) ? "TRUE" : "FALSE";
//                    array_push($files, array(
//                            "filename"=>$fileinfo->getFilename(),
//                            "path" => $fileinfo->getPathname(),
//                            "type" => $fileinfo->getExtension(),
//                            "size" => $fileinfo->getSize(),
//                            "modification" => $fileinfo->getMTime(),
//                            "access" => $fileinfo->getATime(),
//                            "changed" => $fileinfo->getCTime(),
//                            "lines" => count(file($fileinfo->getPathname())),
//                            "isuploaded" => $isUploaded,
//
//                        )
//                    );
//                    clearstatcache();
//                }
//            }
//        }

        return $files;

    }

    //scans a path and returns all files and scan info
    function scan($path){
    date_default_timezone_set("Asia/Tehran");
    clearstatcache();
    $files = array ();
    $filescheckinfo=array();
    $jsoncounter=0;
    $path = realpath($path);
    $objects = new RecursiveIteratorIterator(new DirectoryIterator("$path"), RecursiveIteratorIterator::SELF_FIRST);
    $fmt = new IntlDateFormatter( "fa-IR" ,IntlDateFormatter::FULL, IntlDateFormatter::FULL,
        'Asia/Tehran',IntlDateFormatter::TRADITIONAL , "yyyy/MM/dd");
    //$iterator = new DirectoryItera
    tor("../");
    foreach ($objects as $fileinfo) {
        clearstatcache();
        //$filetype=$fileinfo->getExtension();
        if ($fileinfo->isDir()) {


                    //$files[$fileinfo->getPathname()] =
           // array_push($files,$fileinfo->getPath());
           // array_push($files,$fileinfo->getMTime());

$files[] =$fileinfo->getPath()." | ".$fileinfo->getMTime();
//$files[] =$fileinfo->getMTime();//gmdate("Y-m-d\\", $fileinfo->getMTime());


//                            //"path" => $fileinfo->getPathname(),
//                            "s"=>$fileinfo->getPath(),
////                            "modification" => $fileinfo->getMTime(),
////                            "access" => $fileinfo->getATime(),
////                            "changed" => $fileinfo->getCTime(),
//                            //"sha256" => hash_file('sha256', $fileinfo->getPathname()),
//                        ;
                ++$jsoncounter;
               clearstatcache();
            }
        }
    clearstatcache();


//        $files["info"] =
//        array(
//        "path"=>$path,
//        "time"=>time(),
//        "php" => $php,
//        "js" => $js,
//        "xml" => $xml,
//        );


    return $files;
    // Write Info To File
    //    $files=json_encode($files);
    //    $filescheckinfo=json_encode($filescheckinfo);
    //    $putpath="./times/".time().".txt";
    //    file_put_contents($putpath,$files);
}

    //check if path has been scanned or not
    function haschecked($path)
    {
            $scanned_dir=scandir("./times");
            $fileexist="FALSE";
            //fecko(scandir('./times'));
            foreach ($scanned_dir as $scanned) {
                $scanned="times/";
                $file=$scanned.hash('sha256',$path);
                $file=$file.".txt";
                if (file_exists($file)) {
                    $fileexist = "TRUE";
                }
            }
            return file($file);
    }

    //write data to file or database
    function save(array $data, $mode){
        $name;
        if($mode=="db") {
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
        }
        if($mode=="file") {
            // Write Info To File
            //$filescheckinfo=json_encode($filescheckinfo);

            $name=hash('sha256',$data['info']['path']);
            $putpath = "./times/" . $name . ".txt";
            $data = json_encode($data);
            file_put_contents($putpath, $data);

        }
        return $name;
    }