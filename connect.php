<?php
include '../../../../conf/p_config.php';

$connection = new mysqli($servername, $username, $pwd, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    echo "Connected successfully!";
}
$connection->set_charset("utf8");

?>