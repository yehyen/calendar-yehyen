<h4>反轉陣列</h4>
<hr>
<?php

$num = [2, 4, 6, 1, 8, 11, 99];

$arr = [];
for($i=count($num)-1; $i>=0; $i--){
    $arr = $num[$i];
    echo $arr . "&nbsp";
}
 
?>