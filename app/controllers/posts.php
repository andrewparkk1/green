<?php

include(ROOT . "app/database/db.php");
include(ROOT . "app/helpers/validatePost.php");
include(ROOT . "app/helpers/middleware.php");

$table = 'posts';
$topics = selectAll('topics');
$posts = selectAllOrdered($table, 'id');
$errors = array();

$id = '';
$title = '';
$body = '';
$topic_id = '';
$published = '';
$image_name = '';

if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $topic_id = $post['topic_id'];
    $published = $post['published'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "post deleted successfully";
    header('location: ' . BASE . 'admin/posts/index.php');
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "post published state changed";
    header('location: ' . BASE . 'admin/posts/index.php');
    exit();
}

if(isset($_POST['add-post'])) {
    usersOnly();
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT . "assets/images/" . $image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "failed to upload image");
        }
    } else {
        array_push($errors, "Post image required");
    }

    if (count($errors) === 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        // $_POST['body'] = htmlentities($_POST['body']);

        $post_id = create($table, $_POST);
        dd($post_id);
        $_SESSION['message'] = "post created successfully";
        header('location: ' . BASE . 'admin/posts/index.php');
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


if(isset($_POST['update-post'])) {
    // adminOnly();
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT . "assets/images/" . $image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "failed to upload image");
        }
    } else {
        array_push($errors, "Post image required");
    }

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);

        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "updated successfully";
        header('location: ' . BASE . 'admin/posts/index.php');
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}

function getUsername($post_id) {
    $post = selectOne('posts', ['id' => $post_id]);
    $user = selectOne('users', ['id' => $post['user_id']]);
    return $user['username'];
}

function getUserId($post_id) {
    $post = selectOne('posts', ['id' => $post_id]);
    $user = selectOne('users', ['id' => $post['user_id']]);
    return $user['id'];
}


?>