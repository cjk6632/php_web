<?php
    include "./DB.php"; /* db load */
?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
$bno = $_GET['no']; /* bno함수에 no값을 받아와 넣음*/

$query="select * from board where no='$bno'";
$res = $con->query($query);
$board=mysqli_fetch_assoc($res);

?>
<!-- 글 불러오기 -->
<div id="board_read">
    <h2><?php echo $board['title']; ?></h2>
    <div id="user_info">
        <?php echo $board['name']; ?> <?php echo $board['date']; ?> 조회:<?php echo $board['hit']; ?>
        <div id="bo_line"></div>
    </div>
    <div id="bo_content">
        <?php echo $board['content']; ?>
    </div>
    <!-- 목록, 수정, 삭제 -->
    <div id="bo_ser">
        <ul>
            <li><a href="/">[목록으로]</a></li>
            <li><a href="modify.php?no=<?php echo $board['no']; ?>">[수정]</a></li>
            <li><a href="delete.php?no=<?php echo $board['no']; ?>">[삭제]</a></li>
        </ul>
    </div>
</div>
</body>
</html>