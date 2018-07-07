<?php 
$con = mysqli_connect('localhost','root','','crud') or die("Failed to connect to DB");
// $fetch_query= "SELECT * FROM `users`";
$fetch_query= "SELECT `username`, `password`, `id_no` FROM `users` WHERE username='iAN'";
$fetch_result= mysqli_query($con, $fetch_query) or die("Failed to fetch Data");
$row_count= mysqli_num_rows($fetch_result);
echo $row_count." user(s) found";
echo "<br/>";
if ($row_count>0) {
		while ($row = mysqli_fetch_array($fetch_result)) {
			echo "<br/>";
			echo $row['username'];
			echo "<br/>";
			echo $row['password'];
			echo "<br/>";
			// echo PHP_EOL;
			echo $row['id_no'];
	}
}
else{
	echo "no users found";
}



 ?>
