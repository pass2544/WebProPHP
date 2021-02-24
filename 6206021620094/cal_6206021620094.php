<center>
<?php
    $wid = $_POST["h"];
    $kg = $_POST["fruit1"];
    $fruit = $_POST["fruit"];
    if(isset($_POST['submit'])){
        if($fruit == "orange"){
            echo "<img src = image\ส้ม.jpg width = $wid><br><br>";
            echo "ราคาต่อกิโล : 100 <br>";
            echo "จำนวน $kg <br>";
            $total = $kg*100;
            echo "ราคาทั้งหมดคือ $total <br>";
        }
        else if($fruit == "melon"){
            echo "<img src = image\เมล่อน.png width = $wid><br><br>";
            echo "ราคาต่อกิโล : 300 <br>";
            echo "จำนวน $kg <br>";
            $total = $kg*300;
            echo "ราคาทั้งหมดคือ $total <br>";
        }
        else if($fruit == "banana"){
            echo "<img src = image\กล้วย.jpg width = $wid><br><br>";
            echo "ราคาต่อกิโล : 200 <br>";
            echo "จำนวน $kg <br>";
            $total = $kg*200;
            echo "ราคาทั้งหมดคือ $total <br>";
        }
    }

?>
</center>