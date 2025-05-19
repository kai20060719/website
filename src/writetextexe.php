<?php
session_start();
$con = mysqli_connect("db","exampleuser","examplepass","exampledb");
$ins = "INSERT INTO board(
    title ,
    description ,
    user_id ,
    created)  VALUES (
    '{$_POST['title']}',
    '{$_POST['description']}',
    '{$_SESSION['user_id']}',
    now()
    )";
mysqli_query($con,$ins);
header("Location:member.php");
exit;
?>