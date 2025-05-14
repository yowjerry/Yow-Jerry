<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=1200px">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./vendor/nice/css/nice-select.css">
    <script src="./vendor/nice/js/jquery.js"></script>
    <script src="./vendor/nice/js/jquery.nice-select.js"></script>
    <title><?= App_state::$page_title ?></title>
</head>

<body>
    <div class="root bg-dark container-fluid p-5" style="min-height: 100vh;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-secondary pb-5">
                    <?=App_state::$page_title?>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="site bg-light container-fluid">
                <div class="container-fluid px-5">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="index.php">Yow</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home <i
                                            class="bi bi-house-door-fill"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=documents">Documents <i class="bi bi-file-earmark-pdf-fill"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=projects&category=1">Music Production <i
                                            class="bi bi-music-note-list"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=projects&category=2">Software Developement <i
                                            class="bi bi-braces-asterisk"></i></a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=posts">Blog <i class="bi bi-substack"></i></a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=about">About <i class="bi bi-info-circle"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <?= $content ?>
            </div>
        </div>
        <div class="container-fluid py-5">
            <div class="row text-light text-center">
                <div class="col-4 text-secondary pb-3">
                        <i class="bi bi-c-circle"></i> Jerry Cenatus 2024
                </div>
                <div class="col-4">
                    <a class="btn btn-light" href="<?=App_state::$instagram_link?>" target="_blank">
                        <i class="bi bi-instagram"></i> @thejerrycenatus
                    </a>
                </div>
                <div class="col-4">
                    <a class="btn btn-light" href="<?=App_state::$x_link?>" target="_blank">
                        <i class="bi bi-twitter-x"></i> @thejerrycenatus
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>