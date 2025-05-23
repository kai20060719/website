<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:index.php");
    exit;
}

$con = mysqli_connect("db","exampleuser","examplepass","exampledb");
$sel = "SELECT * FROM board WHERE  id = '{$_GET['id']}'";
$result = mysqli_query($con,$sel);
$row = mysqli_fetch_assoc($result);
if(strcmp($_SESSION['user_id'],$row['user_id'])){
    header("Location:viewtext.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<body>
<h1> 글수정 <br> </h1>
<form action = "textupdateexe.php" method="post">
echo '<p><input type="text" name="title" value ='.$row['title'].'></p>';
echo '<p><textarea name="description">'.$row['description'].'</textarea></p>';
echo '<input type="hidden" name="id" value='.$row['id'].'>';
?>
<p><input type="submit" value="수정"></p>
<p>*제목이나 본문에 아무것도 입력하지 않으면 안됩니다!</p>
</form>
<p><a href="http://localhost:8080/member.php">돌아가기</a></p>
</body>
</html>