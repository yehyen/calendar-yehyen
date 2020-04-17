<h4>字串練習</h4>
<div>字串 aaddw1123</div>
<?php

$str = "aaddw1123"; //在php所有字串都是陣列模式
$str2="";
for($i=0;$i<strlen($str);$i++){
    $str2 .= "*";     //字和字之間相加用「.」
    echo"i=" . $i . "=>" . $str2 . "<br>";
}
echo $str2;
echo "<hr>";

$str3 = str_repeat("*", strlen($str));  //重覆
echo $str3;
echo "<hr>";
echo str_repeat("好", 20);  //重覆
?>

<h4>字串切割</h4>
<div>this,is,a,book</div>
<?php
$str = "this,is,a,book";
$strArray = explode(",", $str);     //以特定字元切割, 目標字串

echo "<pre>"; print_r($strArray);"</pre>";

echo $strArray[3];
?>

<h4>重新組合</h4>
<div>this is a book</div>
<?php
$str1 = "this,is,a,book";
// for($i = 0; $i<strlen($str1); $i++){
//     echo "<pre>"; print_r($str1[$i]);"</pre>";
// }
$str2 = str_replace(",", "&nbsp", $str1);
$str22 = join(" ", $str1);  //組合字串
$str23 = implode(" ", $str1);   //組合字串
echo $str23;

?>


<?php
$str3 = "The reason why a great man is great is that he resolves to be a great man";
echo mb_substr($str3, 0 ,10) . "...";   //取前10字元

?>