<?php
include("../..path.php");
?>

<div class="text-center my-10 relative">
    <h2 class="my-2 tracking-widest font-medium">A STUDENT-BASED MEDIA ORGANIZATION</h2>
    <a href="<?php echo BASE . 'index.php'; ?>">
        <h3 class="text-3xl drop-shadow-2xl font-[Parisienne] italic">the</h3>
        <h1 class="text-7xl drop-shadow-2xl font-extra-light tracking-wider font-['Julius_Sans_One']">GREEN</h1>
    </a>
</div>  

<div class="flex flex-row justify-between w-3/4 mx-auto">
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
    <form action="index.php" method="post">
        <input type="text" name="search-term" placeholder="Search...">
    </form>
</div>

