<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

div{
    margin: 1em;
    float: left;
}
table{
    border-collapse:collapse;
    margin: 1em;
    float: left;

}
table td{
    border:1px solid #ccc;
    padding:5px;
    text-align:center;
}

</style>
<body>
    
</body>
</html>
<h4>月曆練習</h4>

<?php
$year = "2020";
for($m=1; $m<=12; $m++){
?>

<table border='1'>
<tr><td colspan="7">月份:<?=$m;?></td></tr>
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
                echo $num;
            }
            echo "</td>";
        }        
    }
    echo "</tr>"; 
}       
?>
</table>

<?php
}
?>