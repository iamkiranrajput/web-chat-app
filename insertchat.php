<?php
include_once("config.php");

session_start();


$id = $_SESSION['id'];
$msgreceiverid = mysqli_real_escape_string($conn, $_POST['msgreceiverid']);
$msg = mysqli_real_escape_string($conn, $_POST['message']);

$query = "INSERT INTO msgtable (send_id, rec_id, message) VALUES ('$id', '$msgreceiverid', '$msg')";
mysqli_query($conn, $query);

?>
