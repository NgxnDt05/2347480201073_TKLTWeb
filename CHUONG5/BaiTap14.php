<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tvt_b14</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        label, input, select, button {
            margin: 5px 0;
            display: block;
        }
        input[type="text"] {
            width: 50px;
            padding: 5px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <?php

function taoFormMaTran($dong, $cot, $maTran = null) {
    echo '<form method="POST">';
    echo 'Số dòng: <input type="text" name="dong" value="'.$dong.'"><br>';
    echo 'Số cột: <input type="text" name="cot" value="'.$cot.'"><br><br>';

    for ($i = 0; $i < $dong; $i++) {
        for ($j = 0; $j < $cot; $j++) {
            $giaTri = $maTran ? $maTran[$i][$j] : '';
            echo '<input type="text" name="maTran['.$i.']['.$j.']" value="'.$giaTri.'">';
        }
        echo "<br>";
    }

    echo '<br>Chọn chức năng: ';
    echo '<select name="chucNang">';
    echo '<option value="max">Tìm giá trị lớn nhất</option>';
    echo '<option value="min">Tìm giá trị nhỏ nhất</option>';
    echo '<option value="sum">Tính tổng</option>';
    echo '<option value="print">In ma trận</option>';
    echo '</select>';

    echo '<br><br><button type="submit">OK</button>';
    echo '</form>';
}

function timGiaTriLonNhat($maTran){
    $max=$maTran[0][0];
    foreach($maTran as $dong){
        foreach($dong as $gt){
            if($gt>$max){
                $max=$gt;
            }
        }
    }
    return $max;
}

function timGiaTriNhoNhat($maTran){
    $min=$maTran[0][0];
    foreach($maTran as $dong){
        foreach($dong as $gt){
            if($gt<$min){
                $min=$gt;
            }
        }
    }
    return $min;
}

function tinhTong($maTran){
    $tong=0;
    foreach($maTran as $dong){
        foreach($dong as $gt){
            $tong+=$gt;
        }
    }
    return $tong;
}

function inMaTran($maTran){
    echo "<table>";
    foreach($maTran as $dong){
        echo "<tr>";
        foreach($dong as $gt){
            echo "<td>$gt</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dong']) && isset($_POST['cot'])) {

    $dong = trim($_POST['dong']);
    $cot = trim($_POST['cot']);

    // kiểm tra rỗng
    if ($dong == "" || $cot == "") {
        echo "Vui lòng nhập số dòng và số cột.<br>";
    }

    // kiểm tra có phải số không
    elseif (!is_numeric($dong) || !is_numeric($cot)) {
        echo "Số dòng và số cột phải là số.<br>";
    }

    // kiểm tra > 0
    elseif ($dong <= 0 || $cot <= 0) {
        echo "Số dòng và số cột phải lớn hơn 0.<br>";
    }

    else {

        $dong = intval($dong);
        $cot = intval($cot);
        $maTran = isset($_POST['maTran']) ? $_POST['maTran'] : null;

        taoFormMaTran($dong, $cot, $maTran);

        if (isset($_POST['maTran']) && isset($_POST['chucNang'])) {

            $maTran = $_POST['maTran'];
            $hopLe = true;

            // kiểm tra từng phần tử có phải số
            foreach ($maTran as $hang) {
                foreach ($hang as $giaTri) {
                    if (!is_numeric($giaTri)) {
                        $hopLe = false;
                        break 2;
                    }
                }
            }

            if (!$hopLe) {
                echo "Các phần tử trong ma trận phải là số.<br>";
            }

            else {

                $chucNang = $_POST['chucNang'];

                if ($chucNang == 'max') {
                    echo 'Giá trị lớn nhất: ' . timGiaTriLonNhat($maTran) . '.<br>';
                }

                elseif ($chucNang == 'min') {
                    echo 'Giá trị nhỏ nhất: ' . timGiaTriNhoNhat($maTran) . '.<br>';
                }

                elseif ($chucNang == 'sum') {
                    echo 'Tổng: ' . tinhTong($maTran) . '.<br>';
                }

                elseif ($chucNang == 'print') {
                    echo 'Ma trận:<br>';
                    inMaTran($maTran);
                }
            }
        }
    }
}
?>
</body>
</html>
