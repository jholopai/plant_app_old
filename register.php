<?php
$notificationDisplay = "d-none";
$successOrDanger = "success";
if (isset($_POST['register-form-submit'])){
	$email = $connection->real_escape_string(strip_tags(trim($_POST['email'])));
	$username = $connection->real_escape_string(strip_tags(trim($_POST['username'])));
	$password = $connection->real_escape_string(strip_tags(trim($_POST['password'])));
	$password2 = $connection->real_escape_string(strip_tags(trim($_POST['password2'])));

	if (empty($email)) {
		$errorMessage = "Email can't be empty!";
	}
	else if (!preg_match('/^[\w]+[\w.+-]*@[\w-]+(\.[\w-]{2,})?\.[a-zA-Z]{2,}$/', $email)) {
		$errorMessage = "Please provide a valid email address.";
	}

	else if (empty($username)) {
		$errorMessage = "Username can't be empty!";
	}
	else if (strlen($username) < 5 || strlen($username) > 30) {
		$errorMessage = "Length of the username must be between 5 and 30 characters.";
	}
	else if (!preg_match('/^[a-zA-Z0-9]/', $username)) {
		$errorMessage = "Username can only contain alphabetical characters and numbers.";
	}

	else if (empty($password)) {
		$errorMessage = "Password can't be empty!";
	}
	else if (strlen($password) < 10 || strlen($password) > 30) {
		$errorMessage = "Password length must be between 10 and 30 characters.";
	}
	else if ($password != $password2) {
		$errorMessage = "The passwords do not match.";
	}

	if (empty($errorMessage)) {
		$password = password_hash($password, PASSWORD_DEFAULT);
		$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
		$result = $connection->query($query);
		if ($result === false) {
			$errorMessage = "Something went wrong. Please try again later.";
		}
	}

	if (!empty($errorMessage)) {
		$notification = "$errorMessage<br>Registration failed.";
		$successOrDanger = "danger";
	}
	else {
		$notification = "Registration complete!";
	}
	$notificationDisplay = "d-block";
}
?>