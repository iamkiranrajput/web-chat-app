<?php
include_once("config.php");

if(!isset($_SESSION['id'])){
    header("Location:index.php");
}
$senderid=$_GET['senderid'];
$receiverid=$_GET['receiverid'];
$username=$_GET['username'];
$receivername=$_GET['receivername'];
$status='pending';

$checkQuery="SELECT * FROM friendsrequest WHERE senderid='$senderid' AND receiverid='$receiverid'";
$checkQuery=mysqli_query($conn,$checkQuery);

if(mysqli_num_rows($checkQuery)>0){
    header("Location:friends.php");
}else{
$sql="INSERT INTO friendsrequest VALUES('$senderid','$username','$receivername','$receiverid','$status')";
$query=mysqli_query($conn, $sql);

if($query){
header("Location:friends.php");
}
}
?>