<html>
<body>
    <form method = "get">
    ชื่อฐานข้อมูลที่ต้องการสร้าง : <input type = "text" name = "namedb">
    <input type = "submit" name = "submit" value = "create">
    <input type = "submit" name = "delete" value = "delete">
    </form>
    <?php
            $servername = "localhost";
            $username = "root";
            $password = "12345";
            $myDB = $_GET["namedb"];
            $conn = mysqli_connect($servername, $username, $password);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        if(isset($_GET["submit"])){
            
            // Create connection
            
            // Check connection
            
            // Create database
            $sql = "CREATE DATABASE ".$myDB;
            if (mysqli_query($conn, $sql)) {
                echo "Database created successfully";
            } 
            else {
                echo "Error creating database: " . mysqli_error($conn);
            }
            mysqli_close($conn);
            
        }
        else if(isset($_GET["delete"])){
            $sql = "DROP DATABASE ".$myDB;
            if (mysqli_query($conn, $sql)) {
                echo "Database deleted successfully";
            } 
            else {
                echo "Error deleting database: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        
    ?>
</body>
</html>