<?php
    error_reporting(E_ALL);

    ini_set("display_errors", 1);

    session_start(); # php에서 세션 연결환경 시작

    // Create connection
    $con = mysqli_connect('15.164.220.30','root','white!2577','study');

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


    $sql = "SELECT * FROM members where id = '".$_POST['id']."' and password = '".$_POST['pass']."'";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

    if ($result['num_rows'] > 0) {
        $_SESSION['id'] = $row[0]['id'];
    }

    var_dump($result)
?>