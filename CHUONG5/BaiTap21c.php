<?php
session_start();

session_unset();
session_destroy();

header("Location: BaiTap21.html");
exit();
?>