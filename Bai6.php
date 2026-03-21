<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bảng bình phương</title>
    <style>
        table { border-collapse: collapse; width: 250px; text-align: center; margin: 20px auto; }
        th, td { border: 1px solid black; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h2 style="text-align:center;">Bảng tính n<sup>2</sup></h2>

<table>
    <tr>
        <th>Số n</th>
        <th>Số n<sup>2</sup></th>
    </tr>
    <?php
    for ($n = 0; $n <= 50; $n++) {
        $binh_phuong = $n * $n;
        echo "<tr>";
        echo "<td>$n</td>";
        echo "<td>$binh_phuong</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>