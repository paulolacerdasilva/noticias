<?php
session_start();
include "../app/configuracao.php";
include "../app/autoload.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        
/* Estilo para limitar o texto em exatamente 3 linhas */
.text-limit {
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Número de linhas */
    -webkit-box-orient: vertical;  
    overflow: hidden;
    transition: all 0.3s ease;
}

/* Classe que será aplicada via JavaScript para mostrar o texto completo */
.text-limit.expanded {
    display: block;
    -webkit-line-clamp: unset;
}

    </style>
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
</body>
</html>