<?php
$servername='localhost';
$username='root';
$password='root';
$dbname='test';



//链接数据库
//$conn=new mysqli($servername,$username,$password,$dbname);
//
//
//if($conn->connect_error){
//    die("连接失败:".$conn->connect_error);
//}

//删除数据
//mysqli_query($conn,"delete from test1 where firstname='子辉' and lastname='张'");
//echo "删除数据成功";

//创建表
//$sql="create table test1(
//    id int(6) unsigned auto_increment primary key,
//    firstname varchar(255) not null,
//    lastname varchar(255) not null,
//    email varchar(50),
//    reg_date timestamp
//)";


//创建数据库
//$sql='create database test1';
//if($conn->query($sql)===true){
//    echo "Success!";
//}else{
//    echo "Error bro!".$conn->error;
//}

//插入数据

//
//$sql='insert into test1 (firstname,lastname,email)
//values ("XXX","xxx","1246908638@qq.com");';
//
//if($conn->query($sql)===true){
//    echo "Done!";
//}else {
//    echo "Not done";
//}

//预处理语句添加数据
//$sql='insert into test1 (firstname,lastname,email) values(?,?,?)';
//
//$stmt=mysqli_stmt_init($conn);
//
//if(mysqli_stmt_prepare($stmt,$sql)){
//    mysqli_stmt_bind_param($stmt,'sss',$firstname,$lastname,$email);
//
//    $firstname='xxxx';
//    $lastname='xxxxx';
//    $email='xxxxxx';
//    mysqli_stmt_execute($stmt);
//}


//读取数据
//$sql='select firstname,lastname,email from test1';
//$result=$conn->query($sql);
//
//if($result->num_rows>0){
//    while ($row=$result->fetch_assoc()){
//        echo "email: " . $row["email"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//    }
//}else{
//    echo "Wrong bro,it's empty";
//}

$conn->close();

?>