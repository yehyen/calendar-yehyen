<?php


// echo為顯示文字訊息，直接印出
$a=1;
echo $a;
echo "<br>";

$a=2.1;
echo $a;
echo "<br>";    //強制斷行

print($a);
define("PI", 3.14);
echo PI;
echo PI*2*10;



//字串運算子
$a="A";
$b=1;
echo $a;
echo "<br>";

echo $b;
$c=$a . $b;
$d=$a + $b;
echo "<hr>";

echo $c;
echo "<hr>";
echo $d;

//三元運算
$a=5;

echo ($a>0)?"很貴":"免費";

echo "<hr>";

if($a>0){
    echo "很貴";
}else{
    echo "免費";
}







?>