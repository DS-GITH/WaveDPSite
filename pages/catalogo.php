<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Blusas</title>
</head>
<body>

  <?php include_once '../includes/Header/header.php'; ?>

  <?php include_once '../includes/BannerCatalogo/bannercata.php' ?>

    <div class="container">

        <!-- Sidebar de Filtros -->
        <aside class="sidebar">
            <form method="GET">
                <h2>Filtros</h2>

                <!-- Filtro de Tamanho -->
                <label for="tamanho">Tamanho:</label><br>
                <label><input type="checkbox" name="tamanho[]" value="P"> P</label>
                <label><input type="checkbox" name="tamanho[]" value="M"> M</label>
                <label><input type="checkbox" name="tamanho[]" value="G"> G</label>
                <br><br>

                <!-- Filtro de Cor -->
                <label for="cor">Cor:</label><br>
                <label><input type="checkbox" name="cor[]" value="preto"> Preto</label>
                <label><input type="checkbox" name="cor[]" value="branco"> Branco</label>
                <label><input type="checkbox" name="cor[]" value="vermelho"> Vermelho</label>
                <br><br>

                <!-- Ordenação -->
                <label for="ordem">Ordenar por:</label><br>
                <select name="ordem">
                    <option value="">Padrão</option>
                    <option value="menor_preco">Menor Preço</option>
                    <option value="maior_preco">Maior Preço</option>
                </select>
                <br><br>

                <!-- Botão de Submissão -->
                <button type="submit">Aplicar Filtros</button>
            </form>
        </aside>

        
</body>
</html>
