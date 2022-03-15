<?php

include(ROOT . "app/database/db.php");
include(ROOT . "app/helpers/validatePost.php");

$table = 'posts';
$topics = selectAll('topics');
$posts = selectAll($table);
$errors = array();

$title = '';
$body = '';
$topic_id = '';
$published = '';
// $image_name = '';

if(isset($_POST['add-post'])) {
    dd($_FILES['image']);

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
    $errors = validatePost($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = 17;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);

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

?>