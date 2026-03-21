<?php
session_start();

if(!isset($_SESSION["username"]))
{
header("Location: BaiTap21.html");
exit();
}

$username=$_SESSION["username"];
$email=$_SESSION["email"];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Trang chính</title>
</head>

<body>

<h1 align="center">TRANG CHÍNH</h1>
<hr>

<p>
Người dùng đã đăng nhập với tên
<strong><?php echo $username; ?></strong>
<br>

Email:
<strong><?php echo $email; ?></strong>

</p>

<a href="BaiTap21c.php">
<button>Đăng xuất</button>
</a>

</body>
</html>