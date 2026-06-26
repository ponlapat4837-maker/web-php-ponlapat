<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ผลการสมัครงาน</title>
</head>
<body>
  <h2>ข้อมูลที่ได้รับ</h2>
  <?php
    echo "ชื่อผู้สมัคร: " . $_POST['fullname'] . "<br>";
    echo "อีเมล: " . $_POST['email'] . "<br>";
    echo "เบอร์โทรศัพท์: " . $_POST['phone'] . "<br>";
    echo "รหัสผ่าน: " . $_POST['password'] . "<br>";
    echo "เงินเดือนที่คาดหวัง: " . $_POST['salary'] . "<br>";
    echo "วันที่เริ่มงานได้: " . $_POST['start_date'] . "<br>";
    echo "เพศ: " . $_POST['gender'] . "<br>";
    echo "ตำแหน่งที่สนใจ: " . $_POST['position'] . "<br>";
    echo "ทักษะความสามารถ: " . implode(', ', $_POST['skills']) . "<br>";
    echo "แนะนำตัวเพิ่มเติม: " . $_POST['bio'] . "<br>";
  ?>
</body>
</html>