<?php

include 'conn.php';

$ID = $_GET['id'];

$sql = "DELETE FROM `report` WHERE ID = $ID";

mysqli_query($con,$sql);

header('location:display.php');


?>

