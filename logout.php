<?php
//require_once('./php/session.php');
//require_once('./core/connection.php');
session_start();

if(isset($_GET['multiple-sessions'])){
  setcookie("multiple_sessions", "true", time() + (10), "/"); //holds true for 10 seconds
  if(session_destroy()) {
      header("Location: " . $directory . "login");         //?multiple_sessions=true&logged_out=true");
  }
}

//fix this because it doesnt work damnit
if(session_destroy()) {
//    $account_id = $user['account_id'];

    //clears computer_session after logout
//    $sql = "UPDATE accounts SET computer_session = '' WHERE account_id = " . $account_id;
//    if (mysqli_query($connection, $sql)) {
        header("Location: " . $directory . "login");        //?logged_out=true");
//    } else {
//        echo $connection->error;
//    }
}
echo "";