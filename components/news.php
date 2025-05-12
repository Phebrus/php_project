<?php
include 'condb.php';

$sql = "SELECT * FROM news ORDER BY news_id DESC";
$result = mysqli_query($conn, $sql);
?>

<link rel="stylesheet" href="/components/css/news.css">

<h2 class="section-title">DAILY NEWS</h2>

<div class="filter-bar">
  <button class="active" onclick="filterNews('All')">All</button>
  <button onclick="filterNews('Gaming')">Gaming</button>
  <button onclick="filterNews('Technology')">Technology</button>
</div>

<section class="news-grid" id="newsGrid">
  <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <a href="#">
    <div class="news-card" data-category="<?= $row['category'] ?>">
      <div class="news-header">
        <span class="source"><?=($row['source']) ?></span>
        <span class="category"><?=($row['category']) ?></span>
      </div>
      <h3 class="news-title"><?=($row['title']) ?></h3>
      <img src="<?=($row['image_url']) ?>" alt="News Thumbnail">
    </div>
    </a>
  <?php endwhile; ?>
</section>

<script>
function filterNews(category) {
  const cards = document.querySelectorAll('.news-card');
  cards.forEach(card => {
    if (category === 'All' || card.dataset.category === category) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  });

  document.querySelectorAll('.filter-bar button').forEach(btn => btn.classList.remove('active'));
  document.querySelector(`.filter-bar button:contains('${category}')`)?.classList.add('active');
}
</script>
