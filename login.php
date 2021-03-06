<?php include("path.php"); ?>
<?php include("app/controllers/users.php"); 
$topics = selectAll('topics');
guestsOnly(); ?>


<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | The Green</title>
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


        <div class="flex flex-col text-center justify-center flex-grow mx-auto w-1/4">
            <form action="login.php" method="post" class="bg-slate-400 border-2 border-black py-5 space-y-5 text-left px-5">
                <h1 class="text-center">Login</h1>
                <?php include(ROOT . "app/helpers/formErrors.php"); ?>

                <div>
                    <p>Username</p>
                    <input type="text" name="username" value="<?php echo $username; ?>" class="border-2 border-black w-full">
                </div>
                <div>
                    <p>Password</p>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="border-2 border-black w-full">
                </div>
                
                <button type="submit" name="login-btn" class="border-2 border-black bg-black-300 p-2">Login</button>
                <p class="text-center">Or <a class="underline underline-offset-4 hover:text-gray-500" href="register.php">Sign up</a></p>
            </form> 
        </div> 

        <?php include("app/includes/footer.php"); ?>

    </div>
    
</body>

</html>