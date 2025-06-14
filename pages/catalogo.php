<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Blusas</title>
    <link rel="stylesheet" href="./catalogo.css">
</head>


<body>

    <?php include_once '../includes/Header/header.php'; ?>

    <?php include_once '../includes/BannerCatalogo/bannercata.php' ?>

    <div class="container">


        <aside class="sidebar">
            <form method="GET">
                <h2>Filtros</h2>

   
                <label for="colecao">Coleção:</label>
                <label><input type="checkbox" name="colecao[]" value="Primeira"> Primeira</label>
                <label><input type="checkbox" name="colecao[]" value="Segunda"> Segunda</label>
                <label><input type="checkbox" name="colecao[]" value="Terceira"> Terceira</label>
                <br>

                <label for="cor">Cor:</label>
                <label><input type="checkbox" name="cor[]" value="preto"> Preto</label>
                <label><input type="checkbox" name="cor[]" value="branco"> Branco</label>
                <label><input type="checkbox" name="cor[]" value="vermelho"> Vermelho</label>
                <br>

                <label for="ordem">Ordenar por:</label>
                <select name="ordem">
                    <option value="">Padrão</option>
                    <option value="menor_preco">Menor Preço</option>
                    <option value="maior_preco">Maior Preço</option>
                </select>
                <br>

      
                <button type="submit">Aplicar Filtros</button>
            </form>
        </aside>

        <main class="produtos">
            <?php
       
            $produtos = [
                [
                    "nome" => "Blusa Preta P",
                    "preco" => 59.90,
                    "colecao" => "Primeira",
                    "cor" => "preto",
                    "imageNormal" => '..\assets\heartcostas.jpeg',
                    "imageHover" => '..\assets\heartfrente.jpeg'
                ],
                [
                    "nome" => "Blusa Preta P",
                    "preco" => 59.90,
                    "colecao" => "Segunda",
                    "cor" => "preto",
                    "imageNormal" => '..\assets\HeartBegeCostas.png',
                    "imageHover" => '..\assets\HeartBegeFrente.png'
                ],
                [
                    "nome" => "Blusa Preta P",
                    "preco" => 59.90,
                    "colecao" => "Segunda",
                    "cor" => "preto",
                    "imageNormal" => '..\assets\HeartBegeCostas.png',
                    "imageHover" => '..\assets\HeartBegeFrente.png'
                ],
                [
                    "nome" => "Blusa Preta P",
                    "preco" => 59.90,
                    "colecao" => "Segunda",
                    "cor" => "preto",
                    "imageNormal" => '..\assets\HeartBegeCostas.png',
                    "imageHover" => '..\assets\HeartBegeFrente.png'
                ],
                [
                    "nome" => "Blusa Preta P",
                    "preco" => 59.90,
                    "colecao" => "Terceira",
                    "cor" => "preto",
                    "imageNormal" => '..\assets\HeartBegeCostas.png',
                    "imageHover" => '..\assets\HeartBegeFrente.png'
                ],
                [
                    "nome" => "Blusa Preta P",
                    "preco" => 59.90,
                    "colecao" => "Terceira",
                    "cor" => "preto",
                    "imageNormal" => '..\assets\HeartBegeCostas.png',
                    "imageHover" => '..\assets\HeartBegeFrente.png'
                ],
                [
                    "nome" => "Blusa Preta P",
                    "preco" => 59.90,
                    "colecao" => "Terceira",
                    "cor" => "preto",
                    "imageNormal" => '..\assets\HeartBegeCostas.png',
                    "imageHover" => '..\assets\HeartBegeFrente.png'
                ],

                [
                    "nome" => "Blusa Preta P",
                    "preco" => 59.90,
                    "colecao" => "Primeira",
                    "cor" => "preto",
                    "imageNormal" => '..\assets\HeartBegeCostas.png',
                    "imageHover" => '..\assets\HeartBegeFrente.png'
                ],
                [
                    "nome" => "Blusa Preta P",
                    "preco" => 59.90,
                    "colecao" => "Primeira",
                    "cor" => "preto",
                    "imageNormal" => '..\assets\HeartBegeCostas.png',
                    "imageHover" => '..\assets\HeartBegeFrente.png'
                ],
            ];


            if (!empty($_GET['colecao'])) {
                $produtos = array_filter($produtos, function ($p) {
                    return in_array($p['colecao'], $_GET['colecao']);
                });
            }

            if (!empty($_GET['cor'])) {
                $produtos = array_filter($produtos, function ($p) {
                    return in_array($p['cor'], $_GET['cor']);
                });
            }

      
            if (!empty($_GET['ordem'])) {
                if ($_GET['ordem'] === 'menor_preco') {
                    usort($produtos, fn($a, $b) => $a['preco'] <=> $b['preco']);
                } elseif ($_GET['ordem'] === 'maior_preco') {
                    usort($produtos, fn($a, $b) => $b['preco'] <=> $a['preco']);
                }
            }

        
            if (empty($produtos)) {
                echo "<p>Nenhum produto encontrado.</p>";
            } else {
                foreach ($produtos as $p) {
                    echo "<div class='produto'>";
                    echo "<div class='imgContainer'>";
                    echo "<img src='" . $p['imageNormal'] . "' alt='" . $p['nome'] . "' width='200' class='Normal'>";
                    echo "<img src='" . $p['imageHover'] . "' alt='" . $p['nome'] . "' width='200' class='Hover'>";
                    echo "</div>";
                    echo "<p>R$ " . number_format($p['preco'], 2, ',', '.') . "</p>";
                    echo "</div>";
                }
            }


            ?>
        </main>
    </div>

    

    <?php include_once '../includes/Footer/footer.php' ?>
</body>

</html>