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
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">

</head>

<body>
    <div id="__next">
        <?php include(ROOT . "app/includes/header.php"); ?>

        <div class="flex flex-col text-center justify-center flex-grow mx-auto w-7/12 py-20">
            <h1>Meet the Team</h1>
            <br>
            <hr class="w-1/12 text-center justify-center mx-auto">
            <br>

            <div class="box-border grid grid-cols-3 gap-16 items-start" >
                <div class="flex flex-col text-center justify-center space-y-4">
                    <img src="assets/images/andrew.jpeg" alt="" style="width: 223px; height: 223px; object-fit: cover; border-radius: 50%;" class="block mx-auto">
                    <h2 class="text-xl font-semibold">Andrew Park</h2>
                    <a href="https://www.linkedin.com/in/andrew-park-9508b8202/" target="_blank">
                        <svg  class="block mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <p>Andrew Park is the editor-in-chief of the Green. He creates videos and blog pieces. His academic interests are computer science and business. </p>
                </div>
                
                <div class="flex flex-col text-center justify-center space-y-4">
                    <img src="assets/images/r.JPG" alt="" style="width: 223px; height: 223px; object-fit: cover; border-radius: 50%;" class="block mx-auto">
                    <h2 class="text-xl font-semibold">Reagan Phelps</h2>
                    <a href="https://www.linkedin.com/in/reagan-phelps-90a468224" target="_blank">
                        <svg  class="block mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <p>Reagan Phelps is a junior at the Gatton Academy. She writes short stories in the genres of suspense, horror, sci-fi, and mystery, as well as poetry and nonfiction works. Reagan conducts research in psychology and spends most of her free time writing.</p>
                </div>
                
                <div class="flex flex-col text-center justify-center space-y-4">
                    <img src="assets/images/nate.jpeg" alt="" style="width: 223px; height: 223px; object-fit: cover; border-radius: 50%;" class="block mx-auto">
                    <h2 class="text-xl font-semibold">Nate Hogg</h2>
                    <a href="https://www.linkedin.com/in/nathan-hogg-08904517b" target="_blank">
                        <svg  class="block mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <p>Nate is a current junior at the Gatton Academy. He is passionate about journalism, and is currently the Co-President of the Green. </p>
                </div>

                <div class="flex flex-col text-center justify-center space-y-4">
                    <img src="assets/images/a.jpeg" alt="" style="width: 223px; height: 223px; object-fit: cover; border-radius: 50%;" class="block mx-auto">
                    <h2 class="text-xl font-semibold">Armaan Rai</h2>
                    <a href="https://www.linkedin.com/mwlite/in/armaan-rai-819a951a1" target="_blank">
                        <svg  class="block mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <p>Enthusiastic. Curious. Driven. I am dedicated to my work in STEM research and community service. </p>
                </div>

                <div class="flex flex-col text-center justify-center space-y-4">
                    <img src="assets/images/j.jpeg" alt="" style="width: 223px; height: 223px; object-fit: cover; border-radius: 50%;" class="block mx-auto">
                    <h2 class="text-xl font-semibold">Jiali Graham</h2>
                    <a href="https://www.linkedin.com/in/jiali-graham-972755217" target="_blank">
                        <svg  class="block mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <p>Hey! My name’s Jiali Graham and I’m in the Class of 2023. I mostly do digital art and animations, but I still do traditional art sometimes! Currently I’m working on learning how to do 3-D animation and comics. </p>
                </div>
            </div>

        </div>

        <?php include("app/includes/footer.php"); ?>
    </div>
    
</body>

</html>