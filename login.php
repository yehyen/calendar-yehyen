<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
</head>
<body>
    <?php
    $showLoginForm = true;
    if(isset($_GET["status"])){
        switch($_GET["status"]){
            case "login":
                echo "你已登入";
                $showLoginForm = false;
        break;
            case "fail":
                echo "帳號密碼錯誤";
            break;
        }    
    }

    ?>
    <?php
    if($showLoginForm){
    ?>
        <form action="user.php" method="POST">
            <div>帳號:<input type="text" name="acc" id=""></div>
            <div>密碼:<input type="password" name="pw" id=""></div>
            <div>
                <input type="submit" value="登入">
                <input type="reset" value="重置">
            </div>
        </form>
    <?php
    }else{
    ?>    
        <h1>恭喜你中大獎了，得到口100個</h1>
    <?php
    }
    ?>

</body>
</html>