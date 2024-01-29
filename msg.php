<?php
include_once("config.php");
session_start();
    if(!isset($_SESSION['id'])){
        header("Location:index.php");
    }
$id=$_SESSION['id'];

$msgreceiverid=$_GET['msgreceiverid'];
$_SESSION['msgreceiverid']=$msgreceiverid;

$query="SELECT * FROM registration WHERE id='$msgreceiverid'";
$result=mysqli_query($conn, $query);

while($row=mysqli_fetch_assoc($result)){
    $rec_name=$row['username'];
    // $img=$row['img'];

    $a=rand(1,8);
    $img=" https://bootdey.com/img/Content/avatar/avatar".$a.".png";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message with <?php echo $msgreceiverid;?></title>
    <link rel="stylesheet" href="style1111.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body style="background-image: linear-gradient(to right top, #508ff0, #00b2eb, #48cacf, #a0dabd, #dee7c9);">

    <div class="wrapper">
        
      <section class="chat-area">
        <header>
          <a href="friends.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
          <img src="<?php echo $img ?>" alt='img'>
          <div class="details">
            <span><?php echo"$rec_name";?></span>

          </div>
        </header>
        <div class="chat-box" style="background-color:#a0dabd">
  
        </div>
        <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $msgreceiverid; ?>" hidden>
          <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
          <button style="background-color:#00b2eb;">send</button>
        </form>
      </section>
    </div> 
  <script src="msg.js"></script>

</body>
</html>







