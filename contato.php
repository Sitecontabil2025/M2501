<?php
$title = 'Entre em Contato';
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

<div class="">
    <main class="container pt-5 pt-lg-8 pb-8 position-relative">
        <div class="row justify-content-between g-4 mb-4">
            <div class="col-lg-4">
                <div class="p-4 rounded" style="background-color: var(--bs-body-color); color: var(--bs-body-bg);">
                    <h4 class="fw-normal mb-0">Tem alguma dúvida?</h4>
                    <h2 class="fw-normal mb-3">Fale <span class="fw-bolder">conosco agora</span></h2>
                    <p>Mande uma mensagem pelo WhatsApp ou envie um e-mail usando o formulário ao lado.</p>
                    <a href="<?= whatsapp('Estou entrando em contato pelo site') ?>" target="_blank" class="btn btn-primary semicone rounded-pill"><i class="fa-brands fa-whatsapp me-2"></i> Whatsapp</a>
                    <a href="<?= $telefone_link ?>" target="_blank" class="btn btn-primary semicone rounded-pill"><i class="fa-solid fa-phone me-2"></i> Ligar</a>
                </div>
            </div>

            <div class="col-lg-7 container-topo text-white p-5 rounded shadow">
                <h4 class="fw-normal mb-1">Entre em <span class="fw-bolder">contato</span> e faça uma <span class="fw-bolder">parceria</span> de sucesso!</h4>
                <h2 class="fw-normal mb-3">Interessado em nossos <span class="fw-bolder">serviços</span>?</h2>

                <form id="formcontato" method="post">
                    <div class="row g-3 mb-3">
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formnome" name="nome" placeholder="Digite seu nome">
                                <label for="formnome">Digite seu nome *</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formemail" name="email" placeholder="Digite seu e-mail">
                                <label for="formemail">Digite seu e-mail *</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" class="form-control celular-mask" id="formtelefone" name="telefone" placeholder="Digite seu telefone">
                                <label for="formtelefone">Digite seu telefone *</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" class="form-control celular-mask" id="formcelular" name="celular" placeholder="Digite seu celular">
                                <label for="formcelular">Digite seu celular</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formassunto" name="assunto" placeholder="Digite seu assunto">
                                <label for="formassunto">Digite seu assunto *</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="formmensagem" name="mensagem" style="height: 150px;" placeholder="Digite sua mensagem"></textarea>
                                <label for="formmensagem">Digite sua mensagem *</label>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-exclamation-triangle flex-shrink-0 me-2"></i>
                        <div>Campos marcados com <span class="text-danger fa-solid fa-asterisk"></span> são obrigatórios</div>
                    </div>

                    <p class="small">
                        Os dados deste formulário são usados apenas internamente, conforme nossa <a href="lgpd.php">política de privacidade</a>.
                    </p>

                    <div class="g-recaptcha mb-4" data-sitekey="6LenHswpAAAAAB6wibivdpramy1rLoolplTL3KwD"></div>
                    <p id="resultado"></p>

                    <button type="submit" class="btn btn-success rounded-pill">Enviar mensagem</button>
                </form>
            </div>
        </div>

        <div class="mapa shadow rounded">
            <?= $mapa_iframe ?>
        </div>
    </main>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.mask.js"></script>

<script>
    $(document).ready(function() {
        var SPMaskBehavior = function(val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };
        $('.celular-mask').mask(SPMaskBehavior, spOptions);

        $('#formcontato').submit(function() {
            var dados = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "enviar.php",
                data: dados,
                dataType: 'json',
                beforeSend: function() {
                    $("#resultado").removeClass('alert-white alert-danger alert-success alert-warning').addClass('alert alert-white');
                    $("#resultado").html('Aguarde, enviando a mensagem');
                    $("#resultado").fadeIn(250);
                },
                success: function(resposta) {
                    $("#resultado").removeClass("alert-white alert-danger alert-success alert-warning").addClass(resposta.tipo);
                    $("#resultado").html(resposta.mensagem);
                },
                error: function(resposta) {
                    $("#resultado").removeClass("alert-white alert-danger alert-success alert-warning").addClass('alert-danger');
                    $("#resultado").html('Um erro desconhecido aconteceu e sua mensagem não pode ser enviada');
                }
            });
            return false;
        });
    });
</script>

<?php include 'footer.php'; ?>