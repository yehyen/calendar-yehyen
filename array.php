<?php

$a=[1, 2, 3, 4];
$b=[12=>"小明", 23=>"小華", 30=>"小強", 42=>"阿國"];

print_r($a);
echo "<pre>"; print_r($a);"</pre>";
echo "<br>";

echo $a[2];
echo "<br>";

echo $b[30];
echo "<br>";

echo "<hr>";

$c=["小明"=>12, "小華"=>23, "小強"=>30, "阿國"=>42];

echo "<pre>"; print_r($c);"</pre>";
echo "<br>";
echo $c["小強"];

echo "<hr>";

$d[]=12;
$d[]=22;
$d[]=333;
$d[]=39;
echo "<pre>"; print_r($d);"</pre>";
echo "<br>";

echo $d[2];

echo "<hr>";

$e=[[1, 2 , 3],[4, 5, 6],[7, 8, 9]];

echo "<pre>"; print_r($e);"</pre>";

echo "<hr>";

$f=[
    "小明"=> ["國文"=>32, "英文"=>60 , "歷史"=>99],
    "小華"=> ["國文"=>32, "英文"=>60 , "數學"=>77],
    "小強"=> ["國文"=>32, "英文"=>60 , "歷史"=>0, "數學"=>77, "化學"=>56, "公民"=>89],
    "阿國"=> 42
    ];

echo "<pre>"; print_r($f);"</pre>";

echo "<hr>";

echo count($a);     //多少陣列:int
echo "<br>";
echo is_array($a);  //是否為陣列:boolean
echo "<br>";
echo in_array(["國文"=>32, "英文"=>60 , "歷史"=>99], $f);    //boolean
echo "<br>";





?>