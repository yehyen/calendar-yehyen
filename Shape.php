<!-- <style>
*{
    font-family:"Courier New";
    line-height:12px;
}

</style> -->



<?php

$num = 5;
echo "直角三角形 <br>";
for($i=1; $i<=$num; $i++){
    for($star=1; $star<=$i; $star++){
        echo '*';
    }
    for($space=$num-$i;$space>0; $space--){
        echo ' ';
    }
    echo "<br>";
}

echo "<hr>";

echo "倒直角三角形 <br>";
for($i=1; $i<=$num; $i++){
    for($star=0; $star<=$num-$i; $star++){
        echo '*';
    }
    for($space=$num-$i;$space>0; $space--){
        echo ' ';
    }
    echo "<br>";
}

echo "<hr>";

echo "正三角形 <br>";
for($i=0; $i<=$num; $i++){
    for($space=1; $space<=$num-$i+1; $space++){
        echo "&nbsp"." ";
    }
    for($star=1; $star<=2*$i-1; $star++){
        echo "*";
        
    }    
    echo "<br>";
}

echo "<hr>";

echo "菱形 <br>";
for($i=0; $i<=$num; $i++){
    for($space=1; $space<=$num-$i+1; $space++){
        echo "&nbsp;&nbsp";
    }
    for($star=1; $star<=2*$i-1; $star++){
        echo "*"; 
    }    
    echo "<br>";
}

for($i=4; $i>0; $i--){
    for($space=1; $space<=$num-$i+1; $space++){
        echo "&nbsp" ." ";
    }
    for($star=1; $star<=2*$i-1; $star++){
        echo "*"; 
    }    
    echo "<br>";
}

echo "<hr>";

echo "矩形 <br>";
for($i=0; $i<=7; $i++){
    for($j=0;$j<=7;$j++){
        if($i==0 || $i==7){
            echo " * ";
        }elseif($j==0 || $j==7){
            echo " * ";
        }else{
            echo "&nbsp;&nbsp" ." ";
        }
    }
    echo "<br>";
}

echo "<hr>";

echo "矩形 <br>";

$x=10;

for($i=0; $i<=$x; $i++){
    
    for($j=0;$j<=$x;$j++){
        if($i==0 || $i==$x || $i==$j){
            echo " * ";
        }elseif($j==0 || $j==$x || $j==$x-$i){
            echo " * ";
        }else{
            echo "&nbsp;&nbsp" ." ";
        } 
    }




    echo "<br>";
}






?>