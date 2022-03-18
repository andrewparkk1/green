<?php include("../../path.php"); ?>
<?php include(ROOT . "app/controllers/users.php"); ?>
<?php adminOnly(); ?>


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
        <?php include(ROOT . "app/includes/adminHeader.php"); ?>

        <div class="flex flex-row justify-between flex-grow px-10 w-full py-10">
            <?php include(ROOT . "app/includes/adminPages.php"); ?>

            <div class="flex flex-col bg-green-100 w-5/6 p-5">
                <div class="flex flex-row justify-between">
                    <h1>Manage Users</h1>
                    <div class="flex flex-row justify-between w-3/12">
                        <a href="create.php">Add User</a>
                        <a href="index.php">Manage Users</a>
                    </div>
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
                                    <td><a href="edit.php?id=<?php echo $user['id']; ?>">edit</a></td>
                                    <td><a href="index.php?delete_id=<?php echo $user['id']; ?>">delete</a></td>
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