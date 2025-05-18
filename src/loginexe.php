<?php
$con = mysqli_connect("db","exampleuser","examplepass","exampledb");
$sel = "SELECT * FROM information";
$result = mysqli_query($con,$sel);
?>
<!DOCTYPE html>
<html>
<body>
<?php
while($row = mysqli_fetch_array($result)){
    if(strcmp($row ['id'],$_POST['id']) == 0 ){
       if(strcmp($row ['pw'],$_POST['password']) == 0){
        echo "로그인 성공!<br>";
        echo '<a href="http://localhost:8080/member.php">회원 페이지로 이동</a>';
        return;
       }
    }
}
echo "해당 회원 정보는 없습니다";
?>
<a href="http://localhost:8080/">돌아가기</a>
</body>
</html>