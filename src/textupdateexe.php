<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:index.php");
    exit;
}
if($_POST['title'] == '' OR $_POST['description'] == ''){
    header("Location:textupdate.php?id=".$_POST['id']);
    exit;
}
$con = mysqli_connect("db","exampleuser","examplepass","exampledb");
$upd = "
    UPDATE board
    SET
    title = '{$_POST['title']}',
    description = '{$_POST['description']}',
    created = now()   
    
    WHERE
    id = '{$_POST['id']}'
    ";
mysqli_query($con,$upd);
header("Location:viewtext.php");
?>
