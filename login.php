<?php

include_once("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbook Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span>Login Form</span>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

                <div class="row">
                    <input type="text" name="username" placeholder="username" id="" autocomplete="off">
                </div>
                <div class="row">
                    <input type="password" name="pass" placeholder="password" id="">
                </div>
                <div class="pass"><a href="#">Forget password?</a></div>
                <div class="row button">
                    <input type="submit" name="submit" value="Login">
                </div>
                <div class="signup-link">Not a member ? <a href="index.php">Signup now</a></div>
    
            </form>
        </div>
    </div>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $username=filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $pass=filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);
    $sql = "SELECT * FROM registration WHERE username = '$username' AND password='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['username'];
        header("Location:friends.php");
          

        } else {
            echo 'Incorrect password';
        }
    } 
?>
