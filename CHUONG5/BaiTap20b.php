<?php

if(isset($_COOKIE['login']))
{
echo "Xin chào ".$_COOKIE['login'];
}
else
{
echo "Bạn đã bị đăng xuất (hết 3 phút)";
}

?>