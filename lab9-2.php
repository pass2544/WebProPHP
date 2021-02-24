<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-2 </title>
</head>
<body>
    <form method="get">
    <center>
    Student : <input type="text" name="st"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_GET['submit'])){
            $MaxStudent = $_GET["st"];
            $score = array();
            for($n = 0 ; $n < $MaxStudent; $n++) {
                $score[$n] = rand(0, 100);
            }
            echo '<center><font size="4" color="blue"> Grade Report </font></center>';
            echo '<table border="1" align="center">';
            echo '<tr><td align="center" width="90">Student No.</td>';
            echo '<td align="center" width="90">Score</td>';
            echo '<td align="center" width="90">Grade</td></tr>';
            for($n = 0 ; $n < $MaxStudent; $n++) {
                echo '<tr><td align="center" width="90">' . ($n+1 ) . '</td>';
                echo '<td align="center" width="90">' . $score[$n] . '</td>';
                echo '<td align="center" width="90">' . checkgrade($score[$n]) . '</td></tr>';
            }
            echo '<tr><td colspan="3" align="center"> Average Score : ';
            echo average($score,$MaxStudent);
            echo '</td></tr></table>';
            echo(min($score) . "<br>");
            echo(max($score) . "<br>");
    }
    function average($data, $max){
        $total = 0;
        for($n = 0 ; $n < $max; $n++) {
            $total += $data[$n];
        }
        return( $total / $max );
    }
    function checkgrade($score){
        $grade = ' ';
        if($score >= 80 && $score <= 100){
            $grade = 'A';
        }
        else if($score  >= 70 && $score < 80){
            $grade = 'B';
        }
        else if($score  >= 60 && $score < 70){
            $grade = 'C';
        }
        else if($score  >= 50 && $score < 60){
            $grade = 'D';
        }
        else if($score  >= 0 && $score <= 49){
            $grade = 'F';
        }
        return($grade);
    }
    ?>
    </center>
</body>
</html>