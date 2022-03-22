<!-- <div class="min-h-[20rem] text-center flex justify-between flex-col py-5 text-green-300 bg-green-700 gap-4"> -->
<div class="min-h-[20rem] text-center flex justify-between flex-col py-5 text-gray-300 bg-gray-700 gap-4">
    <h1><span style="font-family: Parisienne; letter-spacing: 0.08em;" class="text-4xl italic">the</span> 
        <span style="font-family: Julius Sans One;" class="text-4xl tracking-wider">GREEN</span></h1>
    <!-- <h1>THE GREEN</h1> -->
    <p><span>&copy;</span> 2022 The Green.</p>
    <?php if (isset($_SESSION['id'])): ?>
        <div class="flex flex-row text-center justify-between mx-auto gap-10">
            <a class="hover:text-gray-500" href="<?php echo BASE . 'admin/dashboard.php'; ?>">Dashboard</a>
            <a class="hover:text-gray-500" href="<?php echo BASE . 'logout.php'; ?>">Logout</a>
        </div>
    <?php endif; ?>
</div>