<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor='lightgray'>
    <fieldset>
        <legend><h1><i>관리자 페이지</i></h1></legend>
        <a href='./join.php'><i>회원가입</i></a>
        <a href='./login.php'><i>로그인</i></a>
        <a href='./admin.php'><i>관리자</i></a><br><br>

        <?php
        session_start();
        if(isset($_SESSION['userid'])){
            $userid = $_SESSION['userid'];

            if($userid == 'admin'){
                echo "관리자용 검색 도구 출력";
            ?>

            <h2>검색 페이지</h2>
            <form action='./admin_process.php' method='post'>
                이름: <input type='text' name='uname' autocomplete="off"><br>
                ID: &nbsp;&nbsp;&nbsp;<input type='text' name='uid' autocomplete="off"><br>
                <input type='submit' value='검색'>
            </form>


            <?php

            }else{
                echo "이 페이지는 관리자 전용 페이지입니다.";
                echo "<meta http-equiv='refresh' content='2; url=./login.php'>";
            }
        }else{
            echo "Access Denied!!";
            echo "<meta http-equiv='refresh' content='2; url=./login.php'>";
        }
        ?>
        </form>
    </fieldset>
</body>
</html>