<?php
include 'header.php';
include 'register.php';
?>

<h3>Join our gardening hub by registering your account</h3>
<form id="registerForm" method="post">
	<div class="form-group">
		<label for="email" class="col-sm-2 col-form-label">Email address</label>
		<input type="email" class="col-xs-4" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
	</div>
	<div class="form-group">
		<label for="username" class="col-sm-2 col-form-label">Username</label>
		<input type="text" class="col-s-4" name="username" id="username" aria-describedby="usernameHelp"
			placeholder="Enter your username" required>
	</div>
	<div class="form-group">
		<label for="password" class="col-sm-2 col-form-label">Password</label>
		<input type="password" class="col-xs-4" name="password" id="password" placeholder="Password" required>
	</div>
	<div class="form-group">
		<label for="password2" class="col-sm-2 col-form-label">Please repeat your password</label>
		<input type="password" class="col-xs-4" name="password2" id="password2" placeholder="Password" required>
	</div>
	<button name="register-form-submit" type="submit" class="btn btn-primary">Register</button>
	<div class="register-notification">
		<div id="errorNotification" class="alert alert-<?= $successOrDanger ;?> alert-dismissible fade show <?= $notificationDisplay ?? ""; ?>" role="alert">
			<p><?= $notification; ?></p>
		</div>
	</div>
</form>

<?php include 'footer.html' ?>