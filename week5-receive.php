<<<<<<< HEAD
<<<<<<< HEAD
<?php
    $name = $_GET['userName'];
    $password = $_GET['userPass'];
    $email = $_GET['userEmail'];
    $age = $_GET['userAge'];
    $birth = $_GET['userBirth'];
    $gender = $_GET['UserGender'];
    $city = $_GET['userCity'];
    $hobby = $_GET['userHobby'];
    $message = $_GET['userMsg'];

    echo "สวัสดีคุณ $name<br>";
    echo "รหัสผ่านของคุณคือ: $password<br>";
    echo "อีเมลของคุณคือ: $email<br>";
    echo "อายุของคุณคือ: $age<br>";
    echo "วันเกิดของคุณคือ: $birth<br>";
    echo "เพศของคุณคือ: $gender<br>";
    echo "จังหวัดของคุณคือ: $city<br>";
    echo "งานอดิเรกของคุณคือ: " . implode(", ", $hobby) . "<br>";
    echo "ความคิดเห็นของคุณคือ: $message<br>";
=======
<?php
    $name = $_GET['userName'];
    $password = $_GET['userPass'];
    $email = $_GET['userEmail'];
    $age = $_GET['userAge'];
    $birth = $_GET['userBirth'];
    $gender = $_GET['UserGender'];
    $city = $_GET['userCity'];
    $hobby = $_GET['userHobby'];

    echo "สวัสดีคุณ $name<br>";
    echo "รหัสผ่านของคุณคือ: $password<br>";
    echo "อีเมลของคุณคือ: $email<br>";
    echo "อายุของคุณคือ: $age<br>";
    echo "วันเกิดของคุณคือ: $userbirth<br>";
    echo "เพศของคุณคือ: $UserGender<br>";
    echo "จังหวัดของคุณคือ: $city<br>";
    echo "งานอดิเรกของคุณคือ: $hobby<br>";
>>>>>>> e9fcda92461bacb034d3a7c32c8e8c3c23f2c673
=======
<?php
    $name = $_GET['userName'];
    $password = $_GET['userPass'];
    $email = $_GET['userEmail'];
    $age = $_GET['userAge'];
    $birth = $_GET['userBirth'];
    $gender = $_GET['UserGender'];
    $city = $_GET['userCity'];
    $hobby = $_GET['userHobby'];

    echo "สวัสดีคุณ $name<br>";
    echo "รหัสผ่านของคุณคือ: $password<br>";
    echo "อีเมลของคุณคือ: $email<br>";
    echo "อายุของคุณคือ: $age<br>";
    echo "วันเกิดของคุณคือ: $userbirth<br>";
    echo "เพศของคุณคือ: $UserGender<br>";
    echo "จังหวัดของคุณคือ: $city<br>";
    echo "งานอดิเรกของคุณคือ: $hobby<br>";
>>>>>>> e9fcda92461bacb034d3a7c32c8e8c3c23f2c673
?>