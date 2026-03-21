<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>tvt_b13</title>
</head>

<body>

<form method="post">

Nhập danh sách các số nguyên (phân tách bởi khoảng trắng):
<input type="text" name="mangSo"
value="<?php echo isset($_POST['mangSo']) ? $_POST['mangSo'] : ''; ?>">

<br><br>

Chọn chức năng:
<select name="tuyChon">
<option value="max">Tìm số lớn nhất</option>
<option value="min">Tìm số nhỏ nhất</option>
<option value="squares">Tìm các số chính phương</option>
<option value="even">In ra các số chẵn</option>
<option value="odd">In ra các số lẻ</option>
<option value="sort">Sắp xếp danh sách</option>
</select>

<br><br>

<input type="submit" value="OK">

<br><br>

</form>

<?php

function timSoLonNhat($mang){
    return max($mang);
}

function timSoNhoNhat($mang){
    return min($mang);
}

function timSoChinhPhuong($mang){
    $kq=array();
    foreach($mang as $so){
        if($so>=0 && sqrt($so)==floor(sqrt($so))){
            $kq[]=$so;
        }
    }
    return $kq;
}

function timSoChan($mang){
    $kq=array();
    foreach($mang as $so){
        if($so%2==0){
            $kq[]=$so;
        }
    }
    return $kq;
}

function timSoLe($mang){
    $kq=array();
    foreach($mang as $so){
        if($so%2!=0){
            $kq[]=$so;
        }
    }
    return $kq;
}

function sapXepSo($mang){
    sort($mang);
    return $mang;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input = trim($_POST['mangSo']);

    if ($input == "") {
        echo "Vui lòng nhập danh sách số.<br>";
    }

    else {

        $mangTam = explode(' ', $input);
        $hopLe = true;

        foreach ($mangTam as $so) {
            if (!is_numeric($so)) {
                $hopLe = false;
                break;
            }
        }

        if (!$hopLe) {
            echo "Vui lòng chỉ nhập số.<br>";
        }

        else {

            $mangSoArray = array_map('intval', $mangTam);
            $tuyChon = $_POST['tuyChon'];

            switch ($tuyChon) {

                case 'max':
                    echo "Số lớn nhất: " . timSoLonNhat($mangSoArray);
                    break;

                case 'min':
                    echo "Số nhỏ nhất: " . timSoNhoNhat($mangSoArray);
                    break;

                case 'squares':
                    echo "Các số chính phương: " . implode(" ", timSoChinhPhuong($mangSoArray));
                    break;

                case 'even':
                    echo "Các số chẵn: " . implode(" ", timSoChan($mangSoArray));
                    break;

                case 'odd':
                    echo "Các số lẻ: " . implode(" ", timSoLe($mangSoArray));
                    break;

                case 'sort':
                    echo "Danh sách sắp xếp: " . implode(" ", sapXepSo($mangSoArray));
                    break;
            }
        }
    }
}
?>

</body>
</html>