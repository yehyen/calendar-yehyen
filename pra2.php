<h4>威力彩號碼</h4>
<hr>
<?php

$num =[];
for($i=0; $i<6; $i++){
    $num[] = rand(1,49);  
}

sort($num);
for($i=0; $i<6; $i++){
    for($j=$i+1; $j<6; $j++){
        for($target=0; $target<6; $target++){
            if($target!=$i && $target!=$j){
                $num[] = $num[$target];
            }
        break;
        }
    break;
    }
break;
}

foreach($num as $n){
    echo $n . ",";
}  

?>