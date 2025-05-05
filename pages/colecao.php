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
    ],

    [
        "nome" => "Segunda",
        "descricao" => "A segunda coleção de blusas.",
        "imagem" => "../assets/wavecolection.png",
    ]
];


if (empty($colections)){
    echo "<h2> Nenhuma coleção encontrada. </h2>";
} else {
    foreach ($colections as $colecao){
        echo "<div class='colecao'>";
        echo "<img src='" . $colecao['imagem'] . "' alt='" . $colecao['nome'] . "'>";
        echo "<h3 class='name'>" . $colecao['nome'] . "</h3>";
        echo "<p class='desc'>" . $colecao['descricao'] . "</p>";
        echo "</div>";
    }
}

?>

</div>


<?php include_once '../includes/Footer/footer.php' ?>

    
</body>
</html>