<?php
$title = 'Assessoria Empresarial';
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

<div class="container pt-5 pt-lg-8 pb-8 position-relative">
    <p>Nossa empresa oferece assessoria empresarial completa, ajudando sua empresa a melhorar sua gestão, otimizar processos e alcançar resultados mais expressivos. Atuamos em diversas áreas, garantindo que seu negócio esteja em conformidade com as leis e preparado para crescer.</p>

    <p>Oferecemos:</p>

    <ul>
        <li>Planejamento estratégico personalizado;</li>
        <li>Gestão financeira eficiente para aumentar seus lucros;</li>
        <li>Consultoria contábil e fiscal para reduzir riscos tributários;</li>
        <li>Suporte em recursos humanos e conformidade trabalhista;</li>
        <li>Apoio na implementação de inovações tecnológicas.</li>
    </ul>
    
    <p>Com nossa assessoria, você terá uma visão clara do seu negócio, facilitando decisões estratégicas e mantendo sua empresa competitiva.</p>
</div>
<?php include 'footer.php'; ?>
