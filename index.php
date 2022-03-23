<?php 
include("path.php"); 
include(ROOT . "app/controllers/topics.php");
// $posts = selectAll('posts', ['published' => 1]);

$posts = array();
$postsTitle = "LATEST";
$postDescription = ""; 

if (isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']); 
    $postsTitle = $_GET['name'];
    $postDescription = getTopicDescription($_GET['t_id']);
} else if (isset($_POST['search-term'])) {
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
    <title><?php echo $postsTitle; ?> | The Green</title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/tailwind.css">
</head>

<body>
    <div id="__next">
        <!-- MAIN CONTAINER -->
            <?php include(ROOT . "app/includes/header.php"); ?>
            <div class="flex flex-col flex-grow w-7/12 mx-auto pb-16">

                <!-- SECTION HEADER -->
                <div class="pt-16 pb-10 font-semibold space-y-1">
                <?php include(ROOT . "app/includes/messages.php"); ?>
                    <h1 class="text-6xl"><?php echo $postsTitle; ?></h1>
                    <?php if ($postDescription == ""): ?>
                        <h2 class="text-xl">A collection of the latest creations by 
                            <a class="hover:underline underline-offset-auto" href="aboutus.php">
                                <span style="font-family: Parisienne; letter-spacing: 0.08em;" class="italic">the</span> 
                                <span style="font-family: Julius Sans One;" class="tracking-wide">GREEN's</span> 
                                editors.
                            </a>
                        </h2>
                        <?php elseif($postDescription == "The best of the Green"): ?>
                            <h2 class="text-xl">The best of 
                                <span style="font-family: Parisienne; letter-spacing: 0.08em;" class="italic">the</span> 
                                <span style="font-family: Julius Sans One;" class="tracking-wide">GREEN</span></h2>
                        <?php else: ?>
                            <h2 class="text-xl"><?php echo $postDescription; ?></h2>
                    <?php endif; ?>
                    <!-- <h5 class="text-xl font-semibold">A collection of the latest creations by <span class="font-[Parisienne] italic">the</span> <span class="font-extra-light font-['Julius_Sans_One']">GREEN's</span> editors</h5> -->
                </div>


                <!-- WRITING CONTAINER -->
                <div class="box-border grid grid-cols-2 gap-8" style="grid-auto-rows: 16rem;" >
                    <?php foreach($posts as $post): ?>
                        <div>
                            <a href="<?php echo $post['body']; ?>">
                                <div class="hover:text-black flex flex-col py-6 px-5 text-white drop-shadow-2xl bg-cover object-cover w-full h-full font-thin" style="background-image: url(<?php echo BASE . 'assets/images/' . $post['image']; ?>);">
                                    <p><?php echo $post['username']; ?></p>
                                    <p><?php echo date('F j, Y', strtotime($post['created_at'])); ?></p>
                                    <h2 class="mt-auto text-2xl"><?php echo $post['title']; ?></h2>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>

        <?php include(ROOT . "app/includes/footer.php"); ?>
    </div>
    
</body>

</html>