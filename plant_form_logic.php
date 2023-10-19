<?php
$notificationDisplay = "d-none";
$successOrDanger = "success";
$session_user_id = $_SESSION['user_id'];

if (isset($_POST['plant-form-submit'])){
	$plant_name = $connection->real_escape_string(strip_tags(trim($_POST['plant-name'])));

	if (empty($plant_name)) {
		$errorMessage = "Plant name is required!";
	}
	else if (!preg_match('/^[a-z]+$/i', $plant_name)) {
		$errorMessage = "Plant name can only contain alphabetical characters.";
	}
	else if (empty($errors)) {    
		$query = "SELECT 1 FROM plants WHERE plant_name = '$plant_name'";
		$result = $connection->query($query);
		if ($result->num_rows > 0) {
			$errorMessage = "This plant already exists!";
		}
	}

	if (empty($errorMessage)) {
		$query = "INSERT INTO plants (plant_name, user_id) VALUES ('$plant_name', '$session_user_id')";
		$result = $connection->query($query);
		if ($result === false) {
			$errorMessage = "Something went wrong. Please try again later.";
		}
	}

	if (!empty($errorMessage)) {
		$notification = "$errorMessage<br>Could not add plant.";
		$successOrDanger = "danger";
		$notificationDisplay = "d-block";
	} else {
		$notification =  "New plant was added succesfully!";
	}
}
?>