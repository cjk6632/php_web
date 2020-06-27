<?php
include "./DB.php";


//각 변수에 write.php에서 input name값들을 저장한다
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');


$query="insert into board set
name  = '$username',
pw  = '$userpw',
title  = '$title',
content = '$content',
date = '$date'";


$res = $con->query($query);

if($res){
    echo "
  <script>
  alert('등록완료');
  location.href='board.php';
  </script>
  ";
}else{

    echo "
  <script>
  alert('등록실패');
  location.href='board.php';
  </script>
  ";

}
?>
