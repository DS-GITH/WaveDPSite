<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wave</title>
</head>

<body>

  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrossel de Imagens</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  </head>

  <body>

    
    <div class="carrossel-container">

      <div class="carrossel">
        <img src="../assets/Bannercata.png" alt="Imagem 1">
        <img src="../assets/Bannercata.png" alt="Imagem 2">
        <img src="../assets/Bannercata.png" alt="Imagem 3">
      </div>
      <span class="carrossel-btn prev">&#10094;</span>
      <span class="carrossel-btn next">&#10095;</span>
    </div>

    <style>
      

      .carrossel-container {
        
        position: relative;
        width: 100%;
        height: 700px;
        overflow: hidden;
        margin: 0;
      }
      .Title {
        position: relative;
        font-size: 50px;
        color: black;
        text-align: center;
        margin: 5% auto 30px auto;
        font-family: 'Arial', sans-serif;
        font-weight: bold;
      }

      .carrossel {
        display: flex;
        transition: transform 0.5s ease-in-out;
        height: 100%;
      }

      .carrossel img {
        margin-top: 4%;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
      }


      .carrossel-btn {
        position: absolute;
        top: 55%;
        transform: translateY(-50%);
        font-size: 30px;
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        cursor: pointer;
      }

      .prev {
        left: 10px;
      }

      .next {
        right: 10px;
      }
    </style>

    <script>
      // Configuração do carrossel
      const carrossel = document.querySelector('.carrossel');
      const prevButton = document.querySelector('.prev');
      const nextButton = document.querySelector('.next');
      const totalSlides = carrossel.children.length;
      let currentIndex = 0;

      // Função para mostrar a imagem correta
      function showSlide(index) {
        const offset = -index * 100; // Desloca para a imagem correta
        carrossel.style.transform = `translateX(${offset}%)`;
      }

      // Função para mover para a próxima imagem
      function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides; // A lógica do loop
        showSlide(currentIndex);
      }

      // Função para mover para a imagem anterior
      function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides; // A lógica do loop
        showSlide(currentIndex);
      }

      // Configuração do loop automático (opcional)
      setInterval(nextSlide, 5000); // Muda a imagem a cada 5 segundos

      // Eventos de clique para os botões
      prevButton.addEventListener('click', prevSlide);
      nextButton.addEventListener('click', nextSlide);
    </script>

  </body>

  </html>


</body>

</html>