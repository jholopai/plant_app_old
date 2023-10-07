<?php include 'header.html' ?>

<h3>Join our gardening hub by registering your account</h1>
<form id="registerForm" method="post">
	<div class="form-group">
		<label for="email" class="col-sm-2 col-form-label">Email address</label>
		<input type="email" class="col-xs-4" id="email" aria-describedby="emailHelp" placeholder="Enter email">
	</div>
	<div class="form-group">
		<label for="username" class="col-sm-2 col-form-label">Username</label>
		<input type="text" class="col-s-4" id="username" aria-describedby="usernameHelp"
			placeholder="Enter your username">
		<small id="usernameHelp" class="form-text text-muted col-sm-6">This is the name other users on the
			Plant App will see you with!</small>
	</div>
	<div class="form-group">
		<label for="password" class="col-sm-2 col-form-label">Password</label>
		<input type="password" class="col-xs-4" id="password" placeholder="Password">
	</div>
	<button type="submit" class="btn btn-primary">Register</button>
</form>

<?php include 'footer.html' ?>