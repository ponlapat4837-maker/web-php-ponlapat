<!DOCTYPE html>
<html lang='th'>
<head>
    <meta charset='UTF-8'>
    <title>Page Title</title>
</head>
<body>
    <form action="week5-receive.php" method="get">
        <label>username</label>
        <input type="text" name="userName">
        <br>

        <labal>password</labal>
        <input type="password" name="userPass">
        <br>

        <label>email</label>
        <input type="email" name="userEmail">
        <br>

        <label>อายุ</label>
        <input type="number" name="userAge">
        <br>

        <label>วันเกิด</label>
        <input type="date" name="userBirth'">
        <br>
        
        <label>เพศ</label>
        <input type="radio" name="UserGender" value="ชาย">ชาย
        <input type="radio" name="UserGender" value="หญิง">หญิง
        <br>

        <label>จังหวัด</label>
        <select name="userCity">
            <option value="ไม่ระบุ">-</option>
            <option value="กรุงเทพ">กรุงเทพ</option>
        </select>
        <br>

        <label>งานอดิเรก</label>
        <input type="checkbox" name="userHobby[]" value="อ่านหนังสือ">อ่านหนังสือ
        <input type="checkbox" name="userHobby[]" value="เล่นกีฬา">เล่นกีฬา
        <br>


        <input type="submit" value="ส่งข้อมูล">
    </form>
</body>
</html>