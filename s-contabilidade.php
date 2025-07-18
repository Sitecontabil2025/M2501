<?php
$title = 'Contabilidade Completa';
?>
<?php include('header.php'); ?>
<div class="container-abas">
    <div class="container py-7 position-relative">
        <h1 class="fw-bolder text-white text-uppercase"><?= $title; ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><?= $title; ?></li>
            </ol>
        </nav>
    </div>
</div>

<main class="container pt-5 pt-lg-8 pb-8 position-relative">
    <p>Oferecemos serviços contábeis completos, desde a escrituração até a entrega de obrigações acessórias. Com uma equipe especializada, garantimos informações seguras para tomada de decisões e crescimento do seu negócio.</p>

    <ul>
        <li>Classificação e escrituração contábil;</li>
        <li>Emissão de relatórios e demonstrativos;</li>
        <li>Entrega de obrigações acessórias;</li>
        <li>Controle patrimonial e conciliações bancárias;</li>
        <li>Atendimento personalizado e consultivo.</li>
    </ul>

    <p>Com nossa contabilidade, sua empresa estará sempre em dia e com total controle financeiro.</p>
</main>
<?php include 'footer.php'; ?>
