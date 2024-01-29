







<?php 
include_once("config.php");
include_once("friends1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Card user transfer list - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="friends.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <?php
include_once("styletable.php");
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

</head>

<body>

<div class="header">
    <div class="row">
            <div class="col-lg-12">
        <!-- <p><?php echo $_SESSION['username']; ?></p> -->
        <div class="buttons">
            <a href="friends.php" class="button2">Friends</a>
            <a class="button1" href="users.php" name="users">All Users</a>
            <a class="button2" href="friendsRequest.php" name="frequest">Request</a>
            <a class="button2" href="logout.php" name="logout">Logout</a>

        </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row" style=" margin-top:100px;">
            <div class="col-lg-12">
                <div class="card ccard radius-t-0 h-100">
                    <div class="position-tl w-102 border-t-3 brc-primary-tp3 ml-n1px mt-n1px"></div>
                    <div class="card-header pb-3 brc-secondary-l3">
                        <h5 class="card-title mb-2 mb-md-0 text-dark-m3">
                            Friends Request
                        </h5>
                    </div>

                    <?php
                    $accept = 'accept';
                    $reject = 'reject';

               

                    while ($row = mysqli_fetch_assoc($query)) {
                        $x = rand(1, 9);
                        $src="https://bootdey.com/img/Content/avatar/avatar".$x.".png";
                        echo '
                        <div class="card-body pt-2 pb-1">
                            <div role="button" class="d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-style">
                                <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                                <img alt="" src="'.$src.'" class="h-4 w-4" />

                                </span>
                                <span class="text-default-d3 text-90 text-600">';
                        echo "<p>{$row['username']}</p>";
                        echo '
                                </span>
                                <span class="ml-auto text-green-m1 text-nowrap">
                                </span>
                                <span class="ml-2"></span>
                                <span class="ml-auto text-danger-m1 text-nowrap"></span>
                                <span class="ml-2">';
                                
                                echo "<a class='frequest-btn' href='friends_request.php?username={$_SESSION["username"]}&senderid=$id&receiverid=$row[id]&receivername={$row["username"]}'>Request</a>";
                        echo'
                                </span>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>