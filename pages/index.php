<?php
$produtos = [
    [
        'normal' => '../assets/HeartBegeCostas.png',   
        'hover' => '../assets/HeartBegeFrente.png',    
        'nome' => 'Blusa Heart Bege',                  
                                 
    ],

    [
        'normal' => '../assets/WavePlanetBack.png',
        'hover' => '../assets/WavePlanetFront.png',
        'nome' => 'Wave Planet',
        
    ],

    [
        'normal' => '../assets/WaveGirlBack.png',
        'hover' => '../assets/WaveGirlFront.png',
        'nome' => 'Wave Girl',
       
    ],

    [
        'normal' => '../assets/WaveShapeBack.png',
        'hover' => '../assets/WaveShapeFront.png',
        'nome' => 'Wave Shape'
       
    ],

    [
        'normal' => '../assets/WaveSkateBack.png',
        'hover' => '../assets/WaveSkateFront.png',
        'nome' => 'Wave Skate',
       
    ],


];
?>


<!DOCTYPE html>
<html lang="en">

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

        <h2 class="title"> Destaques </h2>

        <hr class="divisor">

    <div class="prodSec">

    <?php foreach ($produtos as $produto): ?>
        <div class="prodBox">
            <div class="imgContainer">
                <img src="<?php echo $produto['hover']; ?>" class="Hover">
                <img src="<?php echo $produto['normal']; ?>" class="Normal">
                
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

    <?php foreach ($produtos as $produto): ?>
        <div class="prodBox">
            <div class="imgContainer">
                <img src="<?php echo $produto['hover']; ?>" class="Hover">
                <img src="<?php echo $produto['normal']; ?>" class="Normal">
                
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

    <?php foreach ($produtos as $produto): ?>
        <div class="prodBox">
            <div class="imgContainer">
                <img src="<?php echo $produto['hover']; ?>" class="Hover">
                <img src="<?php echo $produto['normal']; ?>" class="Normal">
                
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

    <?php foreach ($produtos as $produto): ?>
        <div class="prodBox">
            <div class="imgContainer">
                <img src="<?php echo $produto['hover']; ?>" class="Hover">
                <img src="<?php echo $produto['normal']; ?>" class="Normal">
                
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