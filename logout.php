<?php
if (!session_id()) session_start();

unset($_SESSION['username']);
session_destroy();
header("location: http://localhost/plant-app/login_form.php");

?>