<?php
    $x=100;
    $y=10;
    $op = "+" ;
    switch($op){
        case "+":
            plus($x,$y);echo "<br>";
            break;
        case "-":
            sub($x,$y);echo "<br>";
            break;
        case "*":
            mul($x,$y);echo "<br>";
            break;
        case "/":
            div($x,$y);echo "<br>";
            break;

    }
    function plus($x,$y){
        echo "x + y = ",$x+$y;
    }
    function sub($x,$y){
        echo "x - y = ",$x-$y;
    }
    function mul($x,$y){
        echo "x * y = ",$x*$y;
    }
    function div($x,$y){
        echo "x / y = ",$x/$y; echo "<br>";
    }
    /*if($op == "+"){
        plus($x,$y);echo "<br>";
    }
    elseif($op == "-"){
        sub($x,$y);echo "<br>";
    }
    elseif($op == "*"){
        mul($x,$y);echo "<br>";
    }
    elseif($op == "/"){
        div($x,$y);echo "<br>";
    }*/
    
?>