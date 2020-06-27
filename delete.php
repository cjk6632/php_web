<?php
include "./DB.php";


$bno = $_GET['no'];
$query="delete from board where no = $bno";

$res = $con->query($query);

if($res){
    echo "
  <script>
  alert('삭제완료');
  location.href='board.php';
  </script>
  ";
}else{

    echo "
  <script>
  alert('삭제실패');
  location.href='board.php';
  </script>
  ";

}