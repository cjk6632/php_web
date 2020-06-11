<?php
    var_dump($_POST)

    // Create connection
    $con = mysqli_connect('15.164.220.30','root','white!2577','study');

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


    $sql = "SELECT * FROM member where id = '".$_POST['id']."' and pw = '".$_POST['pass']."'";
    $result = mysqli_query($con, $sql);

    var_dump($result)
?>