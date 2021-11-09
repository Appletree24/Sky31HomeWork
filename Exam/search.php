<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Exam</title>
</head>
<body>
<p>请输入你要查找的字符:<input value="" type="text" id="aa" /></p>
<button onclick="cc()">查找</button>
<script type="text/javascript">
    function cc(){
        var aa=document.getElementById("aa").value;
        window.location.href="search.php?data="+aa;
    }
</script>
<?php
header("Content-type:text/html;charset=utf-8");
$myfile=file('database.txt');
$target=$_GET['data'];
$fl_myfile=preg_grep("/[".$target."]/",$myfile);
echo '<pre>' , var_dump($fl_myfile) , '</pre>';

?>
</body>
</html>

