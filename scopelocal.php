<html>
<head>
</head>
<body>
    <?php
    function mytest(){
        $x = 5; //local scope
        echo "<p>Variable x inside function is : $x</p>";
    }
    mytest();
    $x=4;
    echo "<p>Variable x outside function is : $x</p>";
    ?>
</body>
</html>