
<div class="bg-green-600">
    <div class="flex flex-row justify-between py-10 w-3/4 mx-auto ">
        <a href="<?php echo BASE . 'index.php'; ?>">The Green</a>
        <div class="flex flex-row gap-10">
            <?php if(isset($_SESSION['id'])): ?>
                <a href="<?php echo BASE . 'admin/posts/index.php'; ?>"><?php echo $_SESSION['username']; ?>'s Dashboard</a>
                <a href="<?php echo BASE . 'logout.php'; ?>">Logout</a>
            <?php else: ?>
                <a href="<?php echo BASE . 'login.php'; ?>">Login</a>
            <?php endif; ?>   
        </div>
    </div>
</div>
