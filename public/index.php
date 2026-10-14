<?php
session_start();
include "../app/configuracao.php";
include "../app/autoload.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NOME?></title>
    <link rel="stylesheet" href="<?=URL?>/public/css/estilo.css">
    <script src="<?=URL?>/public/js/jquery.funcoes.js"></script>
    <link rel="stylesheet" href="<?=URL?>/public/bootstrap/css/bootstrap.min.css"/>
    <script src="<?=URL?>/public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        include '../app/views/header.php';
        $rotas = new Rota();
       // $rotas->url();
        include '../app/views/footer.php';
    ?>
   <div vw class="enabled">
    <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
        <div vw-plugin-top-wrapper></div>
      </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script> new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
    <!-- Fim do Código do VLibras -->
</body>
</html>