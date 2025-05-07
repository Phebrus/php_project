<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Neon Game Showcase</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      background-color: #0f0f1c;
      font-family: 'Orbitron', sans-serif;
      padding: 20px;
      color: #fff;
      margin: 0;
    }

    .center-wrapper {
      display: flex;
      justify-content: center;
    }

    .grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr;
      grid-template-rows: 1fr 1fr;
      gap: 16px;
      width: 1200px;
    }

    .game-card {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      cursor: pointer;
      box-shadow: 0 0 10px #0ff2, 0 0 20px #0ff4;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .game-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.4s ease;
      display: block;
    }

    .game-card:hover img {
      transform: scale(1.08);
    }

    .game-card:hover {
      box-shadow: 0 0 20px #0ff4, 0 0 40px #0ff7;
    }

    .overlay-label {
      position: absolute;
      top: 8px;
      right: 8px;
      background-color: #ff0055;
      color: white;
      padding: 4px 10px;
      font-size: 11px;
      font-weight: bold;
      border-radius: 4px;
      text-shadow: 0 0 5px #000;
    }

    .overlay-label.green {
      background-color: #00ff99;
      color: #000;
    }

    .game-title {
      position: absolute;
      bottom: 12px;
      left: 12px;
      font-size: 18px;
      font-weight: bold;
      color: #00ffe7;
      text-shadow: 0 0 8px #00ffff;
    }

    .wide {
      grid-row: span 2;
    }

    .sale-tag {
      position: absolute;
      top: 12px;
      right: 12px;
      background-color: #ff0055;
      color: white;
      padding: 6px 10px;
      font-weight: bold;
      font-size: 14px;
      text-align: center;
      border-radius: 4px;
      box-shadow: 0 0 10px #ff0055;
    }
  </style>
</head>
<body>

  <div class="center-wrapper">
    <div class="grid">
      <!-- Left large card -->
      <div class="game-card wide">
        <img src="https://i0.wp.com/news.seagm.com/wp-content/uploads/2025/04/The-Top-Games.png?fit=1024%2C512&ssl=1" alt="Top Games">
        <div class="game-title">Top New Games of May 2025</div>
      </div>

      <!-- Top right cards -->
      <div class="game-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ3TV6GRC5cRq9gBbdqEdqlhlk5SfxqJZfzgc984AjzRbkT97rqbCWiDEvcUMmj1s1ZuU&usqp=CAU" alt="GTA VI">
        <div class="overlay-label">TRAILER</div>
      </div>

      <div class="game-card">
        <img src="https://i.ytimg.com/vi/Djtsw5k_DNc/maxresdefault.jpg" alt="GameMaker">
        <div class="overlay-label green">INFO</div>
      </div>

      <!-- Bottom right card -->
      <div class="game-card" style="grid-column: span 2;">
        <img src="https://images.thedirect.com/media/article_full/jedi-fallen-order-2-release.jpg" alt="Star Wars">
        <div class="game-title">Star Wars Jedi: Survivor</div>
        <div class="sale-tag">SALE<br>-80%</div>
      </div>
    </div>
  </div>

</body>
</html>
