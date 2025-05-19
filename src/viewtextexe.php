<?php 
session_start();
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
<?php echo '<p>'.$row['description'].'</p>'; ?>
<p><a href="http://localhost:8080/member.php">돌아가기</a></p>
</form>
</body>
</html>