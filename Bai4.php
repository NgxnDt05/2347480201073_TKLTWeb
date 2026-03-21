<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính toán số học</title>
    <style>
        .container {
            width: 400px;
            margin: 50px auto;
            border: 2px solid #000;
            border-radius: 20px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        h2 { text-align: center; margin-top: 0; }
        .row { margin-bottom: 10px; }
        label { width: 100px; display: inline-block; }
        input[type="text"] { width: 150px; }
        .buttons { text-align: center; margin-top: 20px; }
        input[type="submit"] {
            padding: 5px 15px;
            margin: 2px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
// Khởi tạo các biến ban đầu
$so1 = "";
$so2 = "";
$ketqua = "";

if (isset($_POST['tinh'])) {
    $so1 = $_POST['so1'];
    $so2 = $_POST['so2'];
    $phep_tinh = $_POST['tinh'];

    if (is_numeric($so1) && is_numeric($so2)) {
        switch ($phep_tinh) {
            case "Cộng":
                $ketqua = $so1 + $so2;
                break;
            case "Trừ":
                $ketqua = $so1 - $so2;
                break;
            case "Nhân":
                $ketqua = $so1 * $so2;
                break;
            case "Chia":
                if ($so2 != 0) {
                    $ketqua = $so1 / $so2;
                } else {
                    $ketqua = "Lỗi chia cho 0";
                }
                break;
            case "Mod":
                if ($so2 != 0) {
                    $ketqua = $so1 % $so2;
                } else {
                    $ketqua = "Lỗi chia cho 0";
                }
                break;
        }
    } else {
        $ketqua = "Vui lòng nhập số!";
    }
}
?>

<div class="container">
    <h2>TÍNH TOÁN SỐ HỌC</h2>
    <hr>
    <form method="post" action="">
        <div class="row">
            <label>Số thứ 1:</label>
            <input type="text" name="so1" value="<?php echo $so1; ?>" required>
        </div>
        <div class="row">
            <label>Số thứ 2:</label>
            <input type="text" name="so2" value="<?php echo $so2; ?>" required>
        </div>
        <div class="row">
            <label>Kết quả:</label>
            <input type="text" name="ketqua" value="<?php echo $ketqua; ?>" readonly style="background-color: #eee;">
        </div>
        
        <div class="buttons">
            <input type="submit" name="tinh" value="Cộng">
            <input type="submit" name="tinh" value="Trừ">
            <input type="submit" name="tinh" value="Nhân">
            <input type="submit" name="tinh" value="Chia">
            <input type="submit" name="tinh" value="Mod">
        </div>
    </form>
</div>

</body>
</html>