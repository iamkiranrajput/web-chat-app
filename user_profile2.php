<?php
include_once("config.php");

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: index.html");
}
$id = $_SESSION['id'];
$msgreceiverid = $_SESSION['msgreceiverid'];
$sql = "SELECT * FROM msgtable WHERE (rec_id=$id AND send_id=$msgreceiverid) OR (rec_id=$msgreceiverid AND send_id=$id)";
$query = mysqli_query($conn, $sql);

$output = '';
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $class = ($row['send_id'] == $id) ? 'outgoing' : 'incoming';

        $output .= '<div class="chat ' . $class . '">
            <div class="details">
                <p>' . $row['message'] . '</p>
            </div>
        </div>';
    }
}
echo $output;
?>
