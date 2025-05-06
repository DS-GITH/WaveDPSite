<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <title>Wave</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="..\pages\index.php">
          <img src="../assets/Wave.png" alt="Logo Wave">
        </a>
      </div>
      <div class="search-bar">
        <input class="search-input" type="text" placeholder="Pesquisar..." />
        <i class="fa-solid fa-magnifying-glass search-icon"></i>
      </div>
      <nav class="icons">
        <div class="icon">
          <i class="fa-solid fa-heart"></i>
        </div>
        <div class="icon">
          <i class="fa-solid fa-cart-plus"></i>
        </div>
        <div class="icon">
          <i class="fa-regular fa-circle-user"></i>
        </div>
      </nav>
    </header>

    <ul class="navigate">
      <li class="inner"><a href="./catalogo.php">Catálogo</a></li>
      <li class="inner"><a href="./index.php">Home</a></li>
      <li class="inner"><a href="./colecao.php">Coleções</a></li>
      <li class="inner"><a href="#">Contato</a></li>
    </ul>

    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      header {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1;
        background-color: #000000;
        color: white;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        box-shadow: 0px -4px 35px 0px rgba(0, 0, 0, 1);
      }

      .navigate {
        margin-top: 10%;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        list-style: none;
        padding: 10px 0;
        font-weight: bold;
        font-size: 20px;
        position: relative; 
        z-index: 0;
      }

      .inner {
        margin-right: 50px;
      }

      .inner:last-child {
        margin-right: 0;
      }

      a {
        text-decoration: none;
        color: #7a0000;
        transition: font-size 0.3s ease;
      }

      .inner:hover a {
        font-size: 25px;
      }

      .logo img {
        width: 120px;
        height: auto;
        transition: transform 0.3s ease;
      }

      .logo img:hover {
        transform: scale(1.55);
      }

      .search-bar {
        display: flex;
        align-items: center;
        background-color: white;
        width: 400px;
        height: 40px;
        border-radius: 20px;
        padding: 0 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      }

      .search-bar:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      }

      .search-input {
        all: unset;
        flex: 1;
        font-size: 16px;
        color: #333;
      }

      .search-icon {
        font-size: 20px;
        color: #666;
        cursor: pointer;
      }

      .search-icon:hover {
        color: #000;
      }

      .icons {
        display: flex;
        align-items: center;
        gap: 20px;
      }

      .icons i {
        font-size: 30px;
        color: white;
        cursor: pointer;
        transition: color 0.3s ease;
      }

      .icons i:hover {
        color: #ccc;
      }
    </style>
  </body>
</html>
