<?php
include "./scripts/get_projects.php";
if(isset($category[0]['pr_cat_label'])){
    App_state::$page_title =  App_state::$page_title. " : ".$category[0]['pr_cat_label'];
}else{
    App_state::$page_title =  App_state::$page_title. " : All Projects";
}
?>
<div class="container pt-5 px-5">
    <div class="row">
        <div class="col-12 py-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?page=projects">Projects</a></li>
                    <?php
                    if (!empty($category)) {
                    ?>
                        <li class="breadcrumb-item active" aria-current="page"><?= $category[0]['pr_cat_label'] ?></li>
                    <?php
                    }
                    ?>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container px-5 pb-5">
    <div class="row">
        <?php
        foreach ($projects as $project) {
        ?>
            <div class="col-4 mb-5">
                <div class="div" style="width: 80%;overflow: hidden;border-radius: 2px;">
                    <img src="./assets/<?= $project["project_image"] ?>" alt=""
                        class="img-fluid">
                </div>
                <div class="py-1" style="width: 60%;">
                    <h6><?= $project["project_title"] ?></h6>
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
</div>