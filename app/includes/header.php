<?php
include("../..path.php");

?>

<div class="text-center my-10 relative">
    <h2 style="letter-spacing: 0.2em;" class="my-2 font-medium">A STUDENT-BASED MEDIA ORGANIZATION</h2>
    <a href="<?php echo BASE . 'index.php'; ?>">
        <div style="filter: drop-shadow(0 0px 0.01rem grey);">
            <h3 style="font-family: Parisienne; filter: drop-shadow(0 3px 0.05rem grey); letter-spacing: 0.08em;" class="text-3xl italic">the</h3>
        </div>
        <div style="filter: drop-shadow(0 0px 0.2rem grey);">
            <h1 style="font-family: Julius Sans One; filter: drop-shadow(0 4px 0.05rem grey);" class="text-7xl font-extra-light tracking-wider">GREEN</h1>
        </div>
    </a>
</div>  

<div class="flex flex-row justify-between w-7/12 mx-auto">
    <a href="index.php" class="hover:text-green-500 font-thin hover:transition-all">LATEST</a> 
    <?php foreach($topics as $key => $topic): ?>
        <a href="<?php echo BASE . 'index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>" class="hover:text-green-500 font-thin hover:transition-all"><?php echo $topic['name']; ?></a>
    <?php endforeach; ?>
    <!-- <a href="latest.html" class="hover:text-green-500 font-thin hover:transition-all">LATEST</a>
    <a href="creativewriting.html" class="hover:text-green-500 font-thin hover:transition-all">CREATIVE WRITING</a>
    <a href="opinion.html" class="hover:text-green-500 font-thin hover:transition-all">OPINION</a>
    <a href="arts.html" class="hover:text-green-500 font-thin hover:transition-all">ARTS</a>
    <a href="multimedia.html" class="hover:text-green-500 font-thin hover:transition-all">MULTIMEDIA</a>
    <a >Editor's Pick</a>
    <a href="fifteen.html" class="hover:text-green-500 font-thin hover:transition-all">15TH GREEN</a> -->
    <a href="aboutus.html" class="hover:text-green-500 font-thin hover:transition-all">ABOUT US</a> 
    <form action="index.php" method="post" class="w-1/12">
        <input type="text" name="search-term" placeholder="Search...">
    </form>
</div>

