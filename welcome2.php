<html>
    <body>
        <?php
            $x=$_GET["numx"];
            $y=$_GET["numy"];
            $opt=$_GET["op"];
            switch($opt){
                case "+":
                    echo "xแ + y = ",$x+$y;
                    break;
                case "-":
                    echo "x - y = ",$x-$y;
                    break;
                case "*":
                    echo "x * y = ",$x*$y;
                    break;
                case "/":
                    echo "x / y = ",$x/$y;
                    break;
            }
        ?>
        <form action="formop.php">
            <input type="submit" value="back">
        </form>
    </body>
</html>