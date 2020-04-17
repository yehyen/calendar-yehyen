<?php

if(isset($_POST["weight"]) && isset($_POST["height"])){

    // $weight = $_GET["weight"];
    // $height = $_GET["height"];

    $weight = $_POST["weight"];  
    $height = $_POST["height"];

    // BMI=體重kg/(身高m*身高m)
    $height_m = ($height/100);   //將輸入的cm換算成m

    $bmi = sprintf("%.2f", $weight / ($height_m*$height_m));
    // $bmi_float = floor(($bmi*100))/100;   //取小數點後二位, 四捨五入
    // $bmi_float = sprintf("%.2f", $bmi);   //取小數點後二位, 四捨五入
    // $bmi_float = round($bmi, 2);   //取小數點後二位, 四捨五入


    echo "你輸入的身高是:".$height."<br>";
    echo "你輸入的體重是:".$weight."<br>";

    if(!empty($height)){
        echo "你的BMI是:".$bmi."<br>";
    }else{
        "<span style='color:red'>請輸入正確的身高值</span>";
    }

    if($bmi<18.5){
        echo "體重過輕";
    }else if($bmi<24){
        echo "你很健康";
    }else if($bmi<27){
        echo "過重";
    }else if($bmi<30){
        echo "輕度肥胖";
    }else if($bmi<35){
        echo "中度肥胖";
    }else{
        echo "重度肥胖";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單傳值</title>
</head>
<body>
<h4>BMI計算機</h4>
    <form action="?" method="post"">
        體重( m ):<input type="number" name="weight" id="" step="0.01" required><br>
        身高(cm):<input type="number" name="height" id="" step="0.01" required ><br>
        <input type="submit" value="送出">
    </form>


</body>
</html>