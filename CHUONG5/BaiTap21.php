<?php
session_start();

$valid_user="user1";
$valid_email="user1@gmail.com";
$valid_password="abcd1234";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

if($username==$valid_user && $email==$valid_email && $password==$valid_password)
{

$_SESSION["username"]=$username;
$_SESSION["email"]=$email;

echo "<h1>Trang xử lý đăng nhập</h1><hr>";
echo "Đăng nhập thành công<br><br>";

echo "<a href='BaiTap21b.php'>
<button>Trang chính</button>
</a>";

}
else
{
echo "<h1>Trang xử lý đăng nhập</h1><hr>";
echo "Thông tin không hợp lệ<br><br>";

echo "<a href='BaiTap21.html'>
<button>Thử lại</button>
</a>";
}

}
?>