<footer class="container-topo text-white pt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <h4 class="fw-bold"><?= $escritorio ?></h4>
                <p class="small"><?= $atual ?></p>
                <p class="small"><?= $crc ?></p>
                <div class="mt-3">
                    <?php if (isset($facebook) && !empty($facebook)): ?><a href="<?= $facebook; ?>" target="_blank" class="me-2 p-2 p-lg-0 fab fa-fw fa-facebook-f"> </a><?php endif; ?>
                    <?php if (isset($instagram) && !empty($instagram)): ?><a href="<?= $instagram; ?>" target="_blank" class="me-2 p-2 p-lg-0 fab fa-fw fa-instagram"> </a><?php endif; ?>
                    <?php if (isset($linkedin) && !empty($linkedin)): ?><a href="<?= $linkedin; ?>" target="_blank" class="p-2 p-lg-0 fab fa-fw fa-linkedin-in"> </a><?php endif; ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 ">
                <h5 class="fw-semibold">Links Úteis</h5>
                <ul class="list-unstyled nav-footer">
                    <li><a href="tabelas.php" class="text-decoration-none">Tabelas Práticas</a></li>
                    <li><a href="agendas.php" class="text-decoration-none">Agenda de Obrigações</a></li>
                    <li><a href="modelos-documentos.php" class="text-decoration-none">Modelos de Documentos</a></li>
                    <li><a href="formularios.php" class="text-decoration-none">Formulários Diversos</a></li>
                    <li><a href="lgpd.php" class="text-decoration-none">LGPD</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="fw-semibold">Serviços</h5>
                <ul class="list-unstyled nav-footer">
                    <li><a href="s-contabilidade.php" class="text-decoration-none">Contabilidade</a></li>
                    <li><a href="s-trabalhista.php" class="text-decoration-none">Departamento Trabalhista</a></li>
                    <li><a href="s-meime.php" class="text-decoration-none">MEI / ME / Simples Nacional</a></li>
                    <li><a href="s-assessoria.php" class="text-decoration-none">Assessoria Empresarial</a></li>
                    <li><a href="trocar-de-contador.php" class="text-decoration-none">Trocar de Contador</a></li>
                    <li><a href="abrir-empresa.php" class="text-decoration-none">Abrir empresa</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 text-white">
                <h5 class="fw-semibold">Contato</h5>
                <p class="small"><i class="fas fa-map-marker-alt me-2"></i><a href="<?= $mapa_link ?>"><?= $endereco ?><br><?= $bairro ?><br><?= $cidade ?><br><?= $cep ?></a></p>
                <p class="small"><i class="fas fa-phone me-2"></i><a href="tel:<?= $telefone ?>"><?= $telefone ?></a></p>
                <p class="small"><i class="fas fa-envelope me-2"></i><a href="mailto:<?= $email ?>"><?= $email ?></a></p>
                <p class="small"><i class="fab fa-whatsapp me-2"></i><a href="<?= whatsapp('Olá, gostaria de mais informações sobre os serviços contábeis.') ?>"> <?= $whatsapp ?></a></p>
            </div>

        </div>

        <!-- Rodapé inferior -->
        <div class="text-center border-top border-white mt-4 pt-3">
            <p class="mb-1"><i class="far fa-copyright"></i> <?php $ano_atual = date('Y');if ($ano_dev != $ano_atual) {echo $ano_dev . ' - ' . $ano_atual; } else { echo $ano_dev; } ?> <?= $escritorio ?>. Todos os direitos reservados.</p>
            <small>Desenvolvido com <a href="https://www.sitecontabil.com.br/modelos" class="text-white text-decoration-underline">SITECONTABIL</a></small>
        </div>
    </div>
</footer>

<a id="whatsapp" class="d-flex align-items-center justify-content-center" href="<?= whatsapp('Estou entrando em contato pelo site!') ?>" style="position:fixed; width:55px;height:55px;bottom:10px;right:10px;background-color:#25d366;color:#FFF;border-radius:50px; font-size:25px;z-index:1000;" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.1/css/all.css">
<script src="assets/js/cookie.min.js" data-position="left" data-hide="true" data-cor="var(--bs-primary)"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.mask.min.js"></script>
<script src="assets/js/jquery-confirm.min.js"></script>
<script src="assets/js/script.min.js"></script>

</body>

</html>