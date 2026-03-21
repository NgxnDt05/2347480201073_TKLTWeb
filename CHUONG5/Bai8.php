<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chọn năm sinh</title>
    <style>
        .container {
            width: 300px;
            margin: 50px auto;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        select {
            padding: 5px;
            width: 150px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h3>Chọn năm:</h3>
    
    <form>
        <select name="nam_sinh">
            <option value="">-- Chọn năm --</option>
            
            <?php
            // 1. Lấy năm hiện tại bằng hàm date()
            $nam_hien_tai = date("Y"); 

            // 2. Sử dụng vòng lặp for để chạy từ 1900 đến năm hiện tại
            for ($i = 1900; $i <= $nam_hien_tai; $i++) {
                // 3. Sử dụng thẻ <option> để hiển thị từng năm trong listbox
                echo "<option value='$i'>Năm $i</option>";
            }
            ?>
            
        </select>
    </form>
</div>

</body>
</html>