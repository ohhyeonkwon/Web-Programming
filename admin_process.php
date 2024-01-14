<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
    $uname = $_POST['uname'];
    $uid = $_POST['uid'];

    $dbcon = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($dbcon, 'login');

    if($uname && $uid != 'all'){
        $query = "SELECT * FROM user WHERE uname LIKE '%$uname%' AND uid LIKE '%$uid%'";
    } else if($uname && $uid == 'all'){
        $query = "SELECT * FROM user WHERE uname LIKE '%$uname%'";
    } else if(!$uname && $uid != 'all'){
        $query = "SELECT * FROM user WHERE uid = '$uid'";
    } else {
        $query = "SELECT * FROM user";
    }

    $result = mysqli_query($dbcon, $query);

    echo "<table border='1'>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        // 다른 필드 출력
        for ($i = 0; $i <= 5; $i++) { 
            echo "<td>".$row[$i]."</td>";
        }
        // 사진 출력
        echo "<td>";
        if (!empty($row['photo'])) {  // 사진 경로가 존재하는 경우에만 이미지 태그를 출력
            echo "<img src='".$row['photo']."' width='100'>";
        } else {
            echo "사진 없음";
        }
        echo "</td>";

        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($dbcon);
    ?>
</body>
</html>
