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
</form>
</body>
</html>