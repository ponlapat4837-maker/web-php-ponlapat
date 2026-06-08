<?php
$name = "พลพัต บุญมาก";
$level = "ปวส 1";
$department = "แผนกวิชาเทคโนโลยีสารสนเทศ";
$student_id = "69319010012";
$age = 18;
?>
<!DOCTYPE html>
<html lang="th">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ข้อมูลนักศึกษา - พลพัต</title>
	<style>
		body{font-family:Arial,Helvetica,sans-serif;background:#f7f7f7;color:#222;padding:24px}
		.card{background:#fff;max-width:640px;margin:36px auto;padding:20px;border-radius:8px;box-shadow:0 2px 10px rgba(0,0,0,0.08)}
		h1{margin:0 0 12px 0}
		dl{display:grid;grid-template-columns:160px 1fr;gap:8px 16px}
		dt{font-weight:700}
		dd{margin:0}
	</style>
</head>
<body>
	<div class="card">
		<h1>ข้อมูลนักศึกษา</h1>
		<dl>
			<dt>ชื่อ</dt><dd><?php echo $name; ?></dd>
			<dt>ระดับชั้น</dt><dd><?php echo $level; ?></dd>
			<dt>แผนก</dt><dd><?php echo $department; ?></dd>
			<dt>รหัสนักศึกษา</dt><dd><?php echo $student_id; ?></dd>
			<dt>อายุ</dt><dd><?php echo $age; ?></dd>
		</dl>
	</div>
</body>
</html>

