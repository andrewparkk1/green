<?php

include(ROOT . "app/database/db.php");
include(ROOT . "app/helpers/middleware.php");


$table = 'topics';
$topics = selectAll($table);

$id = '';
$name = '';
$description = '';

if(isset($_POST['add-topic'])) {
    adminOnly();

    unset($_POST['add-topic']);
    $topic_id = create($table, $_POST);
    // $_SESSION['message'] = 'topic created successfully';
    // $_SESSION['type'] = 'success';
    header('location: ' . BASE . 'admin/topics/index.php');
    exit();
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if(isset($_POST['update-topic'])) {
    adminOnly();

    $id = $_POST['id'];
    unset($_POST['update-topic'], $_POST['id']);
    $topic_id = update($table, $id, $_POST);

    // $_SESSION['message'] = 'topic updated successfully';
    // $_SESSION['type'] = 'success';
    header('location: ' . BASE . 'admin/topics/index.php');
    exit();
}

if (isset($_GET['del_id'])) {
    adminOnly();

    $id = $_GET['del_id'];
    $count = delete($table, $id);
    header('location: ' . BASE . 'admin/topics/index.php');
    exit();
}

?>