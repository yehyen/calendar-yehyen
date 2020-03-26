<?php

$str="today is a good day";
$find="a";

$status=false;
$position = 0;

while($status == false){
    $tmp=mb_substr($str, $position, 1, "utf8");     //mb_substr() 尋找字元

    if($tmp == $find){
        echo "字元" .$find ."在" .$str."的第".$position."個位置";
        $status = true;
    }
    $position++;
}


?>