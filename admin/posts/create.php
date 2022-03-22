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