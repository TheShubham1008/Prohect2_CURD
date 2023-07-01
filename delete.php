<?php

include 'connection.php';
$id=$_GET['id'];
$deletequery="DELETE FROM `jobresgistration` WHERE ID=$id";
$query=mysqli_query($con,$deletequery);
if($query){
	?>
	<script>
		alert("Deleted Successfully");
	</script>


	<?php
}else{
	?>
	<script>
		alert("NOT Deleted");
	</script>
	<?php 
}
header('location:display.php');



?>