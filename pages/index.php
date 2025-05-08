<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Data\ColecaoAtual;
use App\Data\Destaques;
use App\Data\Recomendadas;

$colecao = ColecaoAtual::get();
$destaques = Destaques::get();
$recomendadas = Recomendadas::get();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WaveDeepStyle</title>
    <link rel="stylesheet" href="./index.css">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <?php include_once '../includes/Header/header.php'; ?>
    <?php include_once '../includes/NewsBanner/banner.php'; ?>

    <!-- Coleção Atual -->
    <section class="Products">
        <h2 class="title">Coleção Atual</h2>
        <hr class="divisor">
        <div class="prodSec">
            <?php foreach ($colecao as $peca): ?>
                <div class="prodBox">
                    <div class="imgContainer">
                        <img src="<?= $peca['hover'] ?>" class="Hover" alt="Produto Hover">
                        <img src="<?= $peca['normal'] ?>" class="Normal" alt="Produto">
                    </div>
                    <div class="bttnBox">
                        <a href="#" class="Bttn">Comprar</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Destaques -->
    <section class="Products">
        <h2 class="title">Destaques</h2>
        <hr class="divisor">
        <div class="prodSec">
            <?php foreach ($destaques as $item): ?>
                <div class="prodBox">
                    <div class="imgContainer">
                        <img src="<?= $item['hover'] ?>" class="Hover" alt="Produto Hover">
                        <img src="<?= $item['normal'] ?>" class="Normal" alt="Produto">
                    </div>
                    <div class="bttnBox">
                        <a href="#" class="Bttn">Comprar</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Recomendadas -->
    <section class="Products">
        <h2 class="title">Recomendadas</h2>
        <hr class="divisor">
        <div class="prodSec">
            <?php foreach ($recomendadas as $item): ?>
                <div class="prodBox">
                    <div class="imgContainer">
                        <img src="<?= $item['hover'] ?>" class="Hover" alt="Produto Hover">
                        <img src="<?= $item['normal'] ?>" class="Normal" alt="Produto">
                    </div>
                    <div class="bttnBox">
                        <a href="#" class="Bttn">Comprar</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <?php include_once '../includes/Footer/footer.php'; ?>

</body>
</html>
