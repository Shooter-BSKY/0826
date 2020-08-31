<h1>公益彩卷</h1>
<hr>
<?php
   for ($i=0; $i<5; $i++) { 
      echo rand(1, 49);
      if ($i<4) {
     	 echo ", ";
     }
   }
   echo "<br>特別號:". rand(1,49);
?>
<hr>
中獎請捐錢...