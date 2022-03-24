<?php include("../../path.php"); ?>
<?php include(ROOT . "app/controllers/users.php"); ?>
<?php usersOnly(); ?>


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
                    <h1>Manage Users</h1>
                    <?php include(ROOT . "app/includes/adminUsers.php"); ?>
                </div>
                <?php include(ROOT . "app/includes/messages.php"); ?>


                <div class="p-5 text-left">
                    <table class="w-full border-collapse">
                        <thead>
                            <th>ID</th>
                            <th>Admin</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>

                            <?php foreach($all_users as $key => $user): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $user['admin']; ?></td>
                                    <td><?php echo $user['username']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><a class="text-green-500 hover:text-green-700" href="edit.php?id=<?php echo $user['id']; ?>">Edit</a></td>
                                    <td><a class="text-red-500 hover:text-red-700" href="index.php?delete_id=<?php echo $user['id']; ?>">Delete</a></td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>


            </div>
        </div> 

        <?php include(ROOT . "app/includes/footer.php"); ?>

    </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>

        <script src="../../assets/js/scripts.js"></script>
    
</body>

</html>