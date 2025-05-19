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
<a href="http://localhost:8080/logout.php">로그아웃</a>
<a href="http://localhost:8080/writetext.php">글쓰기</a>
<a href="http://localhost:8080/viewtext.php">글목록</a>
</form>
</body>
</html>