<?php
# php 변수는 $ 붙여서 사용
# github에 php_web이란 이름의 저장소를 생성 후, AWS ubuntu의 /var/www/html/ 경로 내에 특정 디렉터리를 생성(여기선 php_web)하여 해당 경로에 있는 파일을 동기화 해서 브라우저에서 확인
# ㄴ 즉 github에 commit & push하여, 업데이트 후에, AWS ubuntu에서 'git pull https://github.com/cjk6632/php_web/' 이와같은 방식으로 동기화
# ㄴ 이후 브라우저에서 'xx.xx.xx.xx/php_web/index.php'를 입력하면 업데이트 된것을 확인할 수 있음
# ㄴ 다른 웹 프로그래밍 파일을 해당 github repository에 올렸다면 접근 방식은 'xx.xx.xx.xx/php_web/해당파일이름' 처럼 접근하면 됨


// Create connection
$con = mysqli_connect('zz.zz.zz.zz','root','xxx','study');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



$sql = "SELECT * FROM member";
$result = mysqli_query($con, $sql);
var_dump($result);
# var_dump는 화면에 찍어주는 변수(배열 찍을때) / echo를 더 많이 사용


?>

<!-- tr이 세로 / td가 가로 -->
<table border="1">
    <tr>
        <td>
            타이틀명
        </td>
        <td>
            시간
        </td>
        <td>
            내용
        </td>
    </tr>
    <?php while($row = mysqli_fetch_array($result)) { ?>
    <tr>
        <td>
            <?php echo $row['title'];?>
        </td>
        <td>
            <?php echo $row['time'];?>
        </td>
        <td>
            <?php echo $row['content'];?>
        </td>
        <?php }?>
    </tr>
</table>

<!-- 다음주 과제는 HTML 폼 데이터 작성 관련해서 미리 보고 오기 (미리 개발 가능하면 하기) -> html 게시글 등록과 로그인 페이지 나오는 정도
php 튜토리얼은 생활코딩에서 훑어보는 수준으로 보고오기
# incorrect sting value -> 하이디 sql 한글 안들어가는 문제 처리 -->
