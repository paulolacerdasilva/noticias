<?php
include "../app/configuracao.php";
include "../app/autoload.php";
/*
$db = new Database;
$db->query("SELECT * FROM posts");
foreach($db->resultados() as $post){
    echo $post->titulo.'<br>';
}

$db->query("SELECT * FROM posts ORDER BY id DESC");
$db->resultado();
echo $db->resultado()->titulo."<br>";
echo $db->resultado()->texto."<br>";
echo $db->resultado()->criado_em."<br>";

$id = 3;

$db->query("DELETE FROM posts WHERE id = :id");
$db->bind(":id",$id);
$db->executa();
echo "<hr>Total Resultados: ".$db->totalResultados();
/*
date_default_timezone_set('America/Cuiaba');
$id = 2;
$usuarioId = 9;
$titulo = 'Programação Web';
$texto = 'A disciplina de programação web é ofertada no 3º ano do curso de Informática';
$criadoEm = date('Y-m-d H:i:s');

$db->query("UPDATE posts SET usuario_id = :usuario_id, titulo = :titulo, texto = :texto, criado_em = :criadoEm WHERE id = :id");

$db->bind(":id", $id);
$db->bind(":usuario_id", $usuarioId);
$db->bind(":titulo", $titulo);
$db->bind(":texto", $texto);
$db->bind(":criadoEm", $criadoEm);

$db->executa();
echo '<hr>Total Resultados: '.$db->totalResultados();
/*
$usuarioId = 10;
$titulo = "Mala amarela";
$texto = "Mala amarela é um clássico da música sertaneja...";

$db->query("INSERT INTO posts (usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");

$db->bind(":usuario_id", $usuarioId);
$db->bind(":titulo", $titulo);
$db->bind(":texto", $texto);

$db->executa();
echo '<hr>Total Resultados: '.$db->totalResultados();
echo '<hr>Último Id : '.$db->ultimoIdInserido();
*/
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