<?php
$servername='localhost';
$username='root';
$password1='root';
$dbname='homework';


$conn=new mysqli($servername,$username,$password1,$dbname);

if($conn->connect_error){
    die("连接失败:".$conn->connect_error);
}

$stmt=$conn->prepare("insert into homework (name,password,email,website,comment) values(?,?,?,?,?)");
$stmt->bind_param("sssss",$name,$password,$email,$website,$comment);

$name=$_POST["name"];
$password=$_POST["password"];
$email=$_POST["email"];
$website=$_POST["website"];
$comment=$_POST["comment"];
$stmt->execute();

echo "插入成功";

$stmt->close();
$conn->close();
?>