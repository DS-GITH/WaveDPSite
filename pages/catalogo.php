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

        
    </div>

    <style>
      /* Resetando margens e padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Container principal */
.container {
    display: flex;
    margin: 20% 0px 0px 0px
}

/* Sidebar */
.sidebar {
    margin: 0px 0px 0px 100px;
    width: 25%;
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Carregando a fonte do Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

/* Definindo a fonte para todo o corpo */
body {
    font-family: 'Poppins', sans-serif;
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
}

/* Títulos dos filtros */
.sidebar h2 {
    font-size: 1.6rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: #333;
}

/* Formulário de filtros */
.sidebar form {
    display: flex;
    flex-direction: column;
}

.sidebar label {
    margin-bottom: 10px;
    font-size: 1rem;
    color: #555;
}

.sidebar input[type="checkbox"] {
    margin-right: 5px;
}

.sidebar select,
.sidebar button {
    padding: 10px;
    margin-top: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

.sidebar button {
    background-color: #3498db;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.sidebar button:hover {
    background-color: #2980b9;
    transform: scale(1.05);
}

/* Exibição dos produtos */
.produtos {
    width: 50%;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

/* Cartão de produto */
.produto {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.produto:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.produto h3 {
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 10px;
}

.produto p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 10px;
}

.produto p:last-child {
    font-weight: bold;
    font-size: 1.2rem;
    color: #e74c3c;
    transition: transform 0.3s ease, color 0.3s ease;
}

.produto p:last-child:hover {
    color: #c0392b;
    transform: scale(1.1);
}

/* Ajustes para telas menores */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        margin-bottom: 20px;
    }

    .produtos {
        width: 100%;
    }
}

<?php include_once '../includes/Footer/footer.php'?>

    </style>
</body>
</html>
