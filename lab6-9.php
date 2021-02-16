<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 9 </title></head>
</head>
<body>
    <form  method="get">
        <center><h1>HW1 : Find Min Max Average</h1>
        Start num: <input type="text" name="n1"><br>
        End num: <input type="text" name="n2"><br>
        Divide by: <input type="text" name="n3"><br><br>

        <input type="submit" name = "submit" value="Submit"><br>
    </center>
    <?php
        if(isset($_GET['submit'])){
            $num1 = $_GET["n1"];
            $num2 = $_GET["n2"];
            $num3 = $_GET["n3"];
        $found = false;    
        do{
            if($num1 % $num3 ==0){
                echo $num1.",";
            }
            $num1++;    
            /*if ($num1 % $num3 == 0) {
                    $found = true;
                break;
                }
            $num1++;
        }*/while($num1 <= $num2);
        /*while($num1 <= $num2){
            if ($num1 % $num3 == 0) {
                $found = true;
            break;
            }
        $num1++;
        }*/
        /*if ($found)
            echo "เลขจำนวนเต็มที่อยู่ในช่วง $num1 ถึง $num2 ที่น้อยที่สุดและหารด้วย 13 ลงตัวคือ $num1<br>";
        else
            echo "ไม่มีเลขจำนวนเต็มที่
อยู่ในช่วง $num1 ถึง $num2 ที่น้อยที่สุดและหารด้วย 13 ลงตัว<br>";*/
}
    ?>
</body>
</html>