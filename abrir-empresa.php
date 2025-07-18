<?php
$title = 'Abertura Empresarial e Societária';
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
    <p> Ter o próprio negócio é o sonho de muitos brasileiros, mas só em pensar nas etapas para abrir uma empresa, alguns já começam a ter pesadelos. Com o objetivo de ajudar futuros empreendedores que ainda não sabem por onde começar e incentivar aqueles que estão com receio, criamos o guia “Como abrir uma empresa? Passo a passo para tirar as ideias do papel”. </p>

    <div class="bg-primary p-3 p-md-6 rounded my-5">
        <div class="row g-5 text-white">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-auto text-align-center">
                        <div class="p-3 bg-light rounded">
                            <i class="fas fa-fw fa-4x fa-address-card text-primary"></i>
                        </div>
                    </div>
                    <div class="col text-align-center text-align-md-justify">
                        <h3 class="m-0"> 1 - Iniciando o cadastro </h3>
                        <p class="m-0"> Precisaremos do seu RG digitalizado (ou foto do documento), o código cartográfico (carnê do IPTU) do endereço em que a empresa será registrada. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-auto text-align-center">
                        <div class="p-3 bg-light rounded">
                            <i class="fas fa-fw fa-4x fa-comments text-primary"></i>
                        </div>
                    </div>
                    <div class="col text-align-center text-align-md-justify">
                        <h3 class="m-0"> 2 - Conte-nos o que vai fazer </h3>
                        <p class="m-0"> Qual serviço sua empresa exercerá? Nós identificaremos os CNAEs, o tipo de empresa, o regime de tributação mais econômico e adequado, tudo de acordo com a legislação. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-auto text-align-center">
                        <div class="p-3 bg-light rounded">
                            <i class="fas fa-fw fa-4x fa-thumbs-up text-primary"></i>
                        </div>
                    </div>
                    <div class="col text-align-center text-align-md-justify">
                        <h3 class="m-0"> 3 - Abertura de forma digital</h3>
                        <p class="m-0"> Após providenciar o certificado digital e-CPF, iremos prosseguir com o registro da sua empresa. Estaremos disponíveis para te apoiar e ajudar no que for preciso. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-auto text-align-center">
                        <div class="p-3 bg-light rounded">
                            <i class="fas fa-fw fa-4x fa-bell text-primary"></i>
                        </div>
                    </div>
                    <div class="col text-align-center text-align-md-justify">
                        <h3 class="m-0"> 4 - Agora está quase tudo pronto </h3>
                        <p class="m-0"> Após protocolar a documentação nos órgãos responsáveis, é só aguardar e em breve sua empresa estará pronta para que nós cuidemos dela com a seriedade e qualidade que merece.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary p-4 rounded">
        <div class="row align-items-center">
            <div class="col text-white">
                <h5 class="m-0 fw-lighter">Não fique com dúvidas, nós resolvemos tudo para você! </h5>
                <h3 class="m-0 fw-bolder"> Abra sua empresa agora! </h3>
            </div>
            <div class="col-auto">
                <a href="contato.php" class="btn btn-outline-light rounded-pill">falar com especialista</a>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>