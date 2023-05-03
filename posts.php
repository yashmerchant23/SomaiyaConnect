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
<html>
<head>
	<title>Image Uploader</title>
	<link rel="stylesheet" href="mystyle.css">
</head>
<body  style="background-color:rgb(58, 53, 53);">
    <div style="display: flex; align-items: center; margin-top: 0px;">
        <h1 class="h1a" style="font-style: italic;color: rgb(233, 222, 222);text-shadow: 1px 1px rgba(70, 68, 68, 0.7);margin-left: 38px;">SomaiyaConnect</h1>
        <img src="graduate-hat.png" class="img3" style="padding:15px;height:43px; width:43px;filter: drop-shadow(0 0 0.08rem rgb(117, 120, 119));">
    </div>
	<div class="fileUpload" style="margin-left: 30%;margin-top:5%">
	<label for="newPost" class="h1a" style="color:rgb(198, 185, 185);font-weight:700;font-size: 25px; margin-top:5%">Upload a picture here </label>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		<h1 class="h1a" style="font-size:14px">Select an Image to Upload:</h1><br><br>
		<!-- <input type="file" id="file" name="file" accept="image/png, image/jpeg, image/jpg" hidden/>
            <label for="upload" class="chooseFile1" style="width:130px; margin-top:5%">Choose File </label><br><br> -->
			<input type="file"  name="file" id="file"><br><br>
			<input type="submit" class="chooseFile1" style="width:90px; margin-top:5%" name="submit"  id ="upload" value="Upload">
		</form>
	</div>


	<?php
	// Connect to database
	$conn = mysqli_connect("localhost", "root", "", "chat");

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Retrieve uploaded images from database
	$sql = "SELECT * FROM images ORDER BY id DESC LIMIT 5";
	$result = mysqli_query($conn, $sql);

	// // Display uploaded images in feed
	// if (mysqli_num_rows($result) > 0) {
	// 	while ($row = mysqli_fetch_assoc($result)) {
	// 		echo $row["username"];
	// 		echo '<br>';
	// 		echo '<img src="' . $row["file_path"] . '" width="200"><br>';
	// 	}
	// } else {
	// 	echo "No images uploaded yet.";
	// }

	mysqli_close($conn);
	?>

	<div class="menu" style=" display: flex; align-items: center;margin-top: 6.2%;margin-left: 32.5%;">
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
