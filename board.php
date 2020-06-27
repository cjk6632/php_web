<?php include "./DB.php";

error_reporting(E_ALL);
ini_set('display_errors', '1');

?>
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
        <!-- 위 코드가 css파일과 연동시키는 형태 -->
</head>
<body>
<div id="board_area">
    <h1>자유게시판</h1>
    <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
    <table class="list-table">
        <thead>
        <tr>
            <th width="70">번호</th>
            <th width="500">제목</th>
            <th width="120">작성자</th>
            <th width="100">작성일</th>
            <th width="100">조회수</th>
        </tr>
        </thead>

        <?php
        // board테이블에서 no를 기준으로 내림차순해서 5개까지 표시
        $query="select * from board order by no desc;";
        $result=mysqli_query($con,$query);

        while($board=mysqli_fetch_assoc($result)){

            //title변수에 DB에서 가져온 title을 선택
            $title=$board["title"];
            if(strlen($title)>15)
            {
                //title이 30을 넘어서면 ...표시
                $title=str_replace($board["title"],mb_substr($board["title"],0,15,"utf-8")."...",$board["title"]);
            }
            ?>

            <tbody>
            <tr>
                <td width="70"><?php echo $board['no']; ?></td>
                <td width="500"><a href="read.php?no=<?php echo $board["no"];?>"><?php echo $title;?></a></td>
                <td width="120"><?php echo $board['name']?></td>
                <td width="100"><?php echo $board['date']?></td>
                <td width="100"><?php echo $board['hit']; ?></td>
            </tr>
            </tbody>
        <?php } ?>
    </table>
    <div id="write_btn">
        <a href="write.php"><button>글쓰기</button></a> <!-- 글쓰기 버튼 눌를 시 연동한 write.php 구동-->
    </div>
</div>
</body>
</html>





