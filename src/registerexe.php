<?php
$con = mysqli_connect("db","exampleuser","examplepass","exampledb");
$set = "CREATE TABLE IF NOT EXISTS information(
id VARCHAR(50) NOT NULL PRIMARY KEY,
pw VARCHAR(50) NOT NULL 
)";
$ins = "INSERT INTO information(
id,
pw
) VALUES(
'{$_POST['id']}',
'{$_POST['password']}'
)";
mysqli_query($con,$set);
$sel = "SELECT * FROM information";
$result = mysqli_query($con,$sel);
?>
<!DOCTYPE html>
<html>
<body>
<?php
while($row = mysqli_fetch_array($result)){
    if(strcmp($row ['id'],$_POST['id']) == 0){
        echo "이미 있는 id입니다.다시 입력해주세요<br>";
        echo '<a href="http://localhost:8080/">돌아가기</a>';
        return;
    }
}
mysqli_query($con,$ins);
echo "회원 가입 성공";
?>
<a href="http://localhost:8080/">돌아가기</a>
</body>
</html>