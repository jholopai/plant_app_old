<?php
include 'header.php';
include 'plant_form_logic.php';
include 'plant_list_logic.php';
?>

<div class="row">
	<div class="col">
		<div class="plant-list">
			<h3>My plants</h3>
			<ul class = "plant-listing">
				<?php getPlants() ?>
			</ul>
		</div>
	</div>
	<div class="col">
		<div class="plant-form">
			<h3>Add plant</h3>
			<form id="register-plant" method="post">
				<div class="form-group">
					<label for="plant-name" class="col-sm-2 col-form-label">Plant name</label>
					<input type="text" class="col-xs-4" name="plant-name" id="plant-name" aria-describedby="plantName" placeholder="e.g. Aubergine" required>
				</div>
				<button type="submit" name="plant-form-submit" class="btn btn-primary">Add plant!</button>
			</form>
		</div>
	</div>
</div
<div class="row">
	<div class="notification-area">
		<div id="plantNotification" class="alert alert-<?= $successOrDanger ;?> alert-dismissible fade show <?= $notificationDisplay ?? ""; ?>" role="alert">
		<p><?= $notification; ?></p>
		</div>
	</div>
</div>

<?php include 'footer.html' ?>
