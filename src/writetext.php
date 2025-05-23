<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<body>
<h1> 글쓰기 <br> </h1>
<form action = "writetextexe.php" method="post">
<p><input type="text" name="title" placeholder="제목"></p>
<p><textarea name="description" placeholder="본문"></textarea></p>
<p><input type="submit" value="작성"></p>
<p><a href="http://localhost:8080/member.php">돌아가기</a></p>
</form>
</body>
</html>