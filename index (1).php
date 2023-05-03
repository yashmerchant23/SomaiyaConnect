<?php

//index.php

include('database_connection.php');

session_start();

//if access is attempted without login then redirecting to login.php
if(!isset($_SESSION['user_id']))
{
    header('location:log    in.php');
}


?>

<!DOCTYPE html>
<html lang="en"> 
    <head>  
    <title>SomaiyaConnect</title>  
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="mystyle.css">
    </head>  
    <body  style="background-color:rgb(58, 53, 53);color: rgb(233, 222, 222)">
    <div style="display: flex;align-items: center;">  
        <h1 class="h1a" style="font-style: italic;color: rgb(233, 222, 222);text-shadow: 1px 1px rgba(70, 68, 68, 0.7);margin-left: 38px;">SomaiyaConnect</h1>
        <a href="http://127.0.0.1:5500/homepage.html">
            <img src="graduate-hat.png" class="img3" style="padding:15px;height:43px; width:43px;filter: drop-shadow(0 0 0.08rem rgb(117, 120, 119));">
        </a>
    </div>
    <div class="container">
    <h2 align="center" class="h1a" style="margin-top:0.5%;">Chats</a></h3>
    <div class="table-responsive">
        </div>
        <div id="user_details" class="contacts" 
            style="font-size: 25px;  
                color: rgb(192, 185, 185);
                text-shadow: 0.5px 0.5px 0.5px rgba(72, 71, 71, 0.516);
                font-family:system-ui, system-ui, -apple-system;margin-left:32%;font-weight:600;">
        </div>
        <div id = "user_model_details"></div>
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

<script>  
$(document).ready(function(){

    fetch_user();//calling the function below

    setInterval(function(){
        update_last_activity();//every 5 seconds last activity of the user will be updated in login-details table
        fetch_user();//every 5 seconds page wil reload
        update_chat_history_data();
    }, 1000);

    function fetch_user()
    {
        $.ajax({
            url:"fetch_user.php",
            method:"POST",
            success:function(data){
                $('#user_details').html(data);//for writing data in div id user-details
            }
        })
    }

    function update_last_activity(){//to send last activity data to the table
        $.ajax({
            url:"update_last_activity.php",
            success:function()
            {

            }
            })
    }

    function make_chat_dialog_box(to_user_id, to_user_name)
    {
        //html to make dialogue box
        var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="You have chat with '+to_user_name+'">';
        modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
        modal_content += fetch_user_chat_history(to_user_id);
        modal_content += '</div>';
        modal_content += '<div class="form-group">';
        modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control"></textarea>';
        modal_content += '</div><div class="form-group" align="right">';
        modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
        $('#user_model_details').html(modal_content);
    }

        $(document).on('click', '.start_chat', function(){
            var to_user_id = $(this).data('touserid');
            var to_user_name = $(this).data('tousername');
            make_chat_dialog_box(to_user_id, to_user_name);
            $("#user_dialog_"+to_user_id).dialog({
                autoOpen:false,
                width:400
            });
            $('#user_dialog_'+to_user_id).dialog('open');
        });

    $(document).on('click', '.send_chat', function(){
        var to_user_id = $(this).attr('id');
        var chat_message = $('#chat_message_'+to_user_id).val();//vetch value from chat message area and store it in chat_messsage variable
        $.ajax({
            url:"insert_chat.php",
            method:"POST",
            data:{to_user_id:to_user_id, chat_message:chat_message},
            success:function(data)
            {
                $('#chat_message_'+to_user_id).val('');
                $('#chat_history_'+to_user_id).html(data);
            }
        })
    });

    function fetch_user_chat_history(to_user_id)
    { 
    $.ajax({
        url:"fetch_user_chat_history.php",
        method:"POST",
        data:{to_user_id:to_user_id},
        success:function(data){
            $('#chat_history_'+to_user_id).html(data);
        }
    })
    }

    function update_chat_history_data()
    {
        $('.chat_history').each(function(){
            var to_user_id = $(this).data('touserid');
            fetch_user_chat_history(to_user_id);
        });
    }
        
    
});  
</script>
