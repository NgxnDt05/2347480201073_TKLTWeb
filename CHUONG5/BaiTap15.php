<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>tvt_b15</title>
</head>

<body>

<form method="POST">
<label>Nhập chuỗi:</label>
<input type="text" name="s"
value="<?php echo isset($_POST['s']) ? $_POST['s'] : ''; ?>">
<br><br>

<label>Nhập ký tự:</label>
<input type="text" name="ch" maxlength="1"
value="<?php echo isset($_POST['ch']) ? $_POST['ch'] : ''; ?>">
<br><br>

<button type="submit">Đếm số lần xuất hiện</button>
</form>

<?php

function demSoLanXuatHien($s,$ch){
    return substr_count($s,$ch);
}

if ($_SERVER['REQUEST_METHOD']=='POST'){

    $s=trim($_POST['s']);
    $ch=trim($_POST['ch']);

    // kiểm tra rỗng
    if($s=="" || $ch==""){
        echo "Vui lòng nhập đầy đủ dữ liệu.";
    }

    // kiểm tra chỉ 1 ký tự
    elseif(strlen($ch)!=1){
        echo "Ký tự chỉ được nhập 1 ký tự.";
    }

    else{
        $kq=demSoLanXuatHien($s,$ch);
        echo "Số lần xuất hiện của ký tự '$ch' trong chuỗi '$s' là: $kq";
    }

}

?>

</body>
</html>