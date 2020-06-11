<?php
    error_reporting(E_ALL);

    ini_set("display_errors", 1);

    // Create connection
    $con = mysqli_connect('15.164.220.30','root','white!2577','study');

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


    $sql = "SELECT * FROM members where id = '".$_POST['id']."' and password = '".$_POST['pass']."'";
    echo $sql;
    $result = mysqli_query($con, $sql);

    var_dump($result)
?>