<?php
$conn = mysqli_connect("127.0.0.1","root","","quanlybanhang");

if (!$conn) 
{
    die("Ket noi that bai !".mysqli_connect_error());
} else echo "Ket noi thanh cong !";
?>