<!DOCTYPE html>
<html lang="pt-br">
<?php require_once("dados.php"); ?>
<?php $json = (isset($url_json)) ? get_materias($url_json) : NULL; ?>
<?php $json_ler = (isset($url_json_ler)) ? get_materias($url_json_ler) : NULL; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?= $escritorio; ?> - <?= $titulo_pagina; ?></title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- SEO META TAGS -->
    <meta property="og:title" content="<?= $titulo_pagina; ?>" />
    <meta property="og:description" content="<?= $descricao_pagina; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $escritorio; ?>" />
    <meta property="og:image" content="assets/images/og-img.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-BR" />
    <meta name="author" content="<?= $escritorio; ?>" />
    <meta name="contact" content="<?= $email; ?>" />
    <meta name="copyright" content="Copyright (c) <?= date("Y"); ?> - <?= $escritorio; ?>." />
    <meta name="description" content="<?= $descricao; ?>" />
    <meta name="keywords" content="<?= $keywords; ?>" />
    <meta name="resource-type" content="website" />

    <!-- ARQUIVOS CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery-confirm.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css?v=<?= time() ?>">

    <!-- ARQUIVOS JS -->
    <script src="assets/js/jquery.min.js"> </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer> </script>
</head>

<body>
    <header>
        <div class="container-topo py-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-auto">
                        <div class="d-flex align-items-center justify-content-center justify-content-sm-end text-white">
                            <?php if (isset($facebook) && !empty($facebook)): ?><a href="<?= $facebook; ?>" target="_blank" class="me-2 p-2 p-lg-0 fab fa-fw fa-facebook-f"> </a><?php endif; ?>
                            <?php if (isset($instagram) && !empty($instagram)): ?><a href="<?= $instagram; ?>" target="_blank" class="me-2 p-2 p-lg-0 fab fa-fw fa-instagram"> </a><?php endif; ?>
                            <?php if (isset($linkedin) && !empty($linkedin)): ?><a href="<?= $linkedin; ?>" target="_blank" class="p-2 p-lg-0 fab fa-fw fa-linkedin-in"> </a><?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm d-flex flex-wrap align-items-center justify-content-center justify-content-sm-end text-white">
                        <p class="m-0 d-flex align-items-center"> <i class="me-1 fas fa-envelope"></i> <a href="mailto:<?= $email ?>"> <small><?= $email ?></small> </a> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3 position-relative z-1" id="header">
            <div class="row align-items-center">
                <div class="col-6 col-md-auto d-flex align-items-center">
                    <a href="index.php" class="navbar-brand">
                        <img src="assets/images/logo.png" alt="<?= $escritorio ?? 'Logo' ?>" class="img-fluid img-logo" width="250" height="65">
                    </a>
                </div>
                <div class="col-6 d-md-none text-end">
                    <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuMobile" aria-controls="menuMobile" id="menupaginas">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>

                <div class="col-md d-none d-md-block">
                    <nav class="text-end">
                        <ul class="nav justify-content-end">
                            <?php include 'menu.php'; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end bg-primary" tabindex="-1" id="menuMobile" aria-labelledby="menuMobileLabel">
            <div class="offcanvas-header text-white">
                <h5 class="offcanvas-title" id="menuMobileLabel">Menu</h5>
                <button type="button" class="ms-auto text-reset" data-bs-dismiss="offcanvas" aria-label="Fechar"><i class="fas fa-times fa-2x "></i></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav flex-column">
                    <?php include 'menu.php'; ?>
                </ul>
            </div>
        </div>
    </header>