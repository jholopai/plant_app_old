<?php 
if (!session_id()) session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>The Plant App</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include 'connect.php' ?>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand mb-0 h1" href="index.php">The Plant App</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<?php
			if (isset($_SESSION['username'])) {
    			echo "<div class=\"navbar-nav\">";
    			echo "<a class=\"nav-link\"' href=\"home.php\">Home</a>";
    			echo "<a class=\"nav-link\" href=\"my_plants.php\">My plants</a>";
    			echo "<a class=\"nav-link\" href=\"calendar.php\">Calendar</a>";
				echo "</div>";
			}
			?>
			</div>
  			<?php
			if (!isset($_SESSION['username'])) {
    			echo "<a class=\"btn btn-outline-secondary\" href=\"login_form.php\" role=\"button\">Login</a>";
				echo "<a class=\"btn btn-outline-secondary\" href=\"register_form.php\" role=\"button\">Register</a>";
			}
			if (isset($_SESSION['username'])) {
				echo "<a class=\"btn btn-outline-secondary\" href=\"logout.php\" role=\"button\">Logout</a>";
			}
			?> 
		</nav>
	</header>

	<div class="container-fluid"></div>