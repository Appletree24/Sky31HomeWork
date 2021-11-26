<?php
    session_start();
    header("content-type:text/html;charset=utf-8");
    global $user;
    $re=$_POST["receiver"];
    $comment=$_POST["content"];
    @date_default_timezone_set(PRC);
    $time=date("Y-m-d G:i:s");
    $_SESSION["username"]=$user;
    $user1=implode("",$_SESSION);


    $conn=mysqli_connect("localhost","root","root","commentboard");
    $sql="insert into text(sender,receiver,comment,time) values('$user1','$re','$comment','$time')";
    $result=mysqli_query($conn,$sql);
    $sql1="insert into friend(me,friend) values('$user1','$re')";
    $result=mysqli_query($conn,$sql1);
    if($re=""||$comment=""){
        echo "<script>alert('发布失败!');window.location='speak.html';</script>";
    }
    else{
        echo "<script>alert('发布成功!');window.location='speak.html';</script>";
    }

    ?>