<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 9 </title></head>
</head>
<body>
<form method ="get">
Start Num <input type ="text" name ="num"><br>
End Num <input type ="text" name = "result"><br>
Dived num <input type = "text" name = "Divide"><br>
<input type ="submit" name = "sumbit">
<?php
    if(isset($_GET['sumbit'])){
    $start=$_GET['num'];
    $end=$_GET['result'];
    $div=$_GET['Divide'];
    $Sum = 0;
    // $found = false;
    do{
        if($start % $div ==0){
            echo $start.",";
        }
        $start++;
        }while ($start < $end);
    }

    ?>
</body>
</html>
