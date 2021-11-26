<?php
header("Content-type:text/html;charset=utf-8");
$username=$_POST["username"];
$password=$_POST["password"];

if($username==""||$password==""){
    echo "<script>alert('请您正确填写信息!');history.go(-1);</script>";
}else{

$conn=mysqli_connect("localhost","root","root","commentboard");



$find="select username from yonghu where username='$_POST[username]'";
$fr=mysqli_query($conn,$find);
$num=mysqli_num_rows($fr);

if($num)
{
    echo "<script>alert('该用户名已被注册!');history.go(-1);</script>";
}
else{
$stmt=$conn->prepare("insert into yonghu (username,password) values(?,?)");
$stmt->bind_param("ss",$username,$password);

$stmt->execute();

echo "<script>alert('注册成功！');window.location='Login.html';</script>";

$stmt->close();
$conn->close();

    }

  }
?>