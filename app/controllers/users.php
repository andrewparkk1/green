<?php

include(ROOT . "app/database/db.php");
include(ROOT . "app/helpers/validateUser.php");
include(ROOT . "app/helpers/middleware.php");


$errors = array();
$username = '';
$id = '';
$admin = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'users';

$admin_users = selectAll($table, ['admin' => 1]);
$all_users = selectAllOrdered($table, 'admin');

function loginUser($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are logged in';
    $_SESSION['type'] = 'Success';
    header('location: ' . BASE . 'admin/dashboard.php');

    // if($_SESSION['admin'] ) {
    //     header('location: ' . BASE . 'admin/dashboard.php');
    // } else {
    //     header('location: ' . BASE . 'index.php');
    // }
    exit();
}

if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['create-admin']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
            $_SESSION['message'] = "admin created";
            header('location: ' . BASE . "admin/users/index.php");
            exit();
        } else {
            $_POST['admin'] = 0;
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            loginUser($user);
        }
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}

if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table, ['username' => $_POST['username']]);
        if (isset($user) && password_verify($_POST['password'], $user['password'])) {
        // if (isset($user) && $_POST['password'] === $user['password']) {
            loginUser($user);
        } else {
            array_push($errors, "Wrong credentials");
        }
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();

    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = 'admin user deleted';
    header('location: ' . BASE . "admin/users/index.php");
    exit();
}

if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);
    $id = $user['id'];
    $username = $user['username'];
    $email = $user['email'];
    // $admin = isset($user['admin']) ? 1 : 0;
    $admin = $user['admin'];
}

if (isset($_POST['update-user'])) {
    adminOnly();
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['passwordConf'], $_POST['update-user'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user = selectOne($table, ['id' => $id]);
        $_POST['admin'] = isset($user['admin']) ? 1 : 0;
        $user_id = update($table, $id, $_POST);
        $_SESSION['message'] = "admin updated";
        header('location: ' . BASE . "admin/users/index.php");
        exit();
    } else {
        $username = $_POST['username']; 
        $email = $_POST['email'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}



?>