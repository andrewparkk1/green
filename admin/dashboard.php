<?php include("../path.php"); ?>
<?php include(ROOT . "app/controllers/posts.php"); ?>
<?php adminOnly(); ?>


<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/tailwind.css">

</head>

<body>
    <div id="__next">
    <?php include(ROOT . "app/includes/adminHeader.php"); ?>

        <div class="flex flex-row justify-between flex-grow w-full">
            <?php include(ROOT . "app/includes/adminPages.php"); ?>
            <div class="flex flex-col bg-gray-100 border-black border-2 border-solid w-5/6 p-8 ">
                <div class="flex flex-row justify-between px-5">
                    <h1>Dashboard</h1>
                </div>
                <?php include(ROOT . "app/includes/messages.php"); ?>
            </div>
        </div> 

        <?php include(ROOT . "app/includes/footer.php"); ?>

    </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>

        <script src="../assets/js/scripts.js"></script>
    
</body>

</html>