<?php
$produtos = [
    [
        'normal' => '../assets/HeartBegeCostas.png',   
        'hover' => '../assets/HeartBegeFrente.png',    
        'nome' => 'Blusa Heart Bege',                  
                                 
    ],

    [
        'normal' => '../assets/BlueShirtCostas.png',
        'hover' => '../assets/BlueShirtFrente.png',
        'nome' => 'Blusa Azul',
        
    ],

    [
        'normal' => '../assets/BlackShirtCostas.png',
        'hover' => '../assets/BlackShirtFrente.png',
        'nome' => 'Blusa Preta',
       
    ]
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