<?php
$title = 'Sobre Nós';
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

<div class="container py-8">
    <div class="row align-items-center gy-4">
        <div class="col-md-6 order-lg-1">
            <h3 class="fw-bold mb-4">Conheça mais sobre <span class="text-uppercase text-primary"> nossa empresa </span></h3>
            <p>Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.</p>
            <p>As consultorias abrangem todas as áreas acima citadas. O planejamento tributário também faz parte de nosso currículo empresarial, analisamos a tributação que mais se adequa a sua empresa. Trabalhamos para poder servi-lo sempre com qualidade.</p>
            <p>O mundo econômico atual, tão complexo e instável em que temos de atuar e a rapidez das informações exigem de nós, administradores um esforço para adaptarmos a esse ritmo e principalmente para obtermos nosso objetivo maior, o sucesso. Para isso a capacidade de uma organização é o que determinará uma trajetória de vitórias ou de fracasso.</p>
        </div>
        <div class="col-md-12 order-lg-3">
            <p>Neste contexto, contando com uma equipe extremamente capacitada e preocupada em buscar constantemente o que há de mais novo no mercado, nos preocupamos em trazer um trabalho sério e competente com o intuito de agregar valores e aumentar o capital intelectual de seus parceiros (clientes), fazendo com que estas organizações se tornem bem sucedidas e preparadas para prosseguir neste caminho de conquistas e vitórias. Nosso intuito é estabelecer estratégias e operacionalizar o conjunto de ações para os nossos clientes, capaz de fazê-los sobreviver, crescer e se perpetuar no mercado.</p>
        </div>
        <div class="col-md-6 mb-4 mb-md-0 order-lg-2">
            <img src="assets/images/empresa.jpg" class="img-fluid rounded-4 shadow-sm">
        </div>
    </div>

</div>
<?php include 'footer.php'; ?>