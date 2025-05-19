<?php 
session_start();
$con = mysqli_connect("db","exampleuser","examplepass","exampledb");
$upd = "UPDATE board
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
