<?php

if(isset($_COOKIE['thoiGianTruyCap'])) {
    $lanTruoc = $_COOKIE['thoiGianTruyCap'];
} else {
    $lanTruoc = null;
}

setcookie('thoiGianTruyCap', time(), time()+600);

?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>tvt_19</title>
</head>

<body>

<?php

echo "Xin chào bạn,<br>";

if($lanTruoc){
    echo "Thời gian truy cập gần đây nhất là: "
    . date('d/m/Y H:i:s',$lanTruoc);
}

?>

</body>
</html>