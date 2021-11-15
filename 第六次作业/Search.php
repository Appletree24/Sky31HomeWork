<?php
$target=$_POST["target"];
header("Content-type:text/html;charset=utf-8");
$myfile=file('database.txt');
$fl_myfile=preg_grep("[".$target."]",$myfile);
echo '<pre>' , var_dump($fl_myfile) , '</pre>';
?>
