<?php

//index.php

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
    <title>Profile-SomaiyaConnect</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body  style="background-color: rgb(58, 53, 53);">
    <div style="display: flex;align-items: center;">  
        <h1 class="h1a" style="font-style: italic;color: rgb(233, 222, 222);text-shadow: 1px 1px rgba(70, 68, 68, 0.7);margin-left: 38px;">SomaiyaConnect</h1>
        <a href="http://127.0.0.1:5500/homepage.html">
            <img src="graduate-hat.png" class="img3" style="padding:15px;height:43px; width:43px;filter: drop-shadow(0 0 0.08rem rgb(117, 120, 119));">
        </a>
    </div>
    <div style="display: flex;">
        <div style="display: inline-grid; align-items: center;margin-top:2%;margin-left: 8%; ">
            <div class="pfp">
                <img class="pfpImg" src="user.png">
            </div>
                <h2 class="counts" style="font-size:30px; margin-top:1px"><?php echo $_SESSION['username'] ?></h2>
        </div>

        
        <div class="feed" style="display: flex; margin-left: 10%;">
        
        <?php
        // Connect to database
        $conn = mysqli_connect("localhost", "root", "", "chat");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $username = $_SESSION["username"];
        // Retrieve uploaded images from database
        $sql = "SELECT * FROM images WHERE username = '$username' ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);

        // Display uploaded images in feed
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="pics">';
                echo '<div class="username" style="font-weight:500;">' . $row["username"] . '</div>';
                echo '<img src="' . $row["file_path"] . '" width="400" >';
                echo '</div>';
            }
        }
        mysqli_close($conn);
        ?>
    </div>
        <div class="portfolio" style="margin-left: 30px; text-align:center; ">
            <h1 class="counts" style="font-size:35px; margin-top:10px">Portfolio</h1>
            <section class="other">
                <form>
                    <label for="resume" class="h1a" 
                    style="color:rgb(198, 185, 185);font-weight:700;font-size: 25px; margin-top:10%">Upload your resume </label>
                    <input type="file" id="upload" name="myfile" accept="image/png, image/jpeg, image/jpg"  hidden/>
                        <label for="upload" class="chooseFile1" style="width:130px; margin-top:5%">Choose File</label><br><br>
                </form>
                <input type="submit" value="Submit" class="button3" style="font-weight: 700;">
            </section>
        </div>
    </div>  

    <div class="menu" style=" display: flex; align-items: center;margin-top: 1.1%;margin-left: 32.5%;">
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