<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính USCLN và BSCNN</title>
    <style>
        .box {
            width: 450px;
            margin: 50px auto;
            border: 2px solid #333;
            border-radius: 25px;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        h2 { text-align: center; margin-bottom: 5px; }
        hr { width: 90%; margin-bottom: 20px; }
        .row { margin-bottom: 15px; }
        label { width: 100px; display: inline-block; font-weight: bold; }
        input[type="text"] { width: 150px; padding: 3px; }
        .buttons { text-align: center; margin-top: 20px; }
        input[type="submit"] {
            padding: 8px 25px;
            margin: 0 10px;
            border-radius: 8px;
            border: 1px solid #000;
            background-color: #e0e0e0;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
// Hàm tìm USCLN (Sử dụng thuật toán Euclid)
function tim_uscln($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

// Hàm tìm BSCNN
function tim_bscnn($a, $b) {
    if ($a == 0 || $b == 0) return 0;
    return abs($a * $b) / tim_uscln($a, $b);
}

// Khởi tạo biến
$n1 = isset($_POST['n1']) ? $_POST['n1'] : "";
$n2 = isset($_POST['n2']) ? $_POST['n2'] : "";
$ketqua = "";

if (isset($_POST['tinh'])) {
    if (is_numeric($n1) && is_numeric($n2)) {
        $a = (int)$n1;
        $b = (int)$n2;
        
        if ($_POST['tinh'] == "USCLN") {
            $ketqua = tim_uscln($a, $b);
        } else if ($_POST['tinh'] == "BSCNN") {
            $ketqua = tim_bscnn($a, $b);
        }
    } else {
        $ketqua = "Nhập số nguyên!";
    }
}
?>

<div class="box">
    <h2>TÍNH USCLN VÀ BSCNN</h2>
    <hr>
    <form method="post">
        <div class="row">
            <label>Số thứ 1:</label>
            <input type="text" name="n1" value="<?php echo $n1; ?>">
        </div>
        <div class="row">
            <label>Số thứ 2:</label>
            <input type="text" name="n2" value="<?php echo $n2; ?>">
        </div>
        <div class="row">
            <label>Kết quả:</label>
            <input type="text" name="ketqua" value="<?php echo $ketqua; ?>" readonly style="background-color: #f0f0f0;">
        </div>
        <div class="buttons">
            <input type="submit" name="tinh" value="USCLN">
            <input type="submit" name="tinh" value="BSCNN">
        </div>
    </form>
</div>

</body>
</html>