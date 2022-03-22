<h1>COMMMENTS</h1>

        <div class="flex flex-row gap-8">
            <?php foreach($posts as $p): ?>
                <div class="w-3/12">
                    <a href="single.php?id=<?php echo $p['id']; ?>&username=<?php echo $p['username']; ?>">
                        <div class="hover:text-green-300 flex flex-col py-6 px-5 text-red-500 drop-shadow-2xl bg-cover object-cover w-full h-full font-thin" style="background-image: url(<?php echo BASE . 'assets/images/' . $p['image']; ?>);">
                            <p><?php echo $p['username']; ?></p>
                            <p><?php echo date('F j, Y', strtotime($p['created_at'])); ?></p>
                            <h1 class="mt-auto text-2xl"><?php echo $p['title']; ?></h1>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>