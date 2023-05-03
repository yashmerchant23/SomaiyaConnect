<?php

//login.php

include('database_connection.php');

session_start();

$message ='';

//check if user_id is set basically login has happenned or not
if(isset($_SESSION['user_id']))
{
    header('location:index.php');
}

if(isset($_POST["login"]))//button 'name' is login
{
    $query = "SELECT * FROM login WHERE username = :username";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
        ':username' => $_POST["username"]
        )
    );
    $count = $statement->rowCount();
    if($count > 0)//if true then it means username is correct and if false username is wrong
    {
    $result = $statement->fetchAll();
        foreach($result as $row)
        {
            if(password_verify($_POST["password"], $row["password"]))
        {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $sub_query = "INSERT INTO login_details (user_id) VALUES ('".$row['user_id']."')";
            $statement = $connect->prepare($sub_query);
            $statement->execute();
            $_SESSION['login_details_id'] = $connect->lastInsertId();
            header("location:homepage.php");
        }
        else
        {
        $message = "<label>Wrong Password</label>";
        }
        }
    }
    else
    {
    $message = "<label>Wrong Username</labe>";
    }
    }

?>



<html>  
    <head>  
        <title>Chat Application using PHP Ajax Jquery</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="mystyle.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
    <body style="background-color: rgb(193, 191, 191);background-image: linear-gradient(to right, rgb(57, 38, 38), rgba(185, 82, 47, 0.7));" >
    <div style="display: flex; align-items: center; margin-top: 0px;">
        <h1 class="h1a" style="font-style: italic;color: rgb(233, 222, 222);text-shadow: 1px 1px rgba(70, 68, 68, 0.7);margin-left: 38px;">SomaiyaConnect</h1>
        <img src="graduate-hat.png" class="img3" style="padding:15px;height:43px; width:43px;filter: drop-shadow(0 0 0.08rem rgb(117, 120, 119));">
    </div>
        <div class="container">
   <br />
   <div style="display: flex; align-items: center">
        <h1 class="Heading" style="margin-left: 70px;">Create, Connect, <br>Elevate</h1>
        <div  class="div1" style="margin-top: 60px; margin-left: 130px;"><br>
            <h1 class="counts" style="color:rgb(74, 58, 29);font-size:35px;margin-top:5px">Sign in!</h1>
            <form class="form1" style="margin-top:30px;align-items: center;" method ="POST">
            <p class="text-danger">
                <?php 
                echo $message; 
                ?>
                </p>
                <label for="Uname" class="h1a" style="color: rgb(32, 31, 31);font-weight:550;font-size: 23px;font-family: 'Courier New';">Username </label><br>
                <input type="text" class="input1" name ="username"><br><br>
                <label for="pwd" class="h1a" style="color: rgb(32, 31, 31);font-weight:550;font-size: 23px;font-family:  'Courier New';">Password </label><br>
                <input type="password" class="input1"name = "password"><br><br>
                <input type="submit" value="login" class="button1" style="font-weight:700" name = "login"></button><br><br><br>
                <a href=" "style="font-size: 15px;font-family:system-ui, -apple-system;margin-left:32%;" >Forgot Password?</href><br>
                <a href="register.php"style="font-size: 15px;font-family:system-ui, -apple-system;" >SignUp for SomaiyaConnect</href>
            </form> 
        </div>
    </div>
    </div>
   </div>
  </div>
    </body>  
</html>
