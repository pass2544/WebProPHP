<html>
<body>
    <table border = "1">
    <form action = "#" method ="get">    
    <?php
    /*<tr><td>enter car name : <input type = "text" name ="car1"></td></tr>
    <tr><td>enter car name : <input type = "text" name ="car2"></td></tr>
    <tr><td>enter car name : <input type = "text" name ="car3"></td></tr>
    <tr><td>enter car name : <input type = "text" name ="car4"></td></tr>
    <tr><td>enter car name : <input type = "text" name ="car5"></td></tr>
    <tr><td>enter car name : <input type = "text" name ="car6"></td></tr>
    <tr><td>enter car name : <input type = "text" name ="car7"></td></tr>
    <tr><td>enter car name : <input type = "text" name ="car8"></td></tr>
    <tr><td>enter car name : <input type = "text" name ="car9"></td></tr>
    <tr><td>enter car name : <input type = "text" name ="car10"></td></tr>
    <tr><td><input type = "submit" name ="submit" value = "submit information"></td></tr></table>*/
    for($i=0;$i<10;$i++){
        echo '<tr><td>';
        echo '<input name = car[] placeholder = "enter car name"';
        echo '</td></tr>';
    }
    ?>
    <tr><td><input type = "submit" name ="submit" value = "submit information"></td></tr></table>
    </form>
    <?php
        if(isset($_GET['submit'])){
            /*$car1 = $_GET["car1"];
            $car2 = $_GET["car2"];
            $car3 = $_GET["car3"];
            $car4 = $_GET["car4"];
            $car5 = $_GET["car5"];
            $car6 = $_GET["car6"];
            $car7 = $_GET["car7"];
            $car8 = $_GET["car8"];
            $car9 = $_GET["car9"];
            $car10 = $_GET["car10"];
            $arr = array($car1,$car2,$car3,$car4,$car5,$car6,$car7,$car8,$car9,$car10);
            for($i=0;$i<count($arr);$i++){
                echo $arr[$i]."<br>";
            }*/
            $car = $_GET["car"];
            foreach($car as $showcar):
                echo $showcar."<br>";
            endforeach;
            print_r($car);
        }
    ?>
</body>
</html>