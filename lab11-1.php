<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ตัวอย่างที่ 11-1</title>
</head>
<body>
    <?php //------------ส่วนการเปิ ด Connection ในการติดต่อกับ MySQL ----------------       
        $sql = "SELECT book.BookID as ID,book.BookName as BookName,typebook.TypeName as TypeName FROM book INNER JOIN typebook ON book.TypeID = typebook.TypeID ORDER BY BookID; ";
        $hostname = "localhost";
        $username = "root";
        $password = "12345";
        $dbname = "bookit";
        $conn = new mysqli($hostname, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM book";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ( $row = $result->fetch_assoc() )
            {
                echo "bookid: " . $row["BookID"]. " - BookName: " .$row["BookName"]. " " . $row["TypeID"]. "<br>";
            }
            
        } 
        else{
            echo "0 results";
        }
        $conn->close();
    ?>
</body>
</html>