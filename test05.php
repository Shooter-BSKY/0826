<h2>利息試算程式</h2>
<hr>
<?php
   $money = 5000000;
   $rate  = 0.012;
   $years = 15;
   

   echo "<table border=0 width=300>";

   echo "<tr>";
   echo "<td bgcolor=#aaccff width=120>本金</td><td bgcolor=#ccffaa>". $money . "元</td> ";
   echo "</tr>";

   echo "<tr>";
   echo "<td bgcolor=#aaccff>利率</td><td bgcolor=#ccffaa>" . $rate * 100 . " %</td>";
   echo "<tr>";  
   
   echo "<tr>";
   echo "<td bgcolor=#aaccff>期數</td><td bgcolor=#ccffaa>" . $years . "年</td>";
   echo "</tr>";
   $s_amount = $money * (1 + $rate * $years);
   $c_amount = $money * (1 + $rate) ** $years;
   
   echo "<tr>";
   echo "<td bgcolor=#aaccff>單利試算結果：</td><td bgcolor=#ccffaa>" . (int)$s_amount . "元</td>";
   echo "</tr>";
   
   echo "<tr>";
   echo "<td bgcolor=#aaccff>複利試算結果：</td><td bgcolor=#ccffaa>" . (int)$c_amount . "元</td>";
   echo "</tr>";


?>