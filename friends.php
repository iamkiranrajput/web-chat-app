<?php
include_once("config.php");
include_once("friends1.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="friends.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <title>Friends</title>
    <?php include_once("styletable.php"); ?>
</head>

<body>
    <div class="header">
    <div class="row">
            <div class="col-lg-12">
        <!-- <p><?php echo $_SESSION['username']; ?></p> -->
        <div class="buttons">
            <a href="friends.php" class="button1">Friends</a>
            <a class="button2" href="users.php" name="users">All Users</a>
            <a class="button2" href="friendsRequest.php" name="frequest">Request</a>
            <a class="button2" href="logout.php" name="logout">Logout</a>

        </div>
        </div>
    </div>
    </div>

    <div class="container" style="margin-top: 130px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ccard radius-t-0 h-100">
                    <div class="position-tl w-102 border-t-3 brc-primary-tp3 ml-n1px mt-n1px"></div>
                    <div class="card-header pb-3 brc-secondary-l3">
                        <h5 class="card-title mb-2 mb-md-0 text-dark-m3">Friends</h5>
                    </div>

                    <div class="card-body pt-2 pb-1">
                        <?php


                        while ($row = mysqli_fetch_assoc($queryaccept)) {
                            $a=rand(1,8);
                           $img=" https://bootdey.com/img/Content/avatar/avatar".$a.".png";
        
                            $msgReceiverId = ($row["sendername"] == $_SESSION["username"]) ? $row["receiverid"] : $row["senderid"];

                                                  
                        // $query="SELECT * FROM registration WHERE id='$msgReceiverId'";
                        // $a=mysqli_query($conn, $query);

                        // while($r=mysqli_fetch_assoc($a)){
                        //     $img=$r['img'];
                        // }
                        ?>
                            <div role="button" class="d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 p-25 d-style">
                                <span class="mr-2">
                                    <img alt="" src="<?= $img ?>" class="h-4 w-4 rounded-circle">
                                </span>
                                <span class="text-default-d3 text-120 text-600">
                                    <a href="msg.php?msgreceiverid=<?= $msgReceiverId ?>">
                                        <?= ($row["sendername"] == $_SESSION["username"]) ? $row['receivername'] : $row["sendername"]; ?>
                                    </a>
                                </span>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
