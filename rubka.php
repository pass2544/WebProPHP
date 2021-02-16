<html>
<body>
    <?php
        $num  = 1234567890;
        $even=0;
        $odd=0;
        $zero=0;
        $r = 0;
        $checknum=$num;
        while($checknum == 0){
            $checknum = $num%10;
            if($num % 2 == 0){
                $even++; 
            }
            else if($num % 2 == $num){
                $zero=0;
            }
            else{
                $odd++;
            }
        }
        echo("even = $odd <br/>");
        echo("odd = $even <br/>");
        echo("zero = $zero <br/>");
    ?>
</body>
</html>