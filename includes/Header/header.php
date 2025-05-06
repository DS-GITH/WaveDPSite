<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wave</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
      }

      header {
        width: 100%;
        padding: 15px 40px;
        background: #000;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: fixed;
        top: 0;
        z-index: 999;
      }

      .logo img {
        width: 100px;
        transition: transform 0.3s ease;
      }

      .logo img:hover {
        transform: scale(1.2);
      }

      .search-bar {
        display: flex;
        align-items: center;
        background-color: #1a1a1a;
        border: 1px solid #333;
        width: 350px;
        height: 38px;
        border-radius: 25px;
        padding: 0 15px;
      }

      .search-input {
        all: unset;
        flex: 1;
        font-size: 15px;
        color: #aaa;
      }

      .search-icon {
        font-size: 18px;
        color: #888;
        cursor: pointer;
      }

      .search-icon:hover {
        color: #fff;
      }

      .icons {
        display: flex;
        align-items: center;
        gap: 20px;
      }

      .icons i {
        font-size: 22px;
        color: #fff;
        cursor: pointer;
        transition: color 0.3s ease;
      }

      .icons i:hover {
        color: #e60023;
      }

      .navigate {
        margin-top: 10%; 
        display: flex;
        justify-content: center;
        gap: 40px;
        padding: 15px 0;
        list-style: none;
        font-size: 18px;
        font-weight: 500;
      }

      .navigate li a {
        color: #e60023;
        text-decoration: none;
        transition: all 0.2s ease-in-out;
      }

      .navigate li a:hover {
        color: black;
        font-size: 19px;
      }
    </style>
  </head>

  <body>
    <header>
      <div class="logo">
        <a href="../pages/index.php">
          <img src="../assets/Wave.png" alt="Logo Wave" />
        </a>
      </div>
      <div class="search-bar">
        <input
          class="search-input"
          type="text"
          placeholder="Pesquisar..."
        />
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
      <li><a href="./catalogo.php">Catálogo</a></li>
      <li><a href="./index.php">Home</a></li>
      <li><a href="./colecao.php">Coleções</a></li>
    </ul>
  </body>
</html>
