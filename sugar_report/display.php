<!DOCTYPE html>
<html>
<head>
	<title>All Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<div class="container">
	<div class="col-lg-12">
		
		<br><h1 class="text-warning text-center">Display Patient's Data</h1>
		<br>
		<table class="table table-striped table-hover table-bordered">

		<tr class="text-center">

			<th>ID</th>
			<th>Patient's Name</th>
			<th>Patient's Age</th>
			<th>Fasting Data</th>
			<th>After Fasting Data</th>
			<th>Show</th>
			<th>Delete</th>


		</tr>

	<?php
	
			include ('conn.php');

			
			$sql ="select * from report";


			$query = mysqli_query($con,$sql);

			while ($res = mysqli_fetch_array($query)){


	
	?>

		<tr class="text-center">

			<td><?php echo $res ['ID']; ?> </td>
			<td><?php echo $res ['Name']; ?> </td>
			<td><?php echo $res ['Age']; ?> </td>
			<td><?php echo $res ['Fasting']; ?> </td>
			<td><?php echo $res ['After_fasting']; ?> </td>

			<td><button class="btn-primary btn" ><a href="show.php?id=<?php echo $res['ID']; ?>" class="text-white">Show</a> </button></td>

			<td><button class="btn-danger btn" ><a href="delete.php?id=<?php echo $res['ID']; ?>" class="text-white">Delete</a> </button></td>


		</tr>

		<?php 
			}

		?>	

		</table>
  	
	</div>

	<button class="btn btn-success"><a href="insert.php" class="text-white"> Insert New Data </button>
	
	</div>


</body>
</html>