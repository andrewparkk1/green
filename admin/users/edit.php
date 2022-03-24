<?php include("../../path.php"); ?>
<?php include(ROOT . "app/controllers/users.php"); ?>
<?php 
usersOnly();
if ($_GET['id'] != $_SESSION['id']) {
    if ($_SESSION['admin'] != 1) {
        $_SESSION['message'] = 'You are not this person';
        header('location: ' . 'index.php');
        exit(0);
    }
}

?>


<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Green</title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/tailwind.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
    <link rel="manifest" href="../../favicon/site.webmanifest">

</head>

<body>
    <div id="__next">
    <?php include(ROOT . "app/includes/adminHeader.php"); ?>

        <div class="flex flex-row justify-between flex-grow w-full">
        <?php include(ROOT . "app/includes/adminPages.php"); ?>
            <div class="flex flex-col bg-gray-100 border-black border-2 border-solid w-5/6 p-8 ">
                <div class="flex flex-row justify-between px-5">
                    <h1>Edit User</h1>
                    <?php include(ROOT . "app/includes/adminUsers.php"); ?>

                </div>

                <?php include(ROOT . "app/helpers/formErrors.php"); ?>

                <form action="edit.php" method="post" class="p-5 space-y-5">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label>Username</label><br>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </div>
                    <div>
                        <label>Email</label><br>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div>
                        <label>Password</label><br>
                        <input type="password" name="password">
                    </div>
                    <div>
                        <label>Password Confirmation</label><br>
                        <input type="password" name="passwordConf">
                    </div>

                    <div>
                        <?php if ($user['admin'] === 1): ?>
                            <label>
                                <input type="checkbox" name="admin" checked>Admin
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="admin">Admin
                            </label>
                        <?php endif; ?>
                    </div>
                    <div>
                        <button type="submit" name="update-user">Update User</button>
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