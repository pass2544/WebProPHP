<html>
<body>
    <?php
        $score = 70;
        if($score > 100){
            echo("Error <br/>"); //echo("<br/>");
            echo("อย่าโลภไอควาย");
        }
        else if($score >= 80){
            echo("Your score is $score <br/>"); //echo("<br/>");
            echo("Your grade is A");
        }
        else if($score >= 70){
            echo("Your score is $score <br/>"); //echo("<br/>");
            echo("Your grade is B");
        }
        else if($score >= 60){
            echo("Your score is $score <br/>"); //echo("<br/>");
            echo("Your grade is C");
        }
        else if($score >= 50){
            echo("Your score is $score <br/>"); //echo("<br/>");
            echo("Your grade is D");
        }
        else if($score < 50){
            echo("Your score is $score <br/>"); //echo("<br/>");
            echo("Your grade is F");
        }
    ?>
</body>
</html>