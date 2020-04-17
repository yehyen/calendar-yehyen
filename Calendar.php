 <style>
table{
    border-collapse:collapse;

}
table td{
    border:1px solid #ccc;
    padding:5px;
    text-align:center;
}

.box{
    display: inline-block
}
</style>

<h4>月曆練習</h4>

<?php
$year = "2020";
for($m=1; $m<=12; $m++){
?> 

<div class="box">月份:<?=$m;?></div>
<table border='1'>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>

<?php

$firstDay = "$year-$m-01";
$firstDayWeek = date("w", strtotime($firstDay));
// echo $firstDayWeek;
// echo "<br>";
$monthDays = date("t", strtotime($firstDay));
// echo $monthDays;

for($i=0; $i<5; $i++){
    echo "<tr>";
    for($j=0; $j<7; $j++){
        if($i==0 && $j<$firstDayWeek){
            echo "<td>";
            echo "</td>";
        }else{
            echo "<td>";
            $num = $i*7+$j+1-$firstDayWeek;
            if($num <= $monthDays){
                echo "$num";
            }
            echo "</td>";
        }        
    }
    echo "</tr>"; 
}

// $BeginDate=date('Y-m-16', strtotime(date("Y-m-d")));
// echo $BeginDate;
// echo "<br>";
// echo date('Y-m-d', strtotime("$BeginDate +1 month -1 day"));
// echo "<br>";
?>
</table>

<?php
}
?>