<?php
    if (isset($_COOKIE['customer_name']) && isset($_COOKIE['phone_number'])) {
        $customer_name = htmlspecialchars($_COOKIE['customer_name']);
        $phone_number = htmlspecialchars($_COOKIE['phone_number']);
    } else {
        header('Location: BaiTap22.html');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tvt_b22</title>
</head>
<body>
    <h1 style='font-family: Arial; color:red; padding: 3px; text-align: center;'>THÔNG TIN KHÁCH HÀNG</h1>
    <p>Tên khách hàng: <strong><?php echo $customer_name; ?></strong></p>
    <p>Số điện thoại: <strong><?php echo $phone_number; ?></strong></p>
    <a href="BaiTap22.html"><button style='width: 20%; padding: 10px; background-color: #007bff; border: none; border-radius: 5px; color: #fff; font-weight: bold; cursor: pointer;'>Đăng xuất</button></a>
</body>
</html>
