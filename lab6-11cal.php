<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> โปรแกรมคำนวณเกรด </title>
</head>
<body>
    <?php
        $hw = $_GET['hw'];
        $midterm = $_GET['midterm'];
        $final = $_GET['final'];
        if ($hw > 30) $hw = 30;
        if ($midterm > 35) $midterm = 35;
        if ($final > 35) $final = 35;

        echo "<p>";
        echo "<b>ข้อมูลคะแนน </b><br />";
        echo "Homework : <i> $hw </i> <br/>";
        echo "Midterm : <i> $midterm </i> <br/>";
        echo "Final : <i> $final </i> <br/>";
        $total = $hw + $midterm + $final;

        echo "Total Score : $total <br>";
        if ($total >= 80){ 
            echo "Result Grade :<br>"; 
            echo "<img src=image/A.jpg>";
        }
        elseif ($total >= 70){
            echo "Result Grade : B<br>"; 
            echo "<img src=image/B.jpg>";
        } 
        elseif ($total >= 60){ 
            echo "Result Grade : C<br>"; 
            echo "<img src=image/C.jpg>";
        }
        elseif ($total >= 50){
            echo "Result Grade : D<br>";
            echo "<img src=image/D.jpg>";
        }
        else {
            echo "Result Grade : F<br>";
            echo "<img src=image/F.jpg>";
        }
        echo "<br>";
        echo "<a href='lab6-11.php'> <big>Back </big></a>";
    ?>

</body>
</html>