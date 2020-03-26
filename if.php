<?php

$score=70;
$level='';

echo "成積:" . $score;
echo "<br>";

if($score >= 90){
    $level = "A";
}else if($score >= 75 && $score < 90){
    $level = "B";
}else if($score >= 60 && $score < 75){
    $level = "C";
}else{
    $level = "D";
}


echo "等級:".$level;
echo "<br>";

switch($level){
    case "A": echo "非常好，請努力保持"; break;
    case "B": echo "可圈可點，但還有進步的空間"; break;
    case "C": echo "一般水平，需要更多的努力"; break;
    case "D": echo "用心不足，請加強"; break;
    default:
}

echo "<hr>";


//三元運算子
if($score>=60){
    $result = "及格";
}else{
    $result = "不及格";
}
echo $result;

echo "<br>";

$result = ($score>=60) ? "及格":"不及格";
echo $result;



?>