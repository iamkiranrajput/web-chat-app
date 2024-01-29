<?php
include_once("config.php");
if(!isset($_SESSION['id'])){
    header("Location:index.php");
}
$senderid=$_GET['senderid'];
$receiverid=$_GET['receiverid'];

echo $senderid;

if($_GET['btn']=="accept"){
    $accept='accept';

    $sql="UPDATE friendsrequest SET status='$accept' WHERE senderid='$senderid' AND receiverid='$receiverid'";
    $query=mysqli_query($conn,$sql);
    header('Location:friends.php');
}
else{
    $sql="DELETE FROM friendsrequest WHERE senderid='$senderid' OR (senderid='$receiverid' AND receiverid='$senderid')";
    $query=mysqli_query($conn,$sql);
    header('Location:friends.php');

}


?>