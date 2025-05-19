<?php 
session_start();
$con = mysqli_connect("db","exampleuser","examplepass","exampledb");
$result = mysqli_query($con,"SELECT id, title FROM board");
while($row = mysqli_fetch_assoc($result)){
    echo '<p><a href="http://localhost:8080/viewtextexe.php?id='.$row['id'].'">'.$row['title'].'</a></p>';
}
?>