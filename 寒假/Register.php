<?php
$UserName=$_POST['username'];
$Email=$_POST['email'];
$Password=$_POST['password'];


/**
 * 以下引号部分内留空自写
 */
$SeverName='localhost';
$DbUsername='';
$DbPassword='';
$DbName='';


$conn=new mysqli($SeverName,$DbUsername,$DbPassword,$DbName);


header('Content-Type:application/json; charset=utf-8');


function Register($conn,$Username,$Password,$Email){
    $Search='Select * from USER where username=$Username';
    if($conn->query($Search)){
        $Stmt=$conn->prepare("INSERT INTO User (Username,Password,Email) VALUES (?,?,?)");
        $Stmt->bind_param("sss",$Username,$Password,$Email);
        $Stmt->execute();
        $Stmt->close();
        $Message=array("Code"=>0,"Result"=>"Success");
    }else{
        $Message=array("Code"=>1,"Result"=>"Has been Resgistered");
    }
    $Result=json_encode($Message);
    exit($Result);
}


if($conn->connect_error){
    $message=array("Code"=>-1,"Result"=>"fail");
    $Exit=json_encode($message);
    exit($Exit);
    die("连接失败: " . $conn->connect_error);
}else{
    Register($conn,$UserName,$Password,$Email);
    $conn->close();
}