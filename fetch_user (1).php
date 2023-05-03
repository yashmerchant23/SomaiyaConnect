<?php

//fetch_user.php

include('database_connection.php');

session_start();

//fetching all user's data except the currently logged in user
$query = "SELECT * FROM login WHERE user_id != '".$_SESSION['user_id']."' ";

$statement = $connect->prepare($query);//make query for execute

$statement->execute();//executing query

$result = $statement->fetchAll();//to store all the fetched data from the query

//html code is used
$output = '
<table >
    <tr>
    <td>Username</td>
    <td>Notification</td>
    <td>Status</td>
    <td>Action</td>
    </tr>
';

foreach($result as $row)
{
    $status = '';
    $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
    $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
    $user_last_activity = fetch_user_last_activity($row['user_id'], $connect);
    //current_timestamp is the login time and last activity is the current time which updates every 5 seconds
    if($user_last_activity > $current_timestamp)
    {
        $status = '<span class="label label-success">Online</span>';
    }
    else
    {
        $status = '<span class="label label-danger">Offline</span>';
    }
    $output .= '
    <tr>
    <td>'.$row['username'].'</td>
    <td>'.count_unseen_message($row['user_id'], $_SESSION['user_id'], $connect).'</td>
    <td>'.$status.'</td>
    <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['user_id'].'" data-tousername="'.$row['username'].'">Chat</button></td>
    </tr>
    ';
}

$output .= '</table>';//ending the table in output
//.= means appending the string in a variable

echo $output;

?>
