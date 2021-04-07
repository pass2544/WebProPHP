<!DOCTYPE html>
<HTML>
<HEAD><TITLE>Show Data Book</TITLE></HEAD>
<BODY>
<?php
    $hostname = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "bookit";
    $conn = mysqli_connect( $hostname, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    $id = $_GET['id'];
    $sql = "select * from book where BookID = $id";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($result);
    $Path="pictures/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
    $image = "<img src=$Path$data[Picture] valign=middle align = center
    width=\"80\" height = \"100\">";
    echo "<table border=1 align =center bgcolor=#FFCCCC>";
    echo "<tr><td align=center colspan = 2 bgcolor =#FF99CC><B>แสดงรายละเอียดหนังสือ
    </B></td></tr>";
    echo "<tr><td> รหัสหนังสือ : </td><td>".$data["BookID"]."</td></tr>";
    echo "<tr><td> ชื่อหนังสือ : </td><td>".$data["BookName"]."</td></tr>";
    //echo "<tr><td> ประเภทหนังสือ : </td><td>".$data["TypeID"]."</td></tr>";
    echo "<tr><td> สถานะหนังสือ : </td><td>";    
        if($data["TypeID"] == "001"){
            echo "การ์ตูน";
        }
        else if($data["TypeID"] == "002"){
            echo "นิยาย";
        }
        else if($data["TypeID"] == "003"){
            echo "นิตยสาร";
        }
    //echo "<tr><td> สถานะหนังสือ : </td><td>".$data["StatusID"]."</td></tr>";
    echo "</td></tr><tr><td> สถานะหนังสือ : </td><td>";    
        if($data["StatusID"] == "01"){
            echo "ปกติ";
        }
        else if($data["StatusID"] == "02"){
            echo "ชำรุด";
        }
        else if($data["StatusID"] == "03"){
            echo "ส่งซ่อม";
        }
    echo "</td></tr><tr><td> สำนักพิมพ์ : </td><td>".$data["Publish"]."</td></tr>";
    echo "<tr><td> ราคาซื้อ : </td><td>".$data["UnitPrice"]."</td></tr>";
    echo "<tr><td> ราคาเช่า : </td><td>".$data["UnitRent"]."</td></tr>";
    echo "<tr><td> รูปภาพ : </td><td>".$image."</td></tr>";
    echo "<tr><td>จำนวนวันที่ยืมได้ : </td><td>".$data["DayAmount"]."</td></tr>";
    echo "<tr><td> วันที่จัดเก็บหนังสือ :
    </td><td>".$data["BookDate"]."</td></tr></table>";
?>
    <br>
    <div align = "center"> <A HREF="listofbook.php">กลับหน้าหลัก</A></div><BR>
</BODY>
</HTML>