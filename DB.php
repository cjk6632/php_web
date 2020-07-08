<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();
header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

// DB주소, DB계정아이디, DB계정비밀번호, "DB이름"
$con = new mysqli('15.164.220.30','root','white!2577','study');

mysqli_query($con, "set names utf8");

if(mysqli_connect_errno($con))
    echo 'DB 연결실패';
else
    //echo 'DB 연결성공';
?>