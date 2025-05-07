<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daily News</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
  background-color: #0f1117;
  font-family: 'Orbitron', sans-serif;
  color: #ffffff;
  margin: 0;
  padding: 0;
}

.section-title {
  padding: 20px;
  color: #ccc;
  text-shadow: 0 0 5px #00ffff88;
  font-size: 20px;
}

.filter-bar {
  display: flex;
  gap: 10px;
  padding: 0 20px;
  margin-bottom: 20px;
}

.filter-bar button {
  background: #1b1f2a;
  color: #00ffff;
  border: none;
  padding: 8px 16px;
  border-radius: 8px;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s;
}

.filter-bar button:hover,
.filter-bar button.active {
  background: #00ffff;
  color: #1b1f2a;
}

.news-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 20px;
  padding: 0 20px 40px;
}

.news-card {
  background: #1b1f2a;
  border-radius: 12px;
  overflow: hidden;
  padding: 20px;
  box-shadow: 0 0 10px #00ffff22;
  display: flex;
  flex-direction: column;
  transition: transform 0.2s ease, box-shadow 0.3s ease;
}

.news-card:hover {
  transform: scale(1.03);
  box-shadow: 0 0 15px #00ffff88;
}

.news-header {
  display: flex;
  justify-content: space-between;
  font-size: 12px;
  margin-bottom: 10px;
  color: #ccc;
}

.news-header .source {
  color: #ff4757;
  font-weight: bold;
}

.news-header .category {
  background: #2c3e50;
  padding: 2px 6px;
  border-radius: 5px;
  font-size: 11px;
  color: #00ffff;
}

.news-title {
  font-size: 15px;
  font-weight: bold;
  color: #fff;
  margin-bottom: 10px;
}

.news-card img {
  width: 100%;
  height: 150px;
  object-fit: cover;
  border-radius: 8px;
}

</style>
<body>
  <h2 class="section-title">DAILY NEWS</h2>

  <div class="filter-bar">
    <button class="active">All</button>
    <button>Gaming</button>
    <button>Technology</button>
  </div>

  <section class="news-grid">
    <div class="news-card">
      <div class="news-header">
        <span class="source">GamesRadar</span>
        <span class="category">News</span>
      </div>
      <h3 class="news-title">Talk To Me director's new horror movie Bring Her Back is being called...</h3>
      <img src="https://i.imgur.com/uDK58GE.jpeg" alt="News Thumbnail">
    </div>

    <div class="news-card">
      <div class="news-header">
        <span class="source">Digital Trends</span>
        <span class="category">Gaming</span>
      </div>
      <h3 class="news-title">8 intense and gripping movies like Sinners to watch next</h3>
      <img src="https://i.imgur.com/VUONVkl.jpeg" alt="News Thumbnail">
    </div>

    <div class="news-card">
      <div class="news-header">
        <span class="source">Gamespot</span>
        <span class="category">News</span>
      </div>
      <h3 class="news-title">Split Fiction Sales Are Nearly Double What EA Expected So Far</h3>
      <img src="https://i.imgur.com/kAfXnCE.jpeg" alt="News Thumbnail">
    </div>

    <!-- Add more .news-card items here -->
  </section>
</body>
</html>
