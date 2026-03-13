<!DOCTYPE html>
<html>
<body>

    <form method="POST">
        Họ tên: <input type="text" name="hoten"><br><br>
        Lớp: <input type="text" name="lop"><br><br>
        Ngày sinh: <input type="date" name="ngaysinh"><br><br>
        Điểm: <input type="text" name="diem"><br><br>
        <input type="submit" value="Xuất thông tin">
    </form>

    <?php
    // Kiểm tra nếu form đã được gửi đi (có tồn tại dữ liệu POST)
    if ($_POST) {
        echo "<hr>"; // Đường gạch ngang phân cách
        echo "Họ tên: " . $_POST['hoten'] . "<br>";
        echo "Lớp: " . $_POST['lop'] . "<br>";
        echo "Ngày sinh: " . $_POST['ngaysinh'] . "<br>";
        echo "Điểm: " . $_POST['diem'];
    }
    ?>

</body>
</html>
