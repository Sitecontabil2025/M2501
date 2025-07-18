<?php
$title = 'Consultoria Gerencial e Financeira';
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
<div class="container-services">
    <div class="container py-10 text-dark">
        <h2 class="fw-bold mb-4">O que fazemos</h2>
        <p>Nosso time de consultores oferece uma visão estratégica para a gestão empresarial, utilizando inteligência de dados para mapear áreas de melhoria, otimizar processos e maximizar resultados.</p>
        <p>Ajudamos sua empresa a tomar decisões assertivas que impulsionem o crescimento e a sustentabilidade do negócio.</p>
    </div>
</div>
<?php include('footer.php'); ?>