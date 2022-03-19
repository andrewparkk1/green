<?php

include("../../path.php");

function usersOnly($redirect = 'index.php') {
    if (empty($_SESSION['id'])) {
        $_SESSION['message'] = 'you need to login first';
        header('location: ' . BASE . $redirect);
        exit(0);
    }
}

function adminOnly($redirect = 'index.php') {
    if (empty($_SESSION['id']) || empty($_SESSION['admin'])) {
        $_SESSION['message'] = 'you are not authorized';
        header('location: ' . BASE . $redirect);
        exit(0);
    }
}
 
function guestsOnly($redirect = 'index.php') {
    if (isset($_SESSION['id'])) {
        header('location: ' . BASE . $redirect);
        exit(0);
    } 
}


?>