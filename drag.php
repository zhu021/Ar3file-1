

<!DOCTYPE HTML>
<html>
<head>
<style>
#div1 {
width: 350px;
  height: 70px;
  padding: 10px;
  border: 1px solid #aaaaaa;
}
</style>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
function db(){
    var connection = new ActiveXObject("ADODB.Connection") ;

    var connectionstring="Data Source=<server>;Initial Catalog=<catalog>;User ID=<user>;Password=<password>;Provider=SQLOLEDB";

    connection.Open(connectionstring);
    var rs = new ActiveXObject("ADODB.Recordset");

    rs.Open("SELECT * FROM table", connection);
    rs.MoveFirst
    while(!rs.eof)
    {
        document.write(rs.fields(1));
        rs.movenext;
    }

    rs.close;
    connection.close;
}
</script>
</head>
<body>

<p>Drag the W3Schools image into the rectangle:</p>

<div >
    <a id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">روابط </a>

</div>
<br>
<a id="drag1"  draggable="true" ondragstart="drag(event)" >روابط عمومی</a>

</body>
</html>
