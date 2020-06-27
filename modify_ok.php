<?php
include "./DB.php";

$bno = $_POST['no'];
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');



$query="update board set
name  = '$username',
pw  = '$userpw',
title  = '$title',
content = '$content',
date = '$date'
where no = $bno";


$res = $con->query($query);



if($res){
echo "
<script>
    alert('등록완료');
    location.href='board.php';
</script>
";
}else {

    echo "
<script>
    alert('등록실패');
    location.href='board.php';
</script>
";
}
?>