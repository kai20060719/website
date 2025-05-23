<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:index.php");
    exit;
}
$con = mysqli_connect("db","exampleuser","examplepass","exampledb");
$del = "DELETE
        FROM board
        WHERE
        id = '{$_POST['id']}'
        ";
mysqli_query($con,$del);
header("Location:viewtext.php");
?>