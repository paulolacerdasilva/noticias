<?php
include "../app/configuracao.php";
include "../app/Libraries/Rota.php";
include "../app/Libraries/Controller.php";
include "../app/Libraries/Database.php";

$db = new Database;
$usuarioId = 10;
$titulo = "A volta de quem não foi";
$texto = "A VOLTA DE QUEM NÃO FOI É UM CLASSICO ...."

$db->query("INSERT INTO posts (usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");

$db->bind(":usuario_id", $usuarioId);
$db->bind(":titulo", $titulo);
$db->bind(":texto", $texto);

$db->executa();
echo '<hr>Total Resultados: '.$db->totalResultados();
echo '<hr>Último Id : '.$db->ultimoIdInserido();

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
</body>
</html>