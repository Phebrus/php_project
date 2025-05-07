<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cyberpunk Game Carousel</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #0f0f1c;
      font-family: 'Orbitron', sans-serif;
      margin: 0 auto;
      padding: 20px;
      color: white;
    }

    .carousel-container {
      display: flex;
      align-items: center;
      position: relative;
    }

    .arrow {
      background: #00ffff33;
      border: 2px solid #00ffff;
      color: #00ffff;
      font-size: 28px;
      padding: 10px 14px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
      box-shadow: 0 0 10px #00ffff77;
    }

    .arrow:hover {
      background: #00ffff55;
    }

    .carousel {
      display: flex;
      overflow-x: auto;
      scroll-behavior: smooth;
      gap: 16px;
      padding: 10px;
      margin: 0 10px;
    }

    .carousel::-webkit-scrollbar {
      display: none;
    }

    .game-card {
      background: linear-gradient(145deg, #1a1a2e, #1f1f3b);
      width: 200px;
      border-radius: 10px;
      overflow: hidden;
      flex-shrink: 0;
      box-shadow: 0 0 10px #0ff3, 0 0 20px #0ff2;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .game-card:hover {
      transform: scale(1.06);
      box-shadow: 0 0 20px #0ff6, 0 0 40px #0ff9;
    }

    .game-card img {
      width: 100%;
      display: block;
    }

    .game-info {
      padding: 12px;
    }

    .tag {
      background-color: #282c34;
      color: #00ffe7;
      display: inline-block;
      padding: 4px 8px;
      margin: 3px 2px 0 0;
      font-size: 11px;
      border-radius: 4px;
      text-shadow: 0 0 5px #00ffe7;
    }

    .price {
      color: #a4d007;
      font-weight: bold;
      margin-bottom: 8px;
      font-size: 14px;
      text-shadow: 0 0 4px #a4d007;
    }
  </style>
</head>
<body>
  <div class="carousel-container">
    <button class="arrow" onclick="scrollCarousel(-1)">&#10094;</button>

    <div class="carousel" id="carousel">
      <!-- Game Card 1 -->
      <div class="game-card">
        <img src="https://via.placeholder.com/200x100.png?text=Dead+by+Daylight" alt="Dead by Daylight"/>
        <div class="game-info">
          <div class="price">-50% $13.25</div>
          <div class="tag">Survival Horror</div>
          <div class="tag">Team-Based</div>
          <div class="tag">Online Co-Op</div>
          <div class="tag">Gore</div>
        </div>
      </div>

      <!-- Game Card 2 -->
      <div class="game-card">
        <img src="https://via.placeholder.com/200x100.png?text=Backrooms" alt="Backrooms"/>
        <div class="game-info">
          <div class="price">-20% $5.03</div>
          <div class="tag">3D</div>
          <div class="tag">Psychological Horror</div>
          <div class="tag">Online Co-Op</div>
        </div>
      </div>

      <!-- More cards can go here -->
    </div>

    <button class="arrow" onclick="scrollCarousel(1)">&#10095;</button>
  </div>

  <script>
    function scrollCarousel(direction) {
      const carousel = document.getElementById('carousel');
      const scrollAmount = 220;
      carousel.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
      });
    }
  </script>
</body>
</html>
