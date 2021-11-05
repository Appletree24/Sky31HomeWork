<html lang="en">
<body>
<table border="1" align="center" frame="void">
    <?php
    for($i=1;$i<=9;$i++){
        echo "<tr>";
        for($j=1;$j<=$i;$j++){
            $r=mt_rand(0,255);
            $g=mt_rand(0,255);
            $b=mt_rand(0,255);
            $r1=mt_rand(0,255);
            $g1=mt_rand(0,255);
            $b1=mt_rand(0,255);
            echo "<td style='background: rgb(".$r.",".$g.",".$b.")'><font color=rgb(".$r1.",".$g1.",".$b1.")>$i*$j=".$i*$j."<font/><td/>";
        }
        echo "<tr/>";
    }
    ?>
</table>
</body>
</html>


