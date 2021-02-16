<?php
    $lot = $_POST['lot'];
    $cash = $_POST['cash'];
    $ran = rand(0, 99);
    if($ran != $lot) {
        echo '<form action="hw2-3.php" method="POST">';
        echo 'เสียใจด้วยคุณไม่ถูกรางวัล<br>';
        echo '<input type="submit" value="Back"><br><br>';
        echo 'รางวัล เลขที่ออก คือ:'.$ran;
        echo '</form>';
    }
    else {
        echo '<form action="hw2-3.php" method="POST">';
        echo 'ยินดีด้วยคุณถูกรางวัล<br><br>';
        echo 'คุณได้เงินรางวัล ';
        echo $cash*60;
        echo ' บาท<br>';
        echo '<input type="submit" value="Back"><br><br>';
        echo 'รางวัล เลขที่ออก คือ:'.$ran;
        echo '</form>';
    }
?>