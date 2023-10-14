<?php 
if (isset($_POST['register-form-submit'])){
    foreach ($_POST as $field => $value) {
		$$field = $connection->real_escape_string(strip_tags(trim($value)));
	}
$password = password_hash($password, PASSWORD_DEFAULT);
$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
$result = $connection->query($query);
if ($result === false) {
	die("Error in query: " . $connection->error);
} else {
	echo "Registration successful!";
}
}
?>