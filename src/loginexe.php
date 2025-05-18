<?php
session_start();
$con = mysqli_connect("db","exampleuser","examplepass","exampledb");
$sel = "SELECT * FROM information WHERE  id = '{$_POST['id']}' AND  pw = '{$_POST['password']}'";
$result = mysqli_query($con,$sel);
?>
<!DOCTYPE html>
<html>
<body>
<?php
    if(mysqli_num_rows($result) > 0){
        echo "로그인 성공!<br>";
        $_SESSION['user_id'] = $_POST['id'];
        echo '<a href="http://localhost:8080/member.php">회원 페이지로 이동</a>';
        exit;
       }

echo "해당 회원 정보는 없습니다";
?>
<a href="http://localhost:8080/">돌아가기</a>
</body>
</html>