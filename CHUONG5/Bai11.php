<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Hiển thị danh sách màu sắc</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f0f0f0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 600px;
        }
        .color-item {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
            display: inline-block;
            margin-right: 15px;
            text-transform: capitalize; /* Viết hoa chữ cái đầu cho đẹp */
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Danh sách màu sắc</h2>
    <hr>
    
    <?php
    // Khởi tạo mảng các chuỗi tên màu
    $colors = ["black", "blue", "green", "red", "orange", "purple", "brown", "pink", "gray"];

    // Duyệt mảng và xuất ra màn hình
    foreach ($colors as $index => $color_name) {
        // Xuất thẻ span với style color lấy trực tiếp từ tên màu trong mảng
        echo "<span class='color-item' style='color: $color_name;'>$color_name</span>";
        
        // Thêm dấu phẩy giữa các màu, trừ màu cuối cùng
        if ($index < count($colors) - 1) {
            echo "<span style='color: #333;'>, </span>";
        }
    }
    ?>
</div>

</body>
</html>