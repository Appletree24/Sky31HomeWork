<?php

$UserName=$_POST['username'];
$Password=$_POST['password'];
$ServerName='localhost';
$DbUserName='';
$DbPassword='';
$DbName='';

$conn=new mysqli($ServerName,$DbUserName,$DbPassword,$DbName);

header('Content-Type:application/json; charset=utf-8');


function Login($conn,$UserName,$Password){
    $Search="SELECT * FROM USER  WHERE username='$UserName' AND password='$Password'";
    if($conn->query($Search)->num_rows){
        $Message=array("Code"=>0,"Result"=>"Success");
        exit(json_encode($Message));
    }else{
        $Message=array("Code"=>1,"Result"=>"UserName or Password wrong");
        exit(json_encode($Message));
    }
}



if($conn->connect_error){
    $Message=array("Code"=>-1,"Result"=>"Connection Fail");
    $Result=json_encode($Message);
    exit($Result);
    die("Connection Fail".$conn->connect_error);
}else{
    login($conn,$UserName,$Password);
    $conn->close();
}