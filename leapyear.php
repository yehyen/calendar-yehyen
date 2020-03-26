<?php

$leapyear=2400;

if(($leapyear%4==0 && $leapyear%100!=0) || $leapyear%400==0){
    $result = "閏年";
}else{
    $result = "平年";
}
echo $result;

?>