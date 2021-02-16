<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Word</title>
</head>
<body bgcolor= #CCFFFF text=red>
    <form action="hw2-3cal.php" method="post">
        <center><h1><font color =blue>โปรแกรม ตรวจ เลขท้าย 2 ตัว</font></h1><br>
        <h2>รางวัลเมื่อถูกเลขท้าย 2 ตัว(ต้นทุนซื้อ X60 เท่า)</h2><br>
        <h2>เช่น ถ้าซื้อ 10 บาทถูกรางวัล รับเงิน 600 บาท</h2><br>
        เลขเสี่ยงโชค[0-99]<input type="number" name="lot" placeholder="เลขเสี่ยงโชค" min="0" max="99" required><br><br>
        <h1>*ซื้อได้ตั้งแต่ 10 - 500 บาทเท่านั้น</h1><br>
        <h1>จำนวนเงินที่คุณต้องการซื้อ [10-500 บาท]</h1><input type="number" name="cash" placeholder="จำนวนเงิน" min="10" max="500" required><br><br>
        <input type="submit" name = "submit" value="ออกรางวัล"><br>
    </form>
</body>
</html>