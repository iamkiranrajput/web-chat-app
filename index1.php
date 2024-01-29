<?php

include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['img'])) {
    $file = $_FILES['img'];
    $file_name = $_FILES['img']['name'];
    $filetemp = $_FILES['img']['tmp_name'];
    move_uploaded_file($filetemp, "upload/" . $file_name);
    $filename = "upload/" . $file_name;

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);
    $repass = filter_input(INPUT_POST, 'repass', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($repass != $pass) {
        ?>
        <script>alert("password not match");</script>
        <?php
    } else {
        // $hashed = password_hash($pass, PASSWORD_DEFAULT);

        // Check if the username is already registered
        $check = "SELECT * FROM registration WHERE username ='$username'";
        $query = mysqli_query($conn, $check);

        if (mysqli_num_rows($query) > 0) {
            ?><script>alert("Already Registered");</script>
            <?php
        } else {
            // Insert new user into the database
            $sql = "INSERT INTO registration(username, password, img) VALUES ('$username', '$pass', '$filename')";
            try {
                $query = mysqli_query($conn, $sql);
                if ($query) {
                    header("Location: login.php");
                }
            } catch (mysqli_sql_exception $e) {
                ?>
                <script>alert("Something went wrong: <?php echo $e->getMessage(); ?>");</script>
                <?php
            }
        }
    }
}

?>
