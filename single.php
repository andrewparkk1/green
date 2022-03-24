<?php 
include("path.php"); 
// include(ROOT . "app/controllers/topics.php");
include(ROOT . 'app/controllers/posts.php');
if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
    $post['username'] = $_GET['username'];
}

// $posts = selectAll('posts', ['published' => 1]);

$posts = array();

if (isset($_POST['search-term'])) {
    $posts = searchPosts($_POST['search-term']);
} else {
    $posts = getPublishedPosts();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title']; ?> | The Green</title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/tailwind.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">

</head>

<body>
    <div id="__next">
        <?php include(ROOT . "app/includes/header.php"); ?>
        <div class="flex flex-col flex-grow w-5/12 mx-auto pb-16">
            <!-- WRITING -->
            <div class="flex flex-col px-12 pt-16 pb-10">
                <h1><?php echo $post['title']; ?></h1>
                <p><?php echo $post['username']; ?></p>
                <p><?php echo date('F j, Y', strtotime($post['created_at'])); ?></p>
                <br>
                <?php echo html_entity_decode($post['body']); ?>
            </div>
        </div>
        
        <?php include(ROOT . "app/includes/footer.php"); ?>



    </div>

</body>

</html>