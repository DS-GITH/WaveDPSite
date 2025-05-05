<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./colecao.css">
</head>
<body>



<?php include_once '../includes/Header/header.php'; ?>

<div class="container">

<?php 

$colections =[
    [
        "nome" => "Primeira",
        "descricao" => "A primeira coleção de blusas.",
        "imagem" => "../assets/wavecolection.png",
        "textabout" => "Essa é a primeira coleção de blusas, com estampas exclusivas e cores vibrantes. 
        Cada peça foi cuidadosamente desenhada para oferecer conforto e estilo. Venha conferir!",
    ],

];


if (empty($colections)){
    echo "<h2> Nenhuma coleção encontrada. </h2>";
} else {
    foreach ($colections as $colecao){
        echo "<a href='#'>";
        echo "<div class='colecao'>";
        echo "<img src='" . $colecao['imagem'] . "' alt='" . $colecao['nome'] . "'>";
        echo "<h3 class='name'>" . $colecao['nome'] . "</h3>";
        echo "<p class='desc'>" . $colecao['descricao'] . "</p>";
        echo "</div>";
        echo "</a>";
    }
}

foreach ($colections as $colecao){
    echo "<div class='hwindow'>";
    echo "<h2 class='hname'>" . $colecao['nome'] . "</h2>";
    echo "<img src='" . $colecao['imagem'] . "' alt='" . $colecao['nome'] . "'>";

    echo "<p class='about'>" . $colecao['textabout'] . "</p>";
}

?>

</div>


<?php include_once '../includes/Footer/footer.php' ?>

    
</body>
</html>