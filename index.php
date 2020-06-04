<?php
# php 변수는 $ 붙여서 사용


// Create connection
$con = mysqli_connect('15.164.220.30','root','white!2577','study');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
