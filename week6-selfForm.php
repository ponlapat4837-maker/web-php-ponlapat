<?php
    $status = false;
    $name = '';
    $error = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $POST['name'] ?? '';
        if (empty($name)){
            $error["err_name"] = "กรุณากรอกชื่อ";
        }else{
            $status = true;
        }
    }
?>







<!DOCTYPE html>
<html lang='th'>
<head>
    <meta charset='UTF-8'>
    <title>Page Title</title>
</head>
<body>
    <?php if($status):?>
        <h1><?php echo $name ?>
    <from action="" method="post">
        <label>ชื่อ</label>
        <input type="text" name="name">
        <br>
        <input type="submit" value="ส่งข้อมูล">
    </from>
</body>