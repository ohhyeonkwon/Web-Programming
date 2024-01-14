<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 처리</title>
</head>
<body>
    <fieldset>
    <legend>로그인</legend>
    <a href='./join.php'><i>회원가입</i></a>
    <a href='./login.php'><i>로그인</i></a>
    <a href='./admin.php'><i>관리자</i></a><br><br>

    <?php
    $uid = $_POST['uid'];
    $upw = $_POST['upw'];

    $dbcon = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($dbcon, 'login');

    $query = "select * from user where uid='$uid'";
    $result = mysqli_query($dbcon, $query);

    if($result){
	    $row = mysqli_fetch_array($result);
	    if($row['upw'] ==$upw){
            session_start();
            $_SESSION['userid'] = $uid;
            $_SESSION['time'] = time();
		    echo "$uid 님 로그인이 완료되었습니다.";
            echo "<meta http-equiv='refresh' content='2; url=./content1.php'>";
	    }else{
		    echo "패스워드가 일치하지 않습니다.";
		    echo "<meta http-equiv='refresh' content='2; url=./join.php'>";
    }
    }else{
	    echo "입력하신 아이디는 존재하지 않습니다.";
	    echo "<meta http-equiv='refresh' content='2; url=./join.php'>";
    }

    mysqli_close($dbcon);
    ?>
    </fieldset>
</body>
</html>