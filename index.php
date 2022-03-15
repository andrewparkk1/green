<?php 
include("path.php"); 
// include(ROOT . "app/database/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Green</title>
    <link rel="stylesheet" href="assets/css/tailwind.css">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div id="__next">
        <!-- MAIN CONTAINER -->
            <?php include(ROOT . "app/includes/header.php"); ?>
            
            <div class="flex flex-col flex-grow w-3/4 mx-auto">
                <!-- SECTION HEADER -->
                <div class="pt-16 pb-10 font-semibold">
                    <h1 class="text-6xl">LATEST</h1>
                    <h5 class="text-xl font-semibold">A collection of the latest creations by <span class="font-[Parisienne] italic">the</span> <span class="font-extra-light font-['Julius_Sans_One']">GREEN's</span> editors</h5>
                </div>

                <!-- WRITING CONTAINER -->
                <div class="box-border grid grid-cols-2 auto-rows-[17rem] gap-8">
                    <div>
                        <a href="https://medium.com/@nathanhogg1223/review-zebra-g-series-f474518a5b63">
                            <!-- <img src="images/penny.jpeg" class="w-full h-full object-cover"> -->
                            <div class="hover:text-green-300 flex flex-col py-6 px-5 text-white drop-shadow-2xl bg-cover object-cover w-full h-full font-thin" style="background-image: url(assets/images/books.jpeg);">
                                <p>Nathan Hogg</p>
                                <p>Jan 2, 2022</p>
                                <h1 class="mt-auto text-2xl">Review: Zebra G Series</h1>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="articles/empire.html">
                            <!-- <img src="images/penny.jpeg" class="w-full h-full object-cover"> -->
                            <div class="hover:text-green-300 flex flex-col py-6 px-5 text-white drop-shadow-2xl bg-cover object-cover w-full h-full font-thin" style="background-image: url(assets/images/photo-1553272725-086100aecf5e.jpeg); ">
                                <p>Isabel Ocegueda</p>
                                <p>Jan 22, 2022</p>
                                <h1 class="mt-auto text-2xl">Empire</h1>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="articles/empire.html">
                            <!-- <img src="images/penny.jpeg" class="w-full h-full object-cover"> -->
                            <div class="hover:text-green-300 flex flex-col py-6 px-5 text-white drop-shadow-2xl bg-cover object-cover w-full h-full font-thin" style="background-image: url(assets/images/photo-1643400811590-adfc89411a30.jpeg); ">
                                <p>Isabel Ocegueda</p>
                                <p>Jan 22, 2022</p>
                                <h1 class="mt-auto text-2xl">Empire</h1>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="articles/empire.html">
                            <!-- <img src="images/penny.jpeg" class="w-full h-full object-cover"> -->
                            <div class="hover:text-green-300 flex flex-col py-6 px-5 text-white drop-shadow-2xl bg-cover object-cover w-full h-full font-thin" style="background-image: url(assets/images/bunch.jpeg); ">
                                <p>Isabel Ocegueda</p>
                                <p>Jan 22, 2022</p>
                                <h1 class="mt-auto text-2xl">Empire</h1>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        <?php include(ROOT . "app/includes/footer.php"); ?>
    </div>
    
</body>

</html>