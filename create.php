<?php 

$jina="iAN";
$pass= "siri_yangu";
$kipande="85747644";
$con = mysqli_connect('localhost','root','','crud') or die("Failed to connect to DB");
$insert_into = "INSERT INTO `users`(`username`, `password`, `id_no`) VALUES ('$jina','$pass','$kipande')";
$query_result= mysqli_query($con, $insert_into) or die("Failed to insert into DB");
echo $query_result;


 ?>