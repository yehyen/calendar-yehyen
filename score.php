<?php

$score=[
    "01"=> ["國文"=>22, "英文"=>33 , "數學"=>44],
    "12"=> ["國文"=>11, "英文"=>66 , "數學"=>77],
    "33"=> ["國文"=>76, "英文"=>24 , "數學"=>89],
    "07"=> ["國文"=>99, "英文"=>22 , "數學"=>39],
    "24"=> ["國文"=>76, "英文"=>53 , "數學"=>49]
    ];

    if(isset($_GET["num"])){
        $num = $_GET["num"];
        echo "座號".$num."的成績:<br>";
        echo "國文成績".$score[$num]["國文"]."分<br>";
        echo "英文成績".$score[$num]["英文"]."分<br>";
        echo "數學成績".$score[$num]["數學"]."分<br>";
    }else{
        echo "<span style='font-weight:border:border;color:red'>!!請提供學生座號<br>";
    }
?>

<a href="student2.html">回學生列表</a>