<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ใบสมัครงาน</title>
</head>
<body>
  <h2>ใบสมัครงาน</h2>
  <form action="registeration-accept.php" method="POST">
 
    ชื่อ-นามสกุล: <input type="text" name="fullname"><br><br>
 
    อีเมล: <input type="email" name="email"><br><br>
 
    เบอร์โทรศัพท์: <input type="tel" name="phone"><br><br>
 
    รหัสผ่าน: <input type="password" name="password"><br><br>
 
    เงินเดือนที่คาดหวัง: <input type="number" name="salary"><br><br>
 
    วันที่เริ่มงานได้: <input type="date" name="start_date"><br><br>
 
    เพศ:
    <input type="radio" name="gender" value="ชาย"> ชาย
    <input type="radio" name="gender" value="หญิง"> หญิง
    <input type="radio" name="gender" value="อื่น ๆ"> อื่น ๆ<br><br>
 
    ตำแหน่งที่สนใจ:
    <select name="position">
      <option value="โปรแกรมเมอร์">โปรแกรมเมอร์</option>
      <option value="กราฟิกดีไซน์">กราฟิกดีไซน์</option>
      <option value="การตลาด">การตลาด</option>
    </select><br><br>
 
    ทักษะความสามารถ:
    <input type="checkbox" name="skills[]" value="PHP"> PHP
    <input type="checkbox" name="skills[]" value="HTML"> HTML
    <input type="checkbox" name="skills[]" value="CSS"> CSS
    <input type="checkbox" name="skills[]" value="SQL"> SQL<br><br>
 
    แนะนำตัวเพิ่มเติม:<br>
    <textarea name="bio"></textarea><br><br>
 
    <input type="submit" value="ส่งใบสมัคร">
    <input type="reset" value="ล้างข้อมูล">
 
  </form>
</body>
</html>