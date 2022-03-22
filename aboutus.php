<?php include("path.php"); ?>
<?php include("app/controllers/users.php");
$topics = selectAll('topics');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Green</title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/tailwind.css">

</head>

<body>
    <div id="__next">
        <?php include(ROOT . "app/includes/header.php"); ?>

        <div class="flex flex-col text-center justify-center flex-grow mx-auto w-7/12 py-20">
            <h1>Meet the Team</h1>
            <br>
            <hr class="w-1/12 text-center justify-center mx-auto">
            <br>

            <div class="box-border grid grid-cols-3 gap-16" >
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
            </div>

            


        </div>

        <?php include("app/includes/footer.php"); ?>
    </div>
    
</body>

</html>