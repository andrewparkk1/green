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
    <link rel="stylesheet" href="assets/css/tailwind.css">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div id="__next">
        <?php include(ROOT . "app/includes/header.php"); ?>

        <!-- WRITING -->
        <div class="flex flex-col px-52 pt-16 pb-10">
            <h1><?php echo $post['title']; ?></h1>
            <?php echo $post['username']; ?>
            <?php echo html_entity_decode($post['body']); ?>
        </div>

        <h1>COMMMENTS</h1>

        <div class="flex flex-row gap-8">
            <?php foreach($posts as $p): ?>
                <div class="w-3/12">
                    <a href="single.php?id=<?php echo $p['id']; ?>&username=<?php echo $p['username']; ?>">
                        <div class="hover:text-green-300 flex flex-col py-6 px-5 text-red-500 drop-shadow-2xl bg-cover object-cover w-full h-full font-thin" style="background-image: url(<?php echo BASE . 'assets/images/' . $p['image']; ?>);">
                            <p><?php echo $p['username']; ?></p>
                            <p><?php echo date('F j, Y', strtotime($p['created_at'])); ?></p>
                            <h1 class="mt-auto text-2xl"><?php echo $p['title']; ?></h1>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <?php include(ROOT . "app/includes/footer.php"); ?>



    </div>

</body>

</html>