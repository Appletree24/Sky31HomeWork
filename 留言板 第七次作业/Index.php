<?php
session_start();
global $user;
global $user1;
$user=$_SESSION["username"];
$conn=mysqli_connect("localhost","root","root","commentboard");
$sql="select * from text where receiver='{$user}'";
$result=mysqli_query($conn,$sql);
if($num=mysqli_num_rows($result))
{?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <div>
        <a href="speak.html">发布信息</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="Quit.php">退出系统</a></h3></div>
    <br/><br/>
    <h2>留言信息:</h2>
    <table cellpadding="0" cellspacing="0" border="1" width="60%">
        <tr bgcolor="#8BBCC7">
            <td>发送人</td>
            <td>接收人</td>
            <td>信息内容</td>
            <td>发送时间</td>
            <?php echo '<pre>';
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
            {?>
        <tr bgcolor="#FFFFFF">
            <td ><?php echo $row['sender'];?>&nbsp;</td>
            <td >&nbsp;<?php echo $row['receiver'];?>&nbsp;</td>
            <td >&nbsp;<?php echo $row['comment'];?>&nbsp;</td>
            <td >&nbsp;<?php echo $row['time'];?>&nbsp;</td>
            <?php
            }
            ?>
        </tr>
    </table>
    </body>
    </html>
    <?php


}?>
