<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend><h1><i>로그인</i></h1></legend>
    <a href='./join.php'><i>회원가입</i></a>
    <a href='./login.php'><i>로그인</i></a>
    <a href='./admin.php'><i>관리자</i></a><br><br>

    <form action='./login_process.php' method='post'>

        ID: &nbsp;<input type='text' name='uid' autofocus required  placeholder="아이디를 입력하세요" autocomplete="off"> <br>
        PW: <input type='password' name='upw' required placeholder="비밀번호를 입력하세요" autocomplete="off"> <br><br>
        <input type='submit' value='로그인'><br><br>
    </form>
    </fieldset>
</body>
</html>