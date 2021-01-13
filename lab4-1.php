<html>
<head><title>การกำหนดค่าตัวแปร</title></head>
<body>
    <?php
        $x=100;
        $y="200";
        $z='300';
        $add = $x+$y;
        $sub = $z-$x;
        $equal = $y*$z;
        $han = $equal/$z;
        $message = "Hello World";
        echo $x;    echo"<br />";
        echo $y;    echo"<br />";
        echo $z;    echo"<br />";
        echo "ผลบวก ";   echo $add;    echo"<br />";
        echo "ผลลบ  ";   echo $sub;    echo"<br />";
        echo "ผลคูณ  ";   echo $equal;    echo"<br />";
        echo "ผลหาร ";   echo $han;    echo"<br />";
        echo $message;    echo"<br />";
        ?>
        </body>
</html>