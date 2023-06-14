<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($posts as $post) : ?>
        <article>

                <a href="posts/<?php echo $post->slug;?>">
                <h1>
            <?php 
            echo $post->title; 
            ?></h1> </a>
                 <div>
                    <?php echo $post->body; ?>
    </div>
                </article>
        <?php endforeach; ?>

</body>
</html>
    <!-- <article>
        <h1><a href="/posts/my-first-post">My First Post</a></h1>

        <p> blablaLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id dui at mi consequat placerat. Nullam semper bibendum ante, vitae viverra felis consectetur id. Fusce ultricies consequat nisi, vel finibus velit eleifend ut.</p>
    </article>

    <article>
        <h1><a href="/posts/my-second-post">My Second Post</a></h1>

        <p> blablaLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id dui at mi consequat placerat. Nullam semper bibendum ante, vitae viverra felis consectetur id. Fusce ultricies consequat nisi, vel finibus velit eleifend ut.</p>
    </article>

    <article>
        <h1><a href="/posts/my-third-post">My Third Post</a></h1>

        <p> blablaLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id dui at mi consequat placerat. Nullam semper bibendum ante, vitae viverra felis consectetur id. Fusce ultricies consequat nisi, vel finibus velit eleifend ut.</p>
    </article> -->
</body>
