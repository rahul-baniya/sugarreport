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
		<form method="post">		
		<div class="card">
			<div class="card-header bg-dark">
				<h1 class="text-white text-center"> Birendra Memorial Hospital </h1>
			
			</div>

		<table class="table table-striped table-hover table-bordered">

		<?php

			include ('conn.php');

			if(isset($_GET['id']))
			{
				$ID = $_GET['id'];
			
				$sql = "SELECT * FROM `report` WHERE ID =  $ID";
				$query_run = mysqli_query($con,$sql);


				while ($res = mysqli_fetch_array($query_run)){

	
		?>
		
		<tr class="text-center">
			<th>ID:</th>
			<th colspan="3"><?php echo $res ['ID']; ?></th>
		</tr>

		<tr class="text-center">
			<th>Name:</th>
			<th colspan="3"><?php echo $res ['Name']; ?></th>
		</tr>

		<tr class="text-center">
			<th>Age:</th>
			<th colspan="3"><?php echo $res ['Age']; ?></th>
		</tr>
			
		<tr class="text-center">
			<td colspan="4">Sugar Report</td>
		</tr>

			<th>Fasting Data</th>
			<th>Reference Fasting Data</th>
			<th>After Fasting Data</th>
			<th>Reference After Fasting Data</th>
			

		
		<tr class="text-center">

			<td><?php echo $res ['Fasting']; ?> </td>
			<td>Low:55 or Less <br> Normal: 55-69 <br> High: Greater than 69</td>


			<td><?php echo $res ['After_fasting']; ?> </td>
			<td>Low:120 or Less <br> Normal: 120-170 <br> High: Greater than 170</td>



		</tr>

		<?php 
			}
		}

		?>	

		</table>
  	
	</div>

		<button class="btn btn-success"><a href="display.php" class="text-white"> All Data </button>

	</div>
</form>

</body>
</html>