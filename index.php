<?php include 'header.php'; ?>

<section>
    <div class="container-banner" id="banner">
        <div class="container position-relative text-white">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bolder">Nosso compromisso é com o seu sucesso!</h1>
                <p>Em uma época em que a confiança está em primeiro lugar!</p>
                <a href="abrir-empresa.php" target="_self" class="btn btn-secondary rounded-pill text-white py-2 px-3">Abrir empresa</a>
                <a href="trocar-de-contador.php" target="_self" class="btn btn-outline-secondary rounded-pill text-white py-2 px-3">Trocar de Contador</a>
            </div>
        </div>
    </div>

    <div class="container container-utilitarios position-relative z-1">
        <div class="row text-center gy-4 gy-lg-0">
            <div class="col-md-6 col-lg-3">
                <a href="tabelas.php" class="box-banner">
                    <i class="fas fa-file-invoice fa-3x mb-3"></i>
                    <h2 class="h3 ">Tabelas <span class="d-block">Práticas</span></h2>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="agendas.php" class="box-banner">
                    <i class="fas fa-calendar-alt fa-3x mb-3"></i>
                    <h2 class="h3 ">Agenda de Obrigações </h2>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="modelos-documentos.php" class="box-banner">
                    <i class="fas fa-folder-open fa-3x mb-3"></i>
                    <h2 class="h3 ">Modelos de Documentos</h2>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="formularios.php" class="box-banner">
                    <i class="fas fa-file-invoice-dollar fa-3x mb-3"></i>
                    <h2 class="h3 ">Formulários Diversos</h2>
                </a>
            </div>
        </div>
    </div>

    <div class="container pt-4 pb-8">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Sobre Nós</h2>
            <div class="linha mb-3 mx-auto"></div>
            <p>Excelência em serviços contábeis para o crescimento do seu negócio.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="assets/images/sobre-nos.jpg" class="img-fluid rounded-4 shadow-sm">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold mb-4">Soluções contábeis personalizadas para sua empresa</h3>
                <p class="fst-italic">Oferecemos consultoria contábil especializada, com foco em resultados e segurança fiscal.</p>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        Escrituração contábil e fiscal completa.
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        Abertura e legalização de empresas.
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        Assessoria tributária e planejamento fiscal.
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        Atendimento humanizado e suporte contínuo.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bg-light">
        <div class="container py-4">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center">
                        <img src="assets/images/cliente.png" width="115" height="115" alt="cliente" class="img-fluid">
                    </div>
                    <div class="swiper-slide text-center">
                        <img src="assets/images/cliente.png" width="115" height="115" alt="cliente" class="img-fluid">
                    </div>
                    <div class="swiper-slide text-center">
                        <img src="assets/images/cliente.png" width="115" height="115" alt="cliente" class="img-fluid">
                    </div>
                    <div class="swiper-slide text-center">
                        <img src="assets/images/cliente.png" width="115" height="115" alt="cliente" class="img-fluid">
                    </div>
                    <div class="swiper-slide text-center">
                        <img src="assets/images/cliente.png" width="115" height="115" alt="cliente" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container py-8">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Nossos Serviços</h2>
                <div class="linha mb-3 mx-auto"></div>
                <p>Conheça os Serviços que oferecemos</p>
            </div>
            <div class="row g-4">
                <?php include 'servicos-conteudo.php'; ?>
                <?php foreach ($servicos as $servico): ?>
                    <div class="col-md-4">
                        <a href="<?= $servico['link'] ?>" class="box-servicos shadow rounded-3">
                            <div class="mb-3 text-primary box-servicos-icone">
                                <i class="<?= $servico['icone'] ?> fa-2x position-relative text-center"></i>
                            </div>
                            <h5 class="fw-bold text-dark"><?= $servico['titulo'] ?></h5>
                            <div class="linha mb-2"></div>
                            <p><?= $servico['descricao'] ?></p>
                            <span>Saiba mais</span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container-topo text-white py-8">
        <div class="container text-center">
            <h2 class="fw-bold text-uppercase mb-4">
                Atender bem você e sua empresa!
            </h2>
            <p class="mb-4">
                Se você tem dúvida sobre algum problema relacionado a impostos, <span class="d-block"> aberturas de empresas, elaboração de balanços, fluxo de caixa entre outros,</span> entre em contato conosco. Ficaremos felizes em atendê-lo.
            </p>
            <div class="row text-center justify-content-center">
                <div class="col-lg-auto">
                    <h3 class="fw-bold fst-italic">
                        <a href="<?= $telefone_link ?>" class="text-white text-decoration-none me-3">
                            <i class="fas fa-phone-alt"></i> <?= $telefone ?>
                        </a>
                    </h3>
                </div>
                <div class="col-lg-auto">
                    <h3 class="fw-bold fst-italic">
                        <a href="<?= whatsapp('Estou entrando em contato pelo site!') ?>" class="text-white text-decoration-none ms-3" target="_blank">
                            <i class="fab fa-whatsapp"></i> <?= $whatsapp ?>
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="bg-white">
        <div class="container py-8">
            <div class="row gy-6 gy-lg-0 align-items-stretch">
                <div class="col-lg-4">
                    <div class="container-topo h-100 p-4 p-md-5 text-white rounded shadow">
                        <h2>Notícias Empresariais</h2>
                        <h3 class="my-5">Atualize-se com os principais acontecimentos do mundo contábil!</h3>
                        <p class="mb-5">Acompanhe em nosso site as últimas e principais notícias sobre contabilidade e negócios. Entrevistas, análises, destaques, opiniões e muito mais.</p>
                        <a href="noticias.php" class="btn btn-outline-light rounded-pill">Confira todas as notícias</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row gy-4 align-items-stretch">
                        <?php $dados = get_materias('https://sitecontabil.com.br/json/?db=sc_noticias&limite=4'); ?>
                        <?php foreach ($dados as $item): ?>
                            <div class="col-md-6 flex-column justify-content-between text-center text-lg-start">
                                <a href="noticias-ler.php?id=<?= $item->id ?>" class="box-news rounded">
                                    <div>
                                        <h4> <?= limitar_texto($item->titulo, 100) ?> </h4>
                                        <p class="my-4 text-primary small"> <i class="fa-solid fa-calendar fa-fw"></i> [<strong><?= mostra_data($item->pubdate, '%d de %B de %Y'); ?></strong>] </p>
                                    </div>
                                    <p class="small"> <?= $item->descricao; ?> </p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-8">
        <div class="row">
            <div class="col-lg-4 mb-4 titulo-duvidas">
                <h2>Dúvidas <span class="text-primary">Frequentes</span></h2>
                <p>Reunimos abaixo as perguntas mais comuns que recebemos sobre abertura de empresas, documentos necessários e outras dúvidas legais. Confira para esclarecer suas dúvidas rapidamente!</p>
            </div>

            <div class="col-lg-8">
                <?php include 'perguntas.php'; ?>

                <div class="accordion" id="faqAccordion">
                    <?php foreach ($perguntas as $index => $faq):
                        $collapseId = "collapse" . $index;
                        $headingId = "heading" . $index;
                        $show =  "";
                        $collapsed = "collapsed";
                        $expanded = $index === 0 ? "true" : "false";
                    ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="<?= $headingId ?>">
                                <button class="accordion-button <?= $collapsed ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>" aria-expanded="<?= $expanded ?>" aria-controls="<?= $collapseId ?>">
                                    <?= ($index + 1) . ". " . $faq["pergunta"] ?>
                                </button>
                            </h2>
                            <div id="<?= $collapseId ?>" class="accordion-collapse collapse <?= $show ?>" aria-labelledby="<?= $headingId ?>" data-bs-parent="#faqAccordion">
                                <div class="accordion-body"><?= $faq["resposta"] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include 'footer.php'; ?>