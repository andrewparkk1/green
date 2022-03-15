<?php include("../../path.php"); ?>
<?php include(ROOT . "app/controllers/posts.php"); ?>

<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Green</title>
    <link rel="stylesheet" href="../../assets/css/tailwind.css">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <style>

        th, td {
            padding: 15px;
            text-align: left; 
            border-bottom: 1px solid #d3d3d3;
        }
    </style>
</head>

<body>
    <div id="__next">
        <?php include(ROOT . "app/includes/header.php"); ?>

        <div class="flex flex-row justify-between flex-grow px-10 w-full py-10">
        <?php include(ROOT . "app/includes/adminPages.php"); ?>
            <div class="flex flex-col bg-green-100 w-5/6 p-5">
                <div class="flex flex-row justify-between">
                    <h1>Add Posts</h1>
                    <div class="flex flex-row justify-between w-3/12">
                        <a href="create.php">Create Post</a>
                        <a href="index.php">Manage Posts</a>
                    </div>
                </div>

                <?php include(ROOT . "app/helpers/formErrors.php"); ?>

                <form action="create.php" method="post" class="py-5 space-y-5" enctype="multipart/form-data">
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