<?php
echo "<center>";
	for($k=1; $k<=10; $k++){
        for($m=10; $m>=$k; $m--){
            echo "&nbsp";
        }
	for($l=1; $l<=$k; $l++){
		echo " *";
	}
    for($m=10; $m>=$k; $m--){
        echo "&nbsp";
    }
	echo "<br>";
	}
    echo "</center>";
    echo "<center>";
    for($d=1; $d<=11; $d++){
        echo "&nbsp* <br>";
    }
    for($a=1; $a<=10; $a++){
        for($b=1; $b<=$a; $b++){
            echo "&nbsp";
        }
	for($c=10; $c>=$a; $c--){
		echo " *";
	}
    for($b=1; $b<=$a; $b++){
        echo "&nbsp";
    }
	echo "<br>";
	}
    echo "</center>";
?>