<?php
$title = 'Trocar de Contador';
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
    <p> Mais praticidade e tranquilidade! Acompanhe tudo o que acontece na contabilidade de sua empresa de forma segura. Deixe a burocracia por nossa conta e tenha mais tempo para cuidar do seu negócio. </p>

    <div class="bg-primary p-3 p-md-6 rounded my-5">
        <div class="row g-5 text-align-center text-white">
            <div class="col-lg-4">
                <i class="fas fa-4x fa-piggy-bank p-3 rounded bg-light text-primary"></i>
                <h3 class="text-uppercase fw-bolder my-2">Comece Agora</h3>
                <p class="m-0"> Faça seu cadastro, estamos prontos para contabilizar o seu sucesso. </p>
            </div>
            <div class="col-lg-4">
                <i class="fas fa-4x fa-hand-holding-heart p-3 rounded bg-light text-primary"></i>
                <h3 class="text-uppercase fw-bolder my-2">Apoio Total</h3>
                <p class="m-0"> Nossa equipe estará sempre pronta para te ajudar, conte conosco. </p>
            </div>
            <div class="col-lg-4">
                <i class="fas fa-4x fa-handshake p-3 rounded bg-light text-primary"></i>
                <h3 class="text-uppercase fw-bolder my-2">Parceria de Sucesso</h3>
                <p class="m-0"> Cuidamos da sua contabilidade para você cuidar do seu negócio. </p>
            </div>
        </div>
    </div>

    <div class="row my-8">
        <div class="col-md text-center">
            <div class="mb-3 bg-primary text-light h1 d-flex align-items-center justify-content-center mx-auto" style="width:100px; height:100px; border-radius:50%;"><i class="fas fa-user-edit"></i></div>
            <h3 class="h5 d-block fw-bolder cor-c2">Cadastro e Pagamento</h3>
            <p>Você preenche online algumas informações da sua empresa para entender se conseguimos te atender e depois você paga a primeira mensalidade do seu serviço de contabilidade.</p>
        </div>
        <div class="col-md text-center">
            <div class="mb-3 bg-primary text-light h1 d-flex align-items-center justify-content-center mx-auto" style="width:100px; height:100px; border-radius:50%;"><i class="fas fa-folder"></i></div>
            <h3 class="h5 d-block fw-bolder cor-c2">Documentação</h3>
            <p>Nós vamos te ajudar em todo processo de troca de contador, usando o seu e-CNPJ ou conversando com o seu contador para pegar todos os documentos necessários para mudança.</p>
        </div>
        <div class="col-md text-center">
            <div class="mb-3 bg-primary text-light h1 d-flex align-items-center justify-content-center mx-auto" style="width:100px; height:100px; border-radius:50%;"><i class="fas fa-check"></i></div>
            <h3 class="h5 d-block fw-bolder cor-c2">Bem-vindo</h3>
            <p>Depois disso você já é parte do time, onde você economiza tempo e dinheiro com serviço de qualidade.</p>
        </div>
    </div>

    <div class="bg-primary p-4 rounded">
        <div class="row align-items-center">
            <div class="col text-white">
                <h5 class="m-0 fw-lighter">Não fique com dúvidas, nós resolvemos tudo para você! </h5>
                <h3 class="m-0 fw-bolder"> Troque agora mesmo de contador! </h3>
            </div>
            <div class="col-auto">
                <a href="contato.php" class="btn btn-outline-light rounded-pill">falar com especialista</a>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>