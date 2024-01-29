
<?php

include_once("config.php");
include_once("index1.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span>Login Form</span>
            </div>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data" >
              
                <div class="row">
                    <input type="text" name="username" placeholder="username" id="" autocomplete="off" required>
                </div>

                <div class="row">
                    <input type="password" name="pass" placeholder="password" required>
                </div>
                <div class="row">
                    <input type="password" name="repass" placeholder="re-type password" required>
                </div>
                <div class="row">
                    <input type="file" name="img">
                </div>
                <div class="pass"><a href="#">Forget password?</a></div>
                <div class="row button">
                    <input type="submit" name="submit" value="Signup">
                </div>
                <div class="signup-link">already have account ? <a href="login.php">Login</a></div>
    
            </form>
        </div>
    </div>
</body>
</html>

