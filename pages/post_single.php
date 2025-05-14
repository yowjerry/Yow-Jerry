<?php
    include "./scripts/post.php";
?>
<div class="container py-5">
    <div class="row">
        <!-- Featured Image -->
        <div class="col-12">
            <h1 class="mb-3"><?= $post['post_title'] ?></h1>
        </div>
        <div class="col-<?=$post['post_category']==3?6:12?> mb-4">
            <img
                src="./assets/<?= $post['post_image'] ?>"
                alt="Featured Article Image"
                class="img-fluid rounded">
        </div>
        <!-- Article Content -->
        <div class="col-<?=$post['post_category']==3?6:12?>">
            <p class="text-muted mb-4">
                By <strong><?= $post['first_name'] . " " . $post['last_name'] ?></strong> | Published on <time datetime="2024-12-05"><?= date("F j, Y, g:i A", strtotime($post['post_date'])) ?></time>
            </p>
            <div class="content">
                <?= $post["post_content"] ?>
            </div>
        </div>
    </div>
</div>