<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $customer_name = $_POST['customer_name'];
        $phone_number = $_POST['phone_number'];

        setcookie('customer_name', $customer_name, time() + 600, "/");
        setcookie('phone_number', $phone_number, time() + 600, "/");

        header('Location: BaiTap22a.php');
        exit();
    }
?>
