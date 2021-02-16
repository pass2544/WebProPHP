<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Word</title>
</head>
<body>
    <form  method="get">
    <center><h1>HW2-1 : Find Character</h1>
    Your text : <input type="text" name="data"><br><br>
    <input type="submit" name = "submit" value="Submit">
    <input type="reset" name = "clear" value="Clear"><br>
    </form>
        <?php
            if (isset($_GET['submit'])){
                $data = $_GET['data'];
                foreach (count_chars($data, 1) as $i => $value) {
                    if(chr($i) == ' '){
                        echo "Space = ".$value." , ";
                    }
                    else{
                        echo chr($i)." = ".$value." , ";
                    }
                 }
            }
            echo '</center></div>';
        ?>
</body>
</html>