<!--
//register.php
!-->

<?php

include('database_connection.php');

session_start();

$message = '';

if(isset($_SESSION['user_id']))
{
    header('location:index.php');
}

if(isset($_POST["register"]))
    {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $check_query = "SELECT * FROM login 
    WHERE username = :username
    ";
    $statement = $connect->prepare($check_query);
    $check_data = array(
    ':username'  => $username
    );
    if($statement->execute($check_data)) 
    {
        if($statement->rowCount() > 0)
        {
            $message .= '<p><label>Username already taken</label></p>';
        }
        else
        {
            if(empty($username))
            {
                $message .= '<p><label>Username is required</label></p>';
            }
            if(empty($password))
            {
                $message .= '<p><label>Password is required</label></p>';
            }
            else
            {
                if($password != $_POST['confirm_password'])
                {
                    $message .= '<p><label>Password not match</label></p>';
                }
            }
        $emailend= "@somaiya.edu";   
        if (!str_ends_with($email,$emailend)) {
            $message .= '<p><label>Provide a valid somaiya email id</label></p>';
        }
            
            if($message == '')
            {
                $data = array(
                ':username'  => $username,
                ':password'  => password_hash($password, PASSWORD_DEFAULT)
                );

                $query = "INSERT INTO login 
                (username, password) 
                VALUES (:username, :password)
                ";
                $statement = $connect->prepare($query);
                if($statement->execute($data))
                {
                $message = "<label>Registration Completed</label>";
                }
            }
        }
    }
}

?>



<html>
<head>
    <title>SignUp-SomaiyaConnect</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body style="background-color: rgb(193, 191, 191);background-image: linear-gradient(to right, rgb(57, 38, 38), rgba(185, 82, 47, 0.7));">
    <div style="display: flex; align-items: center; margin-top: 0px;">
        <h1 class="h1a" style="font-style: italic;color: rgb(233, 222, 222);text-shadow: 1px 1px rgba(70, 68, 68, 0.7);margin-left: 38px;">SomaiyaConnect</h1>
        <img src="graduate-hat.png" class="img3" style="padding:15px;height:43px; width:43px;filter: drop-shadow(0 0 0.08rem rgb(117, 120, 119));">
    </div>
    <div class="signupForm" style="margin-left:30%">
    <span class="text-danger"><?php echo $message; ?></span>
        <form  style="margin-top:25px" method ="POST">
            <section class="other">
                <h1 class="counts" style="color:rgb(74, 58, 29);font-size:35px;margin-top:2px">Create Your account !</h1><br><br>
                <label for="Name" class="h1a" style="color: rgb(32, 31, 31);font-weight:550;font-size: 23px;font-family: 'Courier New';">Name   </label>
                <input type="text" class="input1"><br><br>
                <label for="userName" class="h1a" style="color: rgb(32, 31, 31);font-weight:550;font-size: 23px;font-family: 'Courier New';">Create Username</label>
                <input type="text" class="input1" name ="username"><br><br>

                <label for="gender" class="h1a" style="color: rgb(32, 31, 31);font-weight:550;font-size: 23px;font-family: 'Courier New';">Gender   </label>
                <input type="text" class="input1" name="gender"><br><br>

                <label for="email" class="h1a" style="color: rgb(32, 31, 31);font-weight:550;font-size: 23px;font-family: 'Courier New';">Email Id   </label>
                <input type="text" class="input1" name="email"><br><br>
                <label for="gradYear" class="h1a" style="color: rgb(32, 31, 31);font-weight:550;font-size: 23px;font-family: 'Courier New';">Year of graduation   </label>
                <input type="number" min="1987" max="2026" class="input1"><br><br>
                <label for="branch" class="h1a" style="color: rgb(32, 31, 31);font-weight:550;font-size: 23px;font-family: 'Courier New';">Branch   </label>
                <input type="text" class="input1"><br><br>
                <label for="crtpwd" class="h1a" style="color: rgb(32, 31, 31);font-weight:550;font-size: 23px;font-family:  'Courier New';">Create Password   </label>
                
                <input type="text" name="password" class="input1"><br><br>

                <label for="cnfrmpwd" class="h1a" style="color: rgb(32, 31, 31);font-weight:550;font-size: 23px;font-family:  'Courier New';">Confirm Password   </label>
                <input type="text" name = 'confirm_password' class="input1"><br><br>
            </section>
            <div class="submitDiv">
            <input type="submit" value="SignUp" class="button1" name="register" style="font-weight:700;" ><br><br>
            </div>
        </form> 
        <div class="haveAccDiv">
            <a href="login.php" style="font-size: 17px;font-family:system-ui, -apple-system;">Already have an Account?</href>
        </div>
    </div>
</body>
</html>