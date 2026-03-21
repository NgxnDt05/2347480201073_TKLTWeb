<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dãy số 1-100</title>
</head>
<body>

<h3>Dãy số từ 1 đến 100:</h3>
<div style="line-height: 2; border: 1px solid #ccc; padding: 15px;">
    <?php
    for ($i = 1; $i <= 100; $i++) {
        // Kiểm tra nếu i là số chẵn
        if ($i % 2 == 0) {
            echo "<strong>$i</strong> ";
        } else {
            echo "$i ";
        }
    }
    ?>
</div>

</body>
</html>