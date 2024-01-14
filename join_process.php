<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>회원가입</legend>
    <a href='./join.php'><i>회원가입</i></a>
    <a href='./login.php'><i>로그인</i></a>
    <a href='./admin.php'><i>관리자</i></a><br>

    <?php
    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    $uname = $_POST['uname'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    $dir = './photo/';

    $file_name1 = basename($_FILES['photo']['name']);
    $file_name2 = date('Ymdhis', time());
    $imagepath = $dir.$file_name2.$file_name1;
    move_uploaded_file($_FILES['photo']['tmp_name'], $imagepath);

    //연결
    $dbcon = mysqli_connect('localhost', 'root', '');
    //선택
    mysqli_select_db($dbcon, 'login');
    //전송
    $query = "insert into user values(null, '$uid', '$upw', '$uname', '$gender',  '$phone', '$imagepath')";
    $check = mysqli_query($dbcon, $query);
    
    if($check){
        echo "환영합니다. $uname 님 회원가입이 완료되었습니다.";}
    else{
    "오류가 발생하였습니다. 관리자에게 문의하세요.";}

    //종료
    mysqli_close($dbcon);

    ?>
    </fieldset>
</body>
</html>