
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php include '/CURD/links.php';?>
	<?php include '/CURD/css/style.css' ?>

</head>
<body>
	<div class="main-div">
		<h1>List Of Candidates For Web Developer Job</h1>

		<div class="center-div">
			<div class="table-responsive">
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>NAME</th>
							<th>DEGREE</th>
							<th>MOBILENO.</th>
							<th>EMAILID</th>
							<th>REFER</th>
							<th>JOBPOST</th>
							<th>OPERATION</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include '/CURD/connection.php';
						$selectquery="select*from `jobresgistration`";
						$query =mysqli_query($con,$selectquery);
						$nums=mysqli_num_rows($query);
						while($res=mysqli_fetch_array($query))
						{
							?>
							<tr>
								<td><?php echo $res['ID'];?></td>
								<td><?php echo $res['NAME'];?></td>
								<td><?php echo $res['DEGREE'];?></td>
								<td><?php echo $res['MOBILENO.'];?></td>
								<td><span class="email-style"><?php echo $res['EMAILID'];?></span></td>
								<td><?php echo $res['REFER'];?></td>
								<td><?php echo $res['JOBPOST'];?></td>
								<td><a href="updates.php?id=<?php echo $res['ID'];?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE!"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
								<td><a href="delete.php?id=<?php echo $res['ID'];?>" data-toggle="tooltip" data-placement="bottom" title="Delete!"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
							</tr>
						<?php
						}
						?>
						
					</tbody>
				</table>
				
			</div>
			
		</div>
		
	</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>
