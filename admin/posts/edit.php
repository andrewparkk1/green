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
                    <h1>Edit Post</h1>
                    <div class="flex flex-row justify-between w-3/12">
                        <a href="create.php">Create Topic</a>
                        <a href="index.php">Manage Topics</a>
                    </div>
                </div>
 
                <form action="edit.php" method="post" class="py-5 space-y-5">
                    <div>
                        <label for="title">Name</label><br>
                        <input type="text" name="name" value="<?php echo $name; ?>">
                    </div>
                    <div>
                        <label for="body">Description</label>
                        <textarea name="description" id="editor"><?php echo $description; ?></textarea>
                    </div>
                    <div>
                        <button type="submit" name="update-topic">Update Topic</button>
                    </div>
                </form>

                <form action="edit.php" method="post" class="py-5 space-y-5">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label for="title">Title</label><br>
                        <input type="text" name="title">
                    </div>
                    <div>
                        <label for="body">Body</label>
                        <textarea name="body" id="editor"></textarea>
                    </div>
                    <div>
                        <label for="image">Image</label><br>
                        <input type="file" name="image">
                    </div>
                    <div>
                        <label for="topic">Topic</label><br>
                        <select name="topic">
                            <option value="Opinion">Opinion</option>
                            <option value="Creative-Writing">Creative Writing</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit">Add Post</button>
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