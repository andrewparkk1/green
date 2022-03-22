
<div class="bg-green-700">
    <div class="flex flex-row justify-between py-8 w-5/6 p-5 mx-auto text-white ">
        <a class="hover:text-green-300 text-3xl" href="<?php echo BASE . 'index.php'; ?>"> 
            <h1><span style="font-family: Parisienne; letter-spacing: 0.08em;" class="text-2xl italic">the</span> 
                <span style="font-family: Julius Sans One;" class="text-4xl tracking-wider">GREEN</span></h1>
        </a>
        <div class="flex flex-row gap-24 items-center">
            <?php if(isset($_SESSION['id'])): ?>
                <a class="hover:text-green-300" href="<?php echo BASE . 'admin/dashboard.php'; ?>"><?php echo $_SESSION['username']; ?>'s Dashboard</a>
                <a class="hover:text-red-500" href="<?php echo BASE . 'logout.php'; ?>">Logout</a>
            <?php else: ?>
                <a href="<?php echo BASE . 'login.php'; ?>">Login</a>
            <?php endif; ?>   
        </div>
    </div>
</div>
