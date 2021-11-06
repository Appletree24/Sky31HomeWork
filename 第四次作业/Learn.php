<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nine 九 乘法表</title>
    <script>
        let randomNum = (min, max) => Math.round(Math.random() * (max - min + 1)) + min
        setInterval(()=>{
            document.querySelector("td").style.color = "rgb("+randomNum(0,255)+","+randomNum(0,255)+","+randomNum(0,255)+")"
        })
    </script>
</head>
<body>
<marquee behavior="alternate">第四次作业 九九乘法表</marquee>
<?php
$i=$j=0;
echo"<table border='1' align='center' frame='void'>";
for($i=1;$i<=9;$i++){
    echo"<tr>";
    for($j=1;$j<=$i;$j++){
        $r=mt_rand(0,255);
        $g=mt_rand(0,255);
        $b=mt_rand(0,255);
        echo"<td style='background:rgb(".$r.",".$g.",".$b.")'>".getCN($j)."乘".getCN($i).($i*$j<10?'得':"").getCN($i*$j).'</td>';
    }
    echo'</tr>';
}
echo'</table>';

function getCN($num){
    $cns=array("零","一","二","三","四","五","六","七","八","九","十");
    if($num<10){
        return $cns[$num];
    }elseif($num <100){
        $r=str_split($num);
        $ln=$cns[$r[0]].$cns[10];
        if($r[1]>0){
            $ln.=$cns[$r[1]];
        }
        return $ln;
    }else{
        return $num;
    }
}
?>
</body>
</html>
