<html>
<body>
    <form method="post" action="login_act.php"> <!-- 노출되지 않은 다른 파일에서 생성 -->
        id : <input type="text" name="id" />
        password : <input type="text" name="pass" />
        <!-- name= 뒤에 들어가는 부분들이 URL 부분에 나오는 파라미터의 이름 -->
        <input type="submit" />
    </form>
</body>
</html>

<!-- post로 method 작성 시,
<?php
echo $_POST['id'].','.$_POST['password'];
?>
의 작성이 필요함 -->