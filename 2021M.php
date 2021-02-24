<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-1 </title>
</head>
<body>
    <center>
    <?php
        echo "Today is " . date("Y/m/d") . "<br>";
        $weekdays = array("จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์","อาทิตย์");
        echo '<center><font size="4" color="blue">มกราคม ๒๕๖๑</font>';
        echo '<font size="5" color="red"> ๒๔ </font>';
        echo '<font size="4" color="blue">January 2021</font></center>';
        echo '<table border="1" align="center">';
        echo '<tr>';
        for($n = 0 ; $n < 7; $n++) {
            echo '<td align="center" width="90">' . $weekdays[$n] . '</td>';
        }
        print_jan();
        echo '</tr></table>';
        echo '<center><font size="4" color="blue">มกราคม ๒๕๖๑</font>';
        echo '<font size="5" color="red"> ๒๔ </font>';
        echo '<font size="4" color="blue">January 2021</font></center>';
        echo '<table border="1" align="center">';
        echo '<tr>';
        for($n = 0 ; $n < 7; $n++) {
            echo '<td align="center" width="90">' . $weekdays[$n] . '</td>';
        }
        print_feb();
        echo '</tr></table>';
        echo '<center><font size="4" color="blue">มกราคม ๒๕๖๑</font>';
        echo '<font size="5" color="red"> ๒๔ </font>';
        echo '<font size="4" color="blue">January 2021</font></center>';
        echo '<table border="1" align="center">';
        echo '<tr>';
        for($n = 0 ; $n < 7; $n++) {
            echo '<td align="center" width="90">' . $weekdays[$n] . '</td>';
        }
        print_mar();
        echo '</tr></table>';
        function print_jan() {
            $day = -3;
            for($row = 1 ; $row <= 5; $row++) {
            echo '<tr>';
            for($col = 1 ; $col <= 7; $col++) {
                if (($day >= 1) && ($day <= 31))
                    echo '<td align="center">' . $day . '</td>';
                else
                    echo '<td align="center"> </td>';
                $day++;
            }
            }
        }
        function print_feb() {
            $day = -3;
            for($row = 1 ; $row <= 5; $row++) {
            echo '<tr>';
            for($col = 1 ; $col <= 7; $col++) {
                if (($day >= 1) && ($day <= 31))
                    echo '<td align="center">' . $day . '</td>';
                else
                    echo '<td align="center"> </td>';
                $day++;
            }
            }
        }
        function print_mar() {
            $day = -3;
            for($row = 1 ; $row <= 5; $row++) {
            echo '<tr>';
            for($col = 1 ; $col <= 7; $col++) {
                if (($day >= 1) && ($day <= 31))
                    echo '<td align="center">' . $day . '</td>';
                else
                    echo '<td align="center"> </td>';
                $day++;
            }
            }
        }
    ?>
    </center>
</body>
</html>