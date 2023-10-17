<?php
include 'header.php';
include 'login.php';
?>

<form method="post" name="login-form">
    <label for="login-username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="login-username" id="login-username" placeholder="">
    </div>
    <label for="login-password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="login-password" id="login-password" placeholder="">
    </div>
	<button type="submit" name="login-form-submit" class="btn btn-primary">Login</button>
</form>
<div class="notification-area">
	<div id="loginNotification" class="alert alert-<?= $successOrDanger ;?> alert-dismissible fade show <?= $notificationDisplay ?? ""; ?>" role="alert">
		<p><?= $notification; ?></p>
	</div>
</div>

<?php include 'footer.html'; ?>