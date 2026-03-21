<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bảng cửu chương</title>
    <style>
        .container {
            width: 90%;
            margin: 20px auto;
            border: 2px solid #333;
            padding: 10px;
            font-family: Arial, sans-serif;
        }
        h2 {
            text-align: center;
            background-color: #007bff;
            color: white;
            padding: 10px;
            margin: 0 0 20px 0;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 10px;
        }
        .cuu-chuong {
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #f9f9f9;
            text-align: center;
            font-size: 14px;
            line-height: 1.6;
        }
        .title-cc {
            font-weight: bold;
            color: #d32f2f;
            border-bottom: 1px solid #ddd;
            margin-bottom: 5px;
            display: block;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>BẢNG CỬU CHƯƠNG</h2>
    
    <div class="grid-container">
        <?php
        // Vòng lặp ngoài: Chạy từ bảng 2 đến bảng 10
        for ($i = 1; $i <= 10; $i++) {
            echo "<div class='cuu-chuong'>";
            echo "<span class='title-cc'>Bảng nhân $i</span>";
            
            // Vòng lặp trong: Chạy từ 1 đến 10 cho mỗi bảng
            for ($j = 1; $j <= 10; $j++) {
                $kq = $i * $j;
                echo "$i x $j = $kq <br>";
            }
            
            echo "</div>";
        }
        ?>
    </div>
</div>

</body>
</html>