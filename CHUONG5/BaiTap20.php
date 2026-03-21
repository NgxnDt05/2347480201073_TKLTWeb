<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Đăng nhập thành viên</title>

<style>

body{
font-family:Arial;
background:#f2f2f2;
}

.box{
width:350px;
margin:80px auto;
border:1px solid black;
background:white;
}

.title{
background:#333;
color:white;
text-align:center;
padding:10px;
}

.form{
padding:20px;
}

input{
width:100%;
padding:8px;
margin-bottom:10px;
}

button{
width:100%;
padding:10px;
margin-top:5px;
background:#333;
color:white;
border:none;
}

.showpass{
margin-bottom:10px;
}

</style>

<script>

function showPassword()
{
var x=document.getElementById("password");

if(x.type==="password")
x.type="text";
else
x.type="password";

}

</script>

</head>

<body>

<div class="box">

<div class="title">Đăng nhập thành viên</div>

<div class="form">

<form method="post">

Email name
<input type="text" name="email" required>

Password
<input type="password" name="password" id="password" required>

<div class="showpass">
<input type="checkbox" onclick="showPassword()"> Hiển thị mật khẩu
</div>

Mã số
<input type="text" name="maso" required>

<button type="submit" name="login">Đăng nhập</button>
<button type="submit" name="register">Đăng ký</button>

</form>

</div>

</div>

<?php

$file="users.ini";

if(isset($_POST['register']))
{

$email=$_POST['email'];
$password=$_POST['password'];
$maso=$_POST['maso'];

$data="\n[user]\nemail=$email\npassword=$password\nmaso=$maso\n";

file_put_contents($file,$data,FILE_APPEND);

echo "Đăng ký thành công";

}

if(isset($_POST['login']))
{

$email=$_POST['email'];
$password=$_POST['password'];
$maso=$_POST['maso'];

$data=parse_ini_file($file);

if($email==$data['email'] && $password==$data['password'] && $maso==$data['maso'])
{

setcookie("login",$email,time()+180);

echo "Đăng nhập thành công";

}
else
{

echo "Sai thông tin đăng nhập";

}

}

?>

</body>
</html>