<?php


//index.php

include('database_connection.php');

session_start();

//if access is attempted without login then redirecting to login.php
if(!isset($_SESSION['user_id']))
{
    header('location:login.php');
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Connect to database
	$conn = mysqli_connect("localhost", "root", "", "chat");

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Define file path and name
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);

	// Move file to target directory
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
		// Insert file information into database
		$file_name = $_FILES["file"]["name"];
		$file_path = $target_file;
		$username = $_SESSION['username'];
		$sql = "INSERT INTO images (file_name, file_path, username) VALUES ('$file_name', '$file_path','$username')";
		if (mysqli_query($conn, $sql)) {
			header('location:homepage.php');
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	} else {
		echo "Error uploading image.";
	}

	mysqli_close($conn);
}
?>
