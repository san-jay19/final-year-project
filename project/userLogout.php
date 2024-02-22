<?php

session_start();
if(isset($_SESSION['auth'])){
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    unset($_SESSION['user_details']);
    $_SESSION['message'] = "Logged Out Successfully";
}

header('Location: index.php');

?>