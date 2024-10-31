<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โรงเรียนอนุบาลกุลจินต์</title>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #9DCAEB;
            color: #333;
            min-height: 100vh;
            padding-bottom: 60px;
            position: relative;
        }

        .header {
            background-color: #FB6F92;
            color: white;
            padding: 20px;
            font-size: 24px;
            font-weight: 600;
            box-shadow: 0 4px 19px rgba(0, 0, 0, 0.1);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header .title {
            display: flex;
            align-items: center;
        }

        .logo {
            width: 80px; /* ขนาดของโลโก้ */
            height: auto;
            margin-right: 10px; /* เว้นระยะระหว่างโลโก้และชื่อโรงเรียน */
        }

        .nav {
            display: flex;
            justify-content: flex-end;
            gap: 15px; /* เว้นระยะห่างระหว่างปุ่ม */
        }

        .nav a {
            color: white;
            background-color: #FF9BB4; /* พื้นหลังของปุ่ม */
            padding: 10px 20px; /* เพิ่มระยะห่างภายในปุ่ม */
            text-decoration: none;
            font-size: 18px;
            border-radius: 25px; /* ทำให้ปุ่มโค้งมน */
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* เพิ่มเงาให้ปุ่ม */
        }

        .nav a:hover {
            background-color: #FFBCCD; /* เปลี่ยนสีเมื่อ hover */
            transform: translateY(-2px); /* ยกปุ่มขึ้นเล็กน้อยเมื่อ hover */
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2); /* เพิ่มเงาเมื่อ hover */
        }

        .content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1400px;
            margin: 40px auto;
            padding: 100px;
            text-align: center;
        }

        .category {
            position: relative;
            color: white;
            font-size: 24px;
            font-weight: 600;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            display: block;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #f0f0f0; /* เพิ่มพื้นหลังสีเทาอ่อน */
        }

        .category img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            filter: brightness(70%);
            transition: filter 0.3s ease;
        }

        .category:hover img {
            filter: brightness(50%);
        }


        .category div {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .footer {
            background-color: #FB6F92;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 18px;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .header {
                font-size: 24px;
                padding: 15px;
            }

            .nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .nav a {
                margin: 5px;
                font-size: 16px;
            }

            .category {
                padding: 30px;
                font-size: 20px;
                height: 150px; /* ปรับความสูงให้เหมาะสมกับหน้าจอมือถือ */
            }

            .footer {
                position: relative;
                padding: 10px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="title">
            <img src="logo.png" alt="Logo" class="logo">
            โรงเรียนอนุบาลกุลจินต์
        </div>
        <div class="nav">
            <a href="/P2/HOME/home.php">เพิ่มข่าวสารใหม่</a>
            <a href="/P2/CRUD/home.php">จัดการผู้ใช้งาน</a>
            <a href="/P2/logout.php">ออกจากระบบ</a>
        </div>
    </div>

    <div class="content">
        <a href="/P2/HOME/manage/academic.php" class="category">
            <img src="https://www.kunlajin-hy.com/V3/event_pic/56-09-19/064.jpg" alt="งานวิชาการ">
            <div>งานวิชาการ</div>
        </a>

        <a href="/P2/HOME/manage/train.php" class="category">
            <img src="https://www.kunlajin-hy.com/V3/event_pic/61_09_13-15/022.jpg" alt="อบรม/สัมมนา">
            <div>อบรม/สัมมนา</div>
        </a>

        <a href="/P2/HOME/manage/activity.php" class="category">
            <img src="https://www.kunlajin-hy.com/V3/event_pic/58-01-29/049.jpg" alt="กิจกรรม">
            <div>กิจกรรม</div>
        </a>
    </div>

    <div class="footer">
        &copy; 1 ถนนรณภูมิ ตำบลหาดใหญ่ อำเภอหาดใหญ่ จังหวัดสงขลา 90110. Tel. : 074-257884, Fax. : 074-258107, E-mail : kunlajin@gmail.com
    </div>
</body>
</html>
