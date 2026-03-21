<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

echo "<h1>Đăng ký thành công</h1><hr>";

echo "Username: ".$username."<br>";
echo "Email: ".$email."<br>";

echo "<br><a href='BaiTap21.html'>
<button>Đăng nhập</button>
</a>";

}

?>