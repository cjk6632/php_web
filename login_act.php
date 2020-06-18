<?php
    error_reporting(E_ALL);

    ini_set("display_errors", 1);

    session_start(); # php에서 세션 연결환경 시작

    // Create connection
    $con = mysqli_connect('zz.zz.zz.zz','root','xxxx','study');

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


    $sql = "SELECT * FROM members where id = '".$_POST['id']."' and password = '".$_POST['pass']."'";
    # mysqli pdo 방식 적용하는법 17라인에 써서 sql IJ 차단 하는 코드로 변경하기
    # $_POST['id'] 앞에 mysqli_real_escape_string 함수의 경우 모든 변수에 다 적용이 필요해서 리소스 문제로 자주 사용되지 않음(쓸 수는 있음)
    $result = mysqli_query($con, $sql);

    $row = $result->fetch_assoc();

    var_dump($row);

    if ($result->num_rows > 0) { # '->' 의 경우 php class로 검색해서 뭔지 알아보기
        $_SESSION['id'] = $row['id'];
    }

    var_dump($_SESSION)
?>