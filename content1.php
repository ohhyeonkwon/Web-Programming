<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <?php
    session_start();
    if(isset($_SESSION['userid'])){
        $userid = $_SESSION['userid'];
        echo "Welcome! $userid<br>";
        echo "이 페이지는 인증된 사용자만 볼 수 있음";
    }else{
        echo "Access Denied";
        echo "<meta http-equiv='refresh' content='2; url=./join.php'>";
    }
    ?>
    </fieldset>
</body>
</html>