<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Word</title>
</head>
<body>
    <form  method="get">
    <center><h1>HW2-2 : Find Word</h1>
    Your text : <input type="text" name="data"><br><br>
    <input type="submit" name = "submit" value="Submit">
    <input type="reset" name = "clear" value="Clear"><br>
    </form>
    <?php
        if(isset($_GET['submit'])){
            echo "<center><h2>Count Char in Sentence</h2>" ;
            $data = $_GET['data'];
            $array = array('1', "2", '3', '4', '5', '6', '7', '8', '9', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '2', '3', '7', '5', '8', '0', '8');
            $newData = str_replace($array, '', $data);
            foreach (count_chars($newData, 1) as $i => $value){
                if(chr($i) == "'" OR chr($i) == " "){
                    chr($i);
                }
                else{
                    echo chr($i)." : Ascii = ".$i."<br>";
                }
            }
        }
    ?>
</body>
</html>