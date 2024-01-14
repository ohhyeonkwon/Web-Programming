<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <fieldset>
    <legend><h1><i>회원가입</i></h1></legend>
    <a href='./join.php'><i>회원가입</i></a>
    <a href='./login.php'><i>로그인</i></a>
    <a href='./admin.php'><i>관리자</i></a><br><br>

    <form action='./join_process.php' enctype='multipart/form-data' method='post'>
    ID: <input type='text' name='uid'autofocus required placeholder='필수로 작성하세요.' autocomplete="off"><br>
    PW: <input type='password' name='upw' required placeholder='필수로 작성하세요.' autocomplete="off"><br>
    이름: <input type='text' name='uname' required placeholder='필수로 작성하세요.' autocomplete="off"><br>
    전화번호: <input type='tel' name='phone' autocomplete="off"><br>
    성별: <input type='radio' name='gender' value='male'> 남성
    <input type='radio' name='gender' value='female'> 여성<br>
    사진: <input type='file' name='photo'><br><br>

    <input type='submit' value='가입'><br><Br>
    </form>
    </fieldset>
</body>
</html>