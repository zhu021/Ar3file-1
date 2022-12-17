<!DOCTYPE html>
<html>
<?php include './inc/header.php'; ?>
<body>

<script>

    // window.open('file:///D:/xampp');
</script>
<?php
    date_default_timezone_set("Asia/Tehran")


    //save(scan("./"),"file");


    //ar3fsql("INSERT INTO dir (dirpath,lastscan) VALUES ('ttttttt',$time)");
//exec("start http://localhost/Ar3file/Ajax-PHP/openwindow.php?q=D:\\");
?>

    <?php scan("E:\Programs\Xampp\htdocs\Ar3file"); ?>


<div class="container">
</div>
<div id="test"></div>
    <script>
        //$("#div1").load("../Ajax-PHP/request.php");
        $.get("./Ajax-PHP/request.php", function(data, status){
            let person = data;
            let txt = JSON.parse(person);
            alert(txt);

            for (let x in txt) {
                //document.getElementById("test").innerHTML = txt[0].path;
                const para = document.createElement("p");
                para.innerHTML = txt[x];
                document.getElementById("test").appendChild(para);
            }


        });

    </script>

</body>
</html>