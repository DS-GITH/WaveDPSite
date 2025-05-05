<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coleções</title>
  <link rel="stylesheet" href="./colecao.css">
</head>
<body>

<?php include_once '../includes/Header/header.php'; ?>

<div class="container">

<?php 

$colections = [
  [
    "nome" => "Primeira",
    "imagem" => "../assets/wavecolection.png",
    "textabout" => "Essa é a primeira coleção de blusas, com estampas exclusivas e cores vibrantes. Cada peça foi cuidadosamente desenhada para oferecer conforto e estilo. Venha conferir!",
  ],
  [
    "nome" => "Segunda",
    "imagem" => "../assets/wavecollection2.png",
    "textabout" => "Essa é a segunda coleção de blusas, com estampas exclusivas e cores vibrantes. Cada peça foi cuidadosamente desenhada para oferecer conforto e estilo. Venha conferir!",
  ],
];

// Exibe as coleções normalmente com links
if (empty($colections)) {
  echo "<h2>Nenhuma coleção encontrada.</h2>";
} else {
  foreach ($colections as $colecao) {
    echo "<a href='?colecao=" . urlencode($colecao['nome']) . "'>";
    echo "<div class='colecao'>";
    echo "<img src='" . $colecao['imagem'] . "' alt='" . $colecao['nome'] . "'>";
    echo "<h3 class='name'>" . $colecao['nome'] . "</h3>";
    echo "</div>";
    echo "</a>";
  }
}

// Exibe a janela somente se for clicada
if (isset($_GET['colecao'])) {
  $colecaoSelecionada = $_GET['colecao'];

  foreach ($colections as $colecao) {
    if ($colecao['nome'] === $colecaoSelecionada) {
      echo "<div class='hwindow'>";
      echo "<a href='colecao.php' class='close'>&times;</a>";
      echo "<h2 class='hname'>" . $colecao['nome'] . "</h2>";
      echo "<img src='" . $colecao['imagem'] . "' alt='" . $colecao['nome'] . "'>";
      echo "<p class='about'>" . $colecao['textabout'] . "</p>";
      echo "</div>";
    }
  }
}
?>

</div>

<?php include_once '../includes/Footer/footer.php'; ?>
</body>
</html>
