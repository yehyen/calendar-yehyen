<h4>天干地支</h4>
<hr>
<?php

$start=1024;

$leap = [["甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸"],
         ["子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥"]
        ];

$year = 2023;

$temp_sky = 0;
$arr = [];
for($i=$year ; $i>0; $i++){
    $arr = $leap[0][$i%10] . $leap[1][$i%12];
    echo $i . "是" .  $arr . "年" . "<br>";
}


// while($year > 0){
//     for($i=1; $i>=10; $i++){
//         $temp_sky = $year % i;
//         echo $sky[$temp_sky];
//     }    
//     for($i=1; $i>=12; $i++){    
//         $temp_land = $year % i;
//     }
// }

?>