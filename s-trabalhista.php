<?php
$title = 'Departamento Trabalhista';
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
    <p>Gerenciamos todas as obrigações trabalhistas da sua empresa, assegurando o cumprimento da legislação e promovendo um ambiente de trabalho saudável e regularizado.</p>

    <ul>
        <li>Admissões, demissões e folha de pagamento;</li>
        <li>Encargos sociais (INSS, FGTS, IRRF);</li>
        <li>Gerenciamento de férias e 13º salário;</li>
        <li>Declarações e obrigações trabalhistas;</li>
        <li>Suporte em homologações e fiscalização.</li>
    </ul>

    <p>Tenha segurança jurídica e tranquilidade com nossa assessoria trabalhista especializada.</p>
</main>
<?php include 'footer.php'; ?>
