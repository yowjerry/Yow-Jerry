<?php
App_state::$page_title = App_state::$page_title . " : Welcome";
include "./scripts/home_feed.php";
?>
<div class="container-fluid px-5 py-4">
    <div class="row">
        <div class="col-12 py-2">
            <h1 class="display-6 fw-bold"> I’m just having fun with existence! </h1>
        </div>
        <div class="col-8 py-2">
            I’m exploring so many subjects that I can’t label myself. I’m a professional website developer, but sometimes I find myself as a DJ or a producer. I often ask myself big philosophical and existential questions like, 'What is my purpose?' Overall, I’m just having fun with existence! Welcome to my website!
        </div>
    </div>
    <div class="row">
        <div class="col-12 pb-2">
            <a href="<?= App_state::$instagram_link ?>" target="_blank" class="btn btn-dark">
                Follow on <i class="bi bi-instagram"></i>
            </a>
            <a href="<?= App_state::$x_link ?>" target="_blank" class="btn btn-dark">
                Follow on <i class="bi bi-twitter-x"></i>
            </a>
            <a href="mailto:<?= App_state::$mail ?>" class="btn btn-dark">
                Inbox <i class="bi bi-envelope-fill"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="hero_section" style="background-image: url('./assets/hero_section.jpg');">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid px-5 py-4">
    <div class="row">
        <div class="col-12">
            <h4 class=" fw-bold">Activities that I've been involved in</h4>
            <div class="col-3"></div>
            <p class="text-secondary">
                This section contains activities that I've been involved in. I will be adding more over time.
            </p>
        </div>
    </div>
</div>
<div class="container-fluid px-5">
    <div class="row">
        <?php
        foreach ($projects as $project) {
        ?>
            <div class="col-4 ">
                <div class="div" style="width: 80%;overflow: hidden;border-radius: 2px;">
                    <img src="./assets/<?= $project["project_image"] ?>" alt="<?= $project["project_title"] ?>" class="img-fluid">
                </div>
                <div class="py-1" style="width: 60%;">
                    <h6><?= $project["project_title"] ?> </h6>
                </div>
                <div class="py-1" style="width: 80%;">
                    <p class="text-secondary">
                        <?= $project["project_info"] ?>
                    </p>
                </div>
                <div class="mt-auto">
                    <a target="_blank" href="<?= $project["external_link"] ?>" class="btn btn-dark">Visit Project <i class="bi bi-box-arrow-up-right"></i></a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="row py-5">
        <div class="col-12">
            <a class="btn btn-dark" href="index.php?page=projects">More Project <i class="bi bi-three-dots"></i></a>
        </div>
    </div>
</div>
<div class="container-fluid ps-5 pe-0 py-4">
    <div class="row pe-0 py-5">
        <div class="col-6">
            <div class="row p-5">
                <div class="col-9 py-3">
                    <h4>The Me</h4>
                </div>
                <div class="col-9 py-3">
                    <h6>I'm just a chill guy</h6>
                    <p>I think sometimes I overthink the fact that I’m too simple for this world, so I complicate things a little bit, lol.</p>

                </div>
                <div class="col-9 py-3">
                    <h6>An Alien</h6>
                    <p>I guess. That’s what people say about me—something like, “I’m living in my own world.”</p>

                </div>
                <div class="col-9 py-3">
                    <h6>I do a lot of stuff</h6>
                    <p>I do a lot of creative activities. What can I say? I'm a curious guy.</p>
                </div>

            </div>
            <div class="row p-5">
                <div class="col-12">

                    <a href="<?= App_state::$instagram_link ?>" target="_blank" class="btn btn-dark">
                        Follow on <i class="bi bi-instagram"></i>
                    </a>
                    <a href="<?= App_state::$x_link ?>" target="_blank" class="btn btn-dark">
                        Follow on <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="mailto:<?= App_state::$mail ?>" class="btn btn-dark">
                        Inbox <i class="bi bi-envelope-fill"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6 pe-0">
            <img src="./assets/the_me.jpg" alt="" class="img-fluid">
        </div>
    </div>
</div>
<div class="container-fluid px-5 py-4">
    <div class="row">
        <div class="col-12">
            <h2>Personal opinions</h2>
        </div>
    </div>
    <div class="row">
        <?php
        foreach ($articles as $article) {
        ?>
            <div class="col-6 p-4">
                <img src="./assets/article_2.png" alt="" class="img-fluid">
                <div class="py-1" style="width: 80%;">
                    <h6><?= $article["post_title"] ?></h6>
                    <p class="text-muted">
                        <?= $article['post_intro'] ?>
                    </p>
                </div>
                <div class="mb-4">
                    <a href="index.php?page=post&post=<?= $article['post_id'] ?>" class="btn btn-dark">Read article <i class="bi bi-eye-fill"></i></a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<div class="container-fluid px-5 py-4">
    <div class="row">
        <div class="col-12">
            <h2>Thought flow(threads)</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-6 p-4">
            <img src="./assets/thoughts.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6 p-4">
            <?php
            foreach ($threads as $thread) {
            ?>
                <div class="row">
                    <div class="py-1 col-12">
                        <h6><?= $thread['post_title'] ?></h6>
                        <p class="text-muted"> <?= $thread['post_intro'] ?>
                        </p>
                        <div class="mb-4">
                            <a href="index.php?page=post&post=<?= $thread['post_id'] ?>" class="btn btn-dark">Read article <i class="bi bi-eye-fill"></i></a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>