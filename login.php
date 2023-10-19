<?php 
$successOrDanger = "success";
$notificationDisplay = "d-none";

if (isset($_POST['login-form-submit'])){
	$username = $connection->real_escape_string(strip_tags(trim($_POST['login-username'])));
	$password = $connection->real_escape_string(strip_tags(trim($_POST['login-password'])));

	$query = "SELECT users.id,password,email FROM users WHERE username = '$username'";
	$result = $connection->query($query);

	if ($result === false) {
		$errorMessage = "Something went wrong. Please try again later.";
	}

	if (!$result->num_rows) {
		$errorMessage = "Username or password is incorrect.";
	}

	if (!empty($errorMessage)) {
		$notification = "$errorMessage<br>Login failed.";
		$successOrDanger = 'danger';
		$notificationDisplay = "d-block";
	}
	else {
		[$id, $password_hash] = $result->fetch_row();
		if (password_verify($password, $password_hash)){
			if (!session_id()) session_start();
			$_SESSION['username'] = $username;
			$_SESSION['user_id'] = $id;
			header("location: ".$site_path."index.php");  
		}  
	}
}
?>