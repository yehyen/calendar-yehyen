<h4>字串放大並變色</h4>
<?php
$str = "好的，中國武漢肺炎";
$search = "武漢肺炎";
$search1 = "中國";
$target = "<span style='color:red;font-size:24px'>武漢肺炎</span>";
$target1 = "<span style='color:red;font-size:24px'>中共</span>";


echo str_replace($search1, $target1, $str);     // 替換

// $str2 = strchr($str, "武漢肺炎");
// echo $str2;

?>

<hr>
好的，中國<span style="color:red;font-size:24px">武漢肺炎</span>