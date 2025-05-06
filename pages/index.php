<?php

include_once '../data/ColecaoAtual.php';
include_once '../data/Destaques.php';
include_once '../data/Recomendadas.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>


    <?php include_once '../includes/Header/header.php'; ?>


    <?php include_once '../includes/NewsBanner/banner.php'; ?>



    <section class="Products">

        <h2 class="title"> Coleção Atual </h2>

        <hr class="divisor">

        <div class="prodSec">

            <?php foreach ($ColecaoAtual as $peca): ?>
                <div class="prodBox">
                    <div class="imgContainer">
                        <img src="<?php echo $peca['hover']; ?>" class="Hover">
                        <img src="<?php echo $peca['normal']; ?>" class="Normal">

                    </div>
                    <div class="bttnBox">
                        <a href="#" class="Bttn">Comprar</a>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>

    </section>

    <section class="Products">

        <h2 class="title"> Destaques </h2>

        <hr class="divisor">

        <div class="prodSec">

            <?php foreach ($Destaques as $destacada): ?>
                <div class="prodBox">
                    <div class="imgContainer">
                        <img src="<?php echo $destacada['hover']; ?>" class="Hover">
                        <img src="<?php echo $destacada['normal']; ?>" class="Normal">

                    </div>
                    <div class="bttnBox">
                        <a href="#" class="Bttn">Comprar</a>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>

    </section>

    <section class="Products">

        <h2 class="title"> Recomendados </h2>

        <hr class="divisor">

        <div class="prodSec">

            <?php foreach ($Recomendadas as $recomendacao): ?>
                <div class="prodBox">
                    <div class="imgContainer">
                        <img src="<?php echo $recomendacao['hover']; ?>" class="Hover">
                        <img src="<?php echo $recomendacao['normal']; ?>" class="Normal">

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