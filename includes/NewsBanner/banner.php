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
  <style>
    /* Estilo básico para o carrossel */
    .carrossel-container {
      position: relative;
      height: 800px;
      width: 100%;
      margin: auto;
      overflow: hidden;
    }

    .carrossel {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .carrossel img {
      width: 100%;
      height: auto;
      display: block;
    }

    .carrossel-btn {
      position: absolute;
      top: 50%;
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
</head>
<body>

  <div class="carrossel-container">
    <div class="carrossel">
      <img src="../assets/waveshirt.jpeg" alt="Imagem 1">
      <img src="../assets/wavevaral.jpeg" alt="Imagem 2">
      <img src="../assets/wavearte.jpeg" alt="Imagem 3">
    </div>
    <span class="carrossel-btn prev">&#10094;</span>
    <span class="carrossel-btn next">&#10095;</span>
  </div>

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
    setInterval(nextSlide, 3000); // Muda a imagem a cada 3 segundos

    // Eventos de clique para os botões
    prevButton.addEventListener('click', prevSlide);
    nextButton.addEventListener('click', nextSlide);

  </script>

</body>
</html>


</body>

</html>