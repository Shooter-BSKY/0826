<?php
    $chi = 55;
    $eng = 55;
    $mat = 55;
    $his = 55;
    $total = $chi + $eng + $mat + $his;
    $score = $total /4;

    echo "總分：". $total . "分<br>";
    echo "平均：". $score . "分<br>";
        if ($score>=90) {
    	    echo "A級優等生";	    	
        }  else if ($score>=80) {
            echo "B級,比別人優秀!"; 
        }  else if ($score>=70) {
            echo "C級,還是挺不錯的!";
        }  
           else if ($score>=60) {
            echo "D級,你怎麼這麼低級~";
        }
            else     {
            echo "E級,自古槍兵幸運E";
        }

     
?>