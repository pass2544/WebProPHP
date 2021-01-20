    <?php
    $x = 5;
    
    function mytest(){
        global $x;
        echo "<p>Variable x inside function is : $x</p>";
    }
    mytest();
    echo "<p>Variable x outside function is : $x</p>";
    ?>