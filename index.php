<?php
# php 변수는 $ 붙여서 사용


// Create connection
$con = mysqli_connect('15.164.220.30','root','white!2577','study');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



$sql = "SELECT * FROM member";
$result = mysqli_query($con, $sql);
var_dump($result);
# var_dump는 화면에 찍어주는 변수(배열 찍을때) / echo를 더 많이 사용


while($row = mysqli_fetch_array($result)) {
    echo '<h2>'.$row['title'].'</h2>';
    echo $row['time'];
}
?>

<table>
    <tr>
        <td>
            타이틀명
        </td>
        <td>
            시간
        </td>
    </tr>
    <tr>
        <td>
            1
        </td>
        <td>
            2
        </td>
    </tr>
</table>
