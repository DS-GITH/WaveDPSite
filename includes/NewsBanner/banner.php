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

    <div class="Title"> Novidades </div>
    <div class="carrossel-container">

      <div class="carrossel">
        <img src="../assets/wavebanner.png" alt="Imagem 1">
        <img src="../assets/wavebanner.png" alt="Imagem 2">
        <img src="../assets/wavebanner.png" alt="Imagem 3">
      </div>
      <span class="carrossel-btn prev">&#10094;</span>
      <span class="carrossel-btn next">&#10095;</span>
    </div>

    <style>
      

      .carrossel-container {
        position: relative;
        top: 20%;
        width: 100%;
        height: 400px;
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

      const carrossel = document.querySelector('.carrossel');
      const prevButton = document.querySelector('.prev');
      const nextButton = document.querySelector('.next');
      const totalSlides = carrossel.children.length;
      let currentIndex = 0;


      function showSlide(index) {
        const offset = -index * 100; 
        carrossel.style.transform = `translateX(${offset}%)`;
      }

    
      function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides; 
        showSlide(currentIndex);
      }

  
      function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides; 
        showSlide(currentIndex);
      }

  
      setInterval(nextSlide, 5000); 

   
      prevButton.addEventListener('click', prevSlide);
      nextButton.addEventListener('click', nextSlide);
    </script>

  </body>

  </html>


</body>

</html>