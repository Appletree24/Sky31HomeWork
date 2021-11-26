<?php
    session_start();
    $user=$_POST["username"];
    $_SESSION["username"]=$user;
    $password=$_POST["password"];
    global  $username;
    global $password;
    if($user=""||$password=""){
        echo "<script>alert('请输入用户名或密码!');history.go(-1);</script>";
    }else{
        $conn=mysqli_connect("localhost","root","root","commentboard");
        $login="select username,password from yonghu where username='$_POST[username]' and password='$_POST[password]'";
        $result=mysqli_query($conn,$login);
        $num=mysqli_num_rows($result);
       if($num){
          echo "<script>alert('登陆成功!');window.location='speak.html';</script>";
      }elseif ($num==0){
         echo "<script>alert('该用户名尚未被注册!');history.go(-1);</script>";
     }
       else{
            echo "<script>alert('用户名或密码不正确!');history.go(-1);</script>";
       }
    }
?>
