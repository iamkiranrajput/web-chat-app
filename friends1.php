<?php

    session_start();
    if(!isset($_SESSION['id'])){
        header("Location:index.php");
    }
    $id=$_SESSION['id'];
    $sql="SELECT * FROM registration WHERE id <> '$id'";
    $query=mysqli_query($conn,$sql);

    // ___________________________________________________________
    $id=$_SESSION['id'];
    $status="pending";
    $sql1="SELECT * FROM friendsrequest WHERE receiverid='$id' AND status='$status'";
    $querypending=mysqli_query($conn,$sql1);
//--------------------------------------------
    $status1="accept";
    $sql2="SELECT * FROM friendsrequest WHERE receiverid='$id' OR senderid='$id' AND status='$status1'";
    $queryaccept=mysqli_query($conn,$sql2);

?>