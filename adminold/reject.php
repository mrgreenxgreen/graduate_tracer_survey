<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
include_once("connection.php");

//getting id from url
$id = $_GET['id'];

$Cancelled = "CANCELLED";
$SQL = "UPDATE requests SET  request_status = '$Cancelled' WHERE request_id = '$id'";

$result = mysqli_query($mysqli, $SQL);

header('location:requests.php');


?>
