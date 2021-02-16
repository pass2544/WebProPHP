<html>
<body>
<body>
    <h2>Check Number</h2>
    <form action="#" method="get">
        <input type="text" name="number" value=0>
        <br>
        <input type="submit" value="check num">
        <br><br>

    </form>
    <?php
        $num=0;
        $odd= 0;
        $even = 0;
        $zero = 0;
        $num = $_GET['number'];
        echo "<br> Num is ".$num;

        $r = 0;
    do{
        echo round ($num , 0),"  :";

        if ($num % 10 == 0){
            echo "This is odd <br>";
            $odd ++;
        }
        else if($num % 2 == 0){
            echo "This is a even <br>";
            $even ++;
        }
        else {
            echo "This is a zero <br>";
            $zero ++;
        }
        $num /= 10;

        $r++;
    }
    while($r < $num);

        echo "<table>";
        echo "<tr><td>Odd = ".$odd."</td>";
        echo "<td></td>";
        echo "</tr>";
        echo "<tr>
<td>Even = ".$even."</td>";
        echo "<td></td>";
        echo "</tr>";
        echo "<tr><td>Zero = ".$zero."</td>";
        echo "<td></td>";
        echo "</tr>";
        echo "</table>";


?>
</body>
</html>

Message #web-program