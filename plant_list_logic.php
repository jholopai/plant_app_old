<?php

function getPlants() {
	include 'connect.php';
	$session_user_id = $_SESSION['user_id'];

	$query = "SELECT plant_name FROM plants WHERE plants.user_id = '$session_user_id'";
	$result = $connection->query($query);
	if (!$result) {
		echo "Something went wrong.";
	} 

if ($result->num_rows > 0)  { 
	while($row = $result->fetch_assoc()) {
		echo "<li>{$row['plant_name']}</li>";
	} 
}  
}
?>