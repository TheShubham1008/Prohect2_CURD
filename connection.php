<?php

$username="root";
$password="";
$server='localhost';
$db='curd';
$con=mysqli_connect($server,$username,$password,$db);
if ($con) {
	//echo "connection successful";
	?>
	<script>
		console.log("Connection Successful");
	</script>
	<?php
}
else{
	//echo "No Connection";
	die("No Connection".mysqli_connect_error());
}





?>