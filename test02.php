<?php
    $height = 1.75;
    $weight = 89;
    echo"身高：",$height,"公尺<br>";
    echo"體重：".$weight."公斤<br>";
    $bmi =$weight/$height ** 2;
    echo "BMI：".$bmi."<br>";
    if($bmi>27){
    	echo "你跳起來都要地震了!";	    	
        } else if ($bmi>=24) {
    		echo "你維持得真好!"; 
        }  else {
         	echo "你也太瘦了吧!";
        }

    
?>