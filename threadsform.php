<?php

//session_start();



require_once('function.php');
require_once('Threads.php');

$thread = new Threads();
//$comment = new comments();
//$comments = $comment->getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="thread_header">
        <img class="thread_left" src="">
        
        <a class="thread_right" href="signinform.php"><img class="thread_right_img" href=""></a>
        <a class="thread_right" href="edit_profile.php"><img class=""></a>
        
    </div>

    <div class="thread_main"></div>

    <div class="main_thread">
    <?php foreach ($threads as $thread) : ?>
                <div class="">
                            <h1 class="card-title"><?= h($thread["title"]); ?></h1>
                                <?= h($thread["comments"]); ?>
                            </p>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</body>
</html>