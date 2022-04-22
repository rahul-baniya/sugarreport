 <?php 
	include ('conn.php');

	if (isset($_POST['done'])){
		$Name = $_POST['Name'];
		$Age = $_POST['Age'];
		$Fasting = $_POST['Fasting'];
		$After_fasting=$_POST['After_fasting'];


		$sql ="INSERT INTO `report`(`Name`, `Age`, `Fasting`, `After_fasting`) VALUES ('$Name','$Age','$Fasting','$After_fasting')";


		$query = mysqli_query($con,$sql);
		echo "Success";
	}


	 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="col-lg-6 m-auto">
	
	
	<form method="post">
		<br><br>
		<div class="card">
			<div class="card-header bg-dark">
				<h1 class="text-white text-center"> Enter Patient Data </h1>
			
			</div>
		<br>Patient's Name<input type="text" name="Name" placeholder="Enter name" class="form-control"><br>
		Patient's Age<input type="text" name="Age" placeholder="Enter age"class="form-control"> <br>
		Patient's Fasting Data <input type="text" name="Fasting" placeholder="Enter Fasting Data"class="form-control"><br>
		Patient's Non-Fasting Data <input type="text" name="After_fasting" placeholder="Enter Non-Fasting Data"class="form-control"> <br>
		<button class="btn btn-success" type="submit" name="done"> Submit </button><br>
		
		<button class="btn-primary btn" class="btn btn-success" type="submit"><a href="display.php" class="text-white"> Show All Data </button>
		</div>
	</form>



	
</body>
</html>