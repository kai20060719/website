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
?>
<!DOCTYPE html>
<html>
<body>
<h1> <?php echo $row['title'] ?> <br> </h1>
<?php echo '<p>작성자: '.$row['user_id'].'</p>'; ?>
<?php echo '<p>작성시간: '.$row['created'].'</p>'; ?>
<?php 
if (strcmp($row['user_id'],$_SESSION['user_id']) == 0){
echo '<p><a href="http://localhost:8080/textupdate.php?id='.$row['id'].'">글 수정</a>    ';  
echo '<form action = "textdelete.php" method="post">';
echo '<input type="hidden" name="id" value='.$row['id'].'>';
echo '<input type= "submit" value="글 삭제">';
echo '</form>';
}
?>
<?php echo '<p>'.$row['description'].'</p>'; ?>
</form>
<p><a href="http://localhost:8080/member.php">돌아가기</a></p>
</body>
</html>