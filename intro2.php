<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>นำเสนอตัวเอง</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
            padding: 50px;
            text-align: center;
        }
        
        .profile-image {
            width: 150px;
            height: 150px;
            margin: 0 auto 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 60px;
            font-weight: bold;
        }
        
        h1 {
            color: #333;
            font-size: 36px;
            margin-bottom: 10px;
            font-family: 'TH Sarabun New', sans-serif;
        }
        
        .title {
            color: #667eea;
            font-size: 18px;
            margin-bottom: 30px;
            font-weight: 500;
        }
        
        .bio {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 30px;
            text-align: justify;
        }
        
        .skills {
            margin: 30px 0;
            text-align: left;
        }
        
        .skills h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 15px;
            text-align: center;
        }
        
        .skill-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        
        .skill-item {
            background: #f5f5f5;
            padding: 12px 20px;
            border-radius: 8px;
            color: #333;
            border-left: 4px solid #667eea;
        }
        
        .contact {
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid #e0e0e0;
        }
        
        .contact p {
            color: #666;
            margin: 8px 0;
            font-size: 14px;
        }
        
        .contact strong {
            color: #333;
        }
        
        footer {
            margin-top: 40px;
            color: #999;
            font-size: 12px;
            border-top: 1px solid #e0e0e0;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $name = "พลพัต บุญมาก";
            $title = "นักเรียนนักศึกษา";
            $bio = "ยินดีต้อนรับสู่หน้านำเสนอตัวเอง เป็นบุคคลที่มีความสนใจในด้านเทคโนโลยีและการพัฒนาเว็บไซต์ มีความกระตือรือร้นในการเรียนรู้สิ่งใหม่ๆ และมีจิตสำนักในการทำงาน";
            $skills = ["PHP", "HTML & CSS", "JavaScript", "MySQL", "Web Design"];
            $email = "ponlapat@example.com";
            $phone = "0XX-XXX-XXXX";
        ?>
        
        <div class="profile-image">พ</div>
        
        <h1><?php echo $name; ?></h1>
        <p class="title"><?php echo $title; ?></p>
        
        <p class="bio"><?php echo $bio; ?></p>
        
        <div class="skills">
            <h2>ทักษะและความสามารถ</h2>
            <div class="skill-list">
                <?php foreach($skills as $skill): ?>
                    <div class="skill-item">✓ <?php echo $skill; ?></div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="contact">
            <h2 style="text-align: center; color: #333; margin-bottom: 15px;">ติดต่อ</h2>
            <p><strong>อีเมล:</strong> <?php echo $email; ?></p>
            <p><strong>โทรศัพท์:</strong> <?php echo $phone; ?></p>
        </div>
        
        <footer>
            <p>© <?php echo date("Y"); ?> <?php echo $name; ?> - สิ่งจำลองนำเสนอด้วย PHP</p>
        </footer>
    </div>
</body>
</html>