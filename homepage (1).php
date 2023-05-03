<?php

//homepage.php

include('database_connection.php');

session_start();

//if access is attempted without login then redirecting to login.php
if(!isset($_SESSION['user_id']))
{
    header('location:login.php');
}


?>




    <!DOCTYPE html>
    <html lang="en">
<head>
<title>Home-SomaiyaConnect</title>
<link rel="stylesheet" href="mystyle.css">
</head> 
<body  style="background-color:rgb(58, 53, 53);">
    <div style="display: flex; align-items: center; margin-top: 0px;">
        <h1 class="h1a" style="font-style: italic;color: rgb(233, 222, 222);text-shadow: 1px 1px rgba(70, 68, 68, 0.7);margin-left: 38px;">SomaiyaConnect</h1>
    <div style="display: flex;flex-direction:column; align-items: center; margin-top: 0px;">
        <img src="graduate-hat.png" class="img3" style="padding:15px;height:43px; width:43px;filter: drop-shadow(0 0 0.08rem rgb(117, 120, 119));">
        
</div>
        <div class="div3" style="margin-left: 7%;display: flex;">
        <form>
            <input class="input2" type="text" style="text-align: center;" placeholder="Search Here">
        </form>
    </div > 
        <a style="margin-left:6%" href="posts.php">
            <img src="post-office.png"  class="img1" style="padding: 15px;width: 60px; height:60px;margin-left: 5       0px;filter: drop-shadow(0 0 0.11rem rgb(178, 186, 182));">
        </a>
    </div> 

    <div class="feed-scrollbar">
  <div class="scroll-content">
  <div class="feed" style="display: flex; margin-left: 32.5%;">
        <div class="scrollbar scrollbar-young-passion">
            <div class="force-overflow"></div>
        </div>
        <?php
        // Connect to database
        $conn = mysqli_connect("localhost", "root", "", "chat");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve uploaded images from database
        $sql = "SELECT * FROM images ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);

        // Display uploaded images in feed
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="pics" style="font-weight:500;">';
                echo '<div class="username" style="margin-left:5px;">' . $row["username"] . '</div>';
                echo '<img src="' . $row["file_path"] . '" width="480" >';
                echo '</div>';
            }
        }
        mysqli_close($conn);
        ?>
    </div>
  </div>
</div>

    
    <div class="menu" style=" display: flex; align-items: center;margin-top: 8px;margin-left: 32.5%;">
        <a href="homepage.php">
            <img src="2544087.png"  class="img1" style="padding: 15px;width: 70px;height:63px;filter: drop-shadow(0 0 0.15rem rgb(185, 191, 188));">
        </a>
        <img src="connect2.png" class="img1" style="padding: 15px;width: 65px;height:65px;filter: drop-shadow(0 0 0.25rem rgb(89, 113, 90));">
        <a href="index.php">
            <img src="chat.png" class="img1" style="padding: 15px;width: 71px;height:75px;filter: drop-shadow(0 0 0.30rem rgb(46, 32, 125));">
        </a>
        <a href="profile.php">
            <img src="user.png" class="img1" style="padding: 15px;width: 67px;height:67px;filter: drop-shadow(0 0 0.28rem rgb(81, 21, 34));">
        </a>
        <a href="settings.php">
            <img src="settings.png" class="img2" style="padding: 15px;width: 65px;height:65px;filter: drop-shadow(0 0 0.22rem rgb(209, 180, 51));">
        </a>
    </div>
</body>
</html> 






