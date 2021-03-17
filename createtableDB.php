<html>
<body>
    <form action = "#" method = "get">
        ชื่อฐานข้อมูลที่ต้องการสร้าง : <input type = "text" name = "namedb"><br>
        ชื่อตารางฐานข้อมูลที่ต้องการสร้าง : <input type = "text" name = "tablename"><br>
        <input type = "submit" name = "submit" value = "create">
    </form>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "12345";
        $dbname = $_GET["namedb"];
        $tablename = $_GET["tablename"];
        // Create connection
        /*$conn = mysqli_connect($servername, $username, $password);
        $show = "SHOW DATABASE";
        if(!($result=mysqli_query($conn,$show))){
            printf("Error : %s\n",mysqli_error($conn));
        }
        while($row = mysqli_fetch_row($result)){
            if(($row[0] != "information_schema") && ($row[0] != "mysql")){
                echo $row[0]."\r<br>";
            }
        }*/
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // sql to create table
        if(isset($_GET["submit"])){
            $sql = "CREATE TABLE ".$tablename ."(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,email VARCHAR(50),reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
            if ($conn->query($sql) === TRUE) {
                echo "Table ".$tablename." created successfully";
            } 
            else {
                echo "Error creating table: " . $conn->error;
            }
            $conn->close();
        }
    ?>
</body>
</html>