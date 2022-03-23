<?php include("../../path.php"); ?>
<?php include(ROOT . "app/controllers/posts.php"); ?>
<?php adminOnly(); ?>


<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Green</title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/tailwind.css">

</head>

<body>
    <div id="__next">
        <?php include(ROOT . "app/includes/adminHeader.php"); ?>

        <div class="flex flex-row justify-between flex-grow w-full">
        <?php include(ROOT . "app/includes/adminPages.php"); ?>
            <div class="flex flex-col bg-gray-100 border-black border-2 border-solid w-5/6 p-8 ">
                <div class="flex flex-row justify-between px-5">
                    <h1>Create Post</h1>
                    <?php include(ROOT . "app/includes/adminPosts.php"); ?>
                </div>

                <?php include(ROOT . "app/helpers/formErrors.php"); ?>

                <form action="create.php" method="post" class="p-5 space-y-5" enctype="multipart/form-data">
                    <div>
                        <label for="title">Title</label><br>
                        <input type="text" name="title" value="<?php echo $title; ?>">
                    </div>
                    <div>
                        <label for="body">Body</label> 
                        <textarea name="body" id="editor"><?php echo $body; ?></textarea>
                    </div>
                    <div>
                        <label for="image">Image</label><br>
                        <input type="file" name="image">
                    </div>
                    <div>
                        <label for="topic_id">Topic</label><br>
                        <select name="topic_id">
                            <option value=""></option>
                                <?php foreach($topics as $key => $topic): ?>
                                    <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                                        <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <!-- <option value="Opinion">Opinion</option>
                            <option value="Creative-Writing">Creative Writing</option> -->
                        </select>
                    </div>
                    <div>
                        <?php if (empty($published)): ?>
                            <label><input type="checkbox" name="published">Publish</label>
                        <?php else: ?>
                            <label><input type="checkbox" name="published" checked>Publish</label>
                        <?php endif; ?>
                    </div>
                    <div>
                        <button type="submit" name="add-post">Add Post</button>
                    </div>
                </form>



            </div>
        </div> 

        <?php include(ROOT . "app/includes/footer.php"); ?>

    </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>

        <script src="../../assets/js/scripts.js"></script>
    
</body>

</html>


<a href="single.php?id=<?php echo $post['id']; ?>&username=<?php echo $post['username']; ?>">


<!-- about page -->
<?php foreach($admin_users as $u): ?>
                    <div class="flex flex-col text-center justify-center space-y-4">
                        <img src="assets/images/1647533896_park, andrew.jpg" alt="" style="width: 223px; height: 223px; object-fit: cover; border-radius: 50%;" class="block mx-auto">
                        <h1><?php echo $u['username']; ?></h1>
                        <a href="https://www.linkedin.com/in/andrew-park-9508b8202/" target="_blank">
                            <svg  class="block mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                        </a>
                        <p>Andrew Park is the editor-in-chief of the Green. He creates videos and blog pieces. His academic interests are computer science and business. </p>
                    </div>
                <?php endforeach; ?>