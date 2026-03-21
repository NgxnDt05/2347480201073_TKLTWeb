<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thao tác trên mảng số nguyên</title>
    <style>
        .container {
            width: 500px;
            margin: 30px auto;
            border: 2px solid #333;
            border-radius: 15px;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        h2 { text-align: center; color: #2c3e50; }
        .row { margin-bottom: 10px; }
        label { width: 150px; display: inline-block; font-weight: bold; }
        input[type="text"] { width: 300px; padding: 5px; }
        .result-box {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 20px;
            line-height: 1.8;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .btn:hover { background-color: #219150; }
    </style>
</head>
<body>

<?php
$input = "";
$mang_so = [];
$max = "";
$min = "";
$tong = "";
$mang_sap_xep = "";

if (isset($_POST['thuc_hien'])) {
    $input = $_POST['day_so'];
    
    // 1. Chuyển chuỗi nhập vào thành mảng (cắt bởi dấu phẩy)
    // Dùng array_filter để loại bỏ các phần tử rỗng nếu người dùng nhập dư dấu phẩy
    $mang_so = array_map('trim', explode(',', $input));
    $mang_so = array_filter($mang_so, 'is_numeric'); // Chỉ giữ lại các giá trị là số

    if (!empty($mang_so)) {
        // 2. Tìm Max, Min
        $max = max($mang_so);
        $min = min($mang_so);
        
        // 3. Tính tổng
        $tong = array_sum($mang_so);
        
        // 4. Sắp xếp mảng tăng dần
        $tam_mang = $mang_so;
        sort($tam_mang);
        $mang_tang = implode(", ", $tam_mang);

        $tam_mang = $mang_so;
        rsort($tam_mang);
        $mang_giam = implode(", ", $tam_mang);
    } else {
        $input = "Vui lòng nhập các số cách nhau bằng dấu phẩy!";
    }
}
?>

<div class="container">
    <h2>THAO TÁC TRÊN MẢNG</h2>
    <form method="post">
        <div class="row">
            <label>Nhập dãy số:</label>
            <input type="text" name="day_so" value="<?php echo $input; ?>" placeholder="Ví dụ: 5, 10, -2, 8, 3">
        </div>
        <p style="font-size: 12px; color: #666;">(Các số cách nhau bởi dấu phẩy ",")</p>
        
        <input type="submit" name="thuc_hien" value="THỰC HIỆN" class="btn">

        <?php if (!empty($mang_so)): ?>
        <div class="result-box">
            <strong>Kết quả:</strong><br>
            - Số lớn nhất: <?php echo $max; ?><br>
            - Số nhỏ nhất: <?php echo $min; ?><br>
            - Tổng mảng: <?php echo $tong; ?><br>
            - Mảng tăng dần: <?php echo $mang_tang; ?><br>
            - Mảng giảm dần: <?php echo $mang_giam; ?>
        </div>
        <?php endif; ?>
    </form>
</div>

</body>
</html>