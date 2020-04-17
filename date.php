<?php
$time = "2020-04-16 11:30:20";
$serialTime = strtotime($time);     //strtotime(“+1 days”, 目標字串) 字串轉成時間(秒)
echo date("Y年m月d日 H:i:s", $serialTime);  //Date(“Y-m-d”, 以秒計算)
echo "<hr>"
?>


<?php

$today = "2020-04-16";
$nextBirth = "2020-10-07";
$between = strtotime($nextBirth) - strtotime($today);
$days = $between /60/60/24;
echo "還有:". $days . "天";
echo "<hr>";
$days = date("z", strtotime($nextBirth)) - date("z", strtotime($today));
echo $days;

echo "<hr>"

?>

<?php
echo date("Y-m-d H:i:s");   //直接取系統時間
?>

<h4>strtotime函式</h4>
<?php
$day = strtotime("+3 days " .$today);
echo date("Y-m-d", $day);

echo "<hr>";
echo date("Y-m-d", strtotime("-2 month", strtotime("2020-10-7")));
echo "<br>";
echo date("Y-m-d", strtotime("-2 month 2020-10-7"));

?>

<?php

$year = 2020;
$input_month = 04;
$input_day = 16;

$month = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

for($i=0; $i<count($month)-1; $i++){
    if($month[0]){
        for($j=0; $j<$days[0]; $j++){
            echo $month ."月" .$days ."日";
        }
    }
}


?>