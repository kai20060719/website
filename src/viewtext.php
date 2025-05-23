<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:index.php");
    exit;
}
$con = mysqli_connect("db","exampleuser","examplepass","exampledb");
$result = mysqli_query($con,"SELECT id, title FROM board");
while($row = mysqli_fetch_assoc($result)){
    echo '<p><a href="http://localhost:8080/viewtextexe.php?id='.$row['id'].'">'.$row['title'].'</a></p>';
}
?>
<!DOCTYPE html>
<html>
<body>
<p>&nbsp;</p>
<p><a href="http://localhost:8080/member.php">돌아가기</a></p>
</form>
</body>
</html>