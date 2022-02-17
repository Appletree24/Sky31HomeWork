<?php
$UserName=$_POST['username'];
$Word=$_POST['CommentWord'];
$ServerName='localhost';
$DbUserName='';
$DbPassword='';
$DbName='';
$DataID=$_POST['Id'];
$Comment=$_POST['Comment'];

$conn=new mysqli($ServerName,$DbUserName,$DbPassword,$DbName);

header('content-type:application/json; charset=utf-8');


function SendComment($conn,$UserName,$Comment,$DataID){
    if($DataID){
        $stmt=$conn->prepare("INSERT INTO Comment(Comment,UserName) VALUES (?,?)");
        $stmt->bind_param("ss",$Comment,$UserName);
        $stmt->excute();
        $stmt->close();
        $Message=array("Code"=>0,"Result"=>"Success");
        exit(json_encode($Message));
    }else{
        $stmt=$conn->prepare("UPDATE Comment SET Comment=? WHERE id='$DataID' AND Username='$UserName'");
        $stmt->bind_param("s",$Comment);
        $stmt->execute();
        $stmt->get_result();
        $stmt->close();
        $Message=array("Code"=>0,"Result"=>'Success');
        exit(json_encode($Message));
    }
}


if($conn->connect_error){
    $Message=array("Code"=>-1,"Result"=>"Connection Fail");
    exit(json_encode($Message));
    die("Connection Fail".$conn->connect_error);
}else{
    SendComment($conn,$UserName,$Comment,$DataID);
    $conn->close();
}