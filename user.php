<?php

if(!empty($_POST)){  //回傳是否有值；非不為空值

    $acc = $_POST["acc"];
    $pw = $_POST["pw"];

    echo "acc: ".$acc."<br>";
    echo "pw: ".$pw."<br>";

    if($acc=="admin" && $pw=="1234"){
        echo "登入成功";
        $status = "login";
    }else{
        echo "帳號密碼錯誤";
        $status = "fail";
    }
}
?>

<a href="login.php?status=<?=$status;?>">繼續</a>