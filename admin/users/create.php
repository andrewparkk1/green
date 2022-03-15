<?php include("../../path.php"); ?>
<?php include(ROOT . "app/controllers/users.php"); ?>


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

        input {
            width: full;
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
                    <h1>Add User</h1>
                    <div class="flex flex-row justify-between w-3/12">
                        <a href="create.php">Add User</a>
                        <a href="index.php">Manage Users</a>
                    </div>
                </div>

                <form action="create.php" method="post" class="py-5 space-y-5">
                    <div>
                        <label for="title">Username</label><br>
                        <input type="text" name="title">
                    </div>
                    <div>
                        <label for="title">Email</label><br>
                        <input type="email" name="email">
                    </div>
                    <div>
                        <label for="title">Password</label><br>
                        <input type="password" name="password">
                    </div>
                    <div>
                        <label for="title">Password Confirmation</label><br>
                        <input type="password" name="passwordConf">
                    </div>

                    <div>
                        <label for="role">Role</label><br>
                        <select name="topic">
                            <option value="Admin">Admin</option>
                            <option value="Editor">Editor</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit">Add User</button>
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