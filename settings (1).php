<?php

//settings_page.php

include('database_connection.php');

session_start();

//if access is attempted without login then redirecting to login.php
if(!isset($_SESSION['user_id']))
{
    header('location:login.php');
}

if(isset($_POST["update"])){
    $new_username = $_POST["new_username"];
    $query = "UPDATE login SET username='$new_username' WHERE user_id='{$_SESSION['user_id']}'";
    $statement = $connect->prepare($query);
    $statement->execute();
    $_Session["username"] = $new_username;
}

if(isset($_POST["logout"])){
    header('location:logout.php');
}







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Settings-SomaiyaConnect</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body style="background-color: rgb(58, 53, 53);">

    <div style="display: flex; align-items: center; margin-top: 0px;">
        <h1 class="h1a" style="font-style: italic;color: rgb(233, 222, 222);text-shadow: 1px 1px rgba(70, 68, 68, 0.7);margin-left: 38px;">SomaiyaConnect</h1>
        <img src="graduate-hat.png" class="img3" style="padding:15px;height:43px; width:43px;filter: drop-shadow(0 0 0.08rem rgb(117, 120, 119));"> 
    </div> 
    <div style="margin-left:30%">
        <form  style="margin-top:15%; display:flexbox;" method ="POST">
            <section class="other">
                <label for="bio" class="h1a" style="color:rgb(198, 185, 185);font-weight:550;font-size: 25px;font-family: 'Courier New';">Edit Username</label>
                <input type="text" class="input3" style="height: 27px;" name = "new_username"><br>

            <br><br><br>
            <input type="submit" value="Update" class="button3" style="font-weight:700; margin-left:28.7%; font-size:21px; width:95px; height:37px" name = "update"><br><br>
        </form>
        <input type="submit" value="Logout" class="button3" name="logout" value= "Logout" style="font-weight:700; margin-left:28.7%; font-size:21px; width:95px; height:37px">
    </div>
8
    <div class="menu" style=" display: flex; align-items: center;margin-top: 10%;margin-left: 32.5%;">
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