<?php
  $x = rand( 0, 100);
  $y = rand( 0, 100);
  $cong = $x + $y;
  $tru = $x - $y;
  $nhan = $x * $y;
  $chia = $x / $y;

  echo "<h2>Kết quả các phép tính cơ bản:</h2>";
  echo "Số x = $x<br> Số y = $y <br><br>";

  echo "Tổng của <b>$x + $y = $cong</b> <br>";
  echo "Hiệu của <b>$x - $y = $tru</b> <br>";
  echo "Tích của <b>$x * $y = $nhan</b> <br>";
  echo "Thương của <b>$x : $y = $chia</b> <br>";
?>