<?php
session_start();
include 'condb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="/css_pages/index.css">
</head>

<body>
    <header>
        <?php include_once __DIR__ . "/components/header.php"; ?>
    </header>

        <div class="explore-section">
  <div class="explore-content">
    <h1 class="explore-heading">Handle Business, Then Handle Boss Fights</h1>
    <button class="explore-button" onclick="window.location.href='about.php'">Explore</button>
  </div>
        </div>

    </section>
    <div style="margin-top: 20px;">
            <?php include __DIR__ . "/components/calendar.php"; ?>
    </div>

    <div class="container">
    <div class="main-video">
      <img src="box2.png" alt="Top New Games of May 2025">
      <div class="main-video-content">
        <h2>Top New Games of May 2025</h2>
        <p>May 2025 is packed with heavy hitters, cult comebacks, and a few surprises that could steal the spotlight. At Opera GX, we've handpicked the most exciting titles you won't want to miss. Quick breakdowns. Sharp picks. No filler.</p>
        <button class="youtube-button">Watch on YouTube</button>
      </div>
    </div>
    <div class="sidebar">
      <div class="video-item">
        <div class="video-cover"><div class="video-icon"></div></div>
        <img src="mod_thumbnail.jpg" alt="Mods">
        <div class="video-info">
          <strong>Top 7 Opera GX Mods You Need to Try</strong>
          <div class="tags">
            <span class="tag">MOD</span>
          </div>
        </div>
      </div>
      <div class="video-item">
        <div class="video-cover"><div class="video-icon"></div></div>
        <img src="april2025.jpg" alt="April 2025">
        <div class="video-info">
          <strong>Top New Games of April 2025</strong>
          <div class="tags">
            <span class="tag">TOP</span>
          </div>
        </div>
      </div>
      <div class="video-item">
        <div class="video-cover"><div class="video-icon"></div></div>
        <img src="roblox_obby.jpg" alt="Hell's Obby">
        <div class="video-info">
          <strong>Hell's Obby Now on Roblox</strong>
          <div class="tags">
            <span class="tag">FUNNY</span>
          </div>
        </div>
      </div>
      <div class="video-item">
        <div class="video-cover"><div class="video-icon"></div></div>
        <img src="march2025.jpg" alt="March 2025">
        <div class="video-info">
          <strong>Top New Games of March 2025</strong>
          <div class="tags">
            <span class="tag">TOP</span>
            <span class="tag">FUNNY</span>
          </div>
        </div>
      </div>
      <div class="video-item">
        <div class="video-cover"><div class="video-icon"></div></div>
        <img src="march2025.jpg" alt="March 2025">
        <div class="video-info">
          <strong>Top New Games of March 2025</strong>
          <div class="tags">
            <span class="tag">TOP</span>
            <span class="tag">FUNNY</span>
          </div>
        </div>
      </div>
      <div class="video-item">
        <div class="video-cover"><div class="video-icon"></div></div>
        <img src="march2025.jpg" alt="March 2025">
        <div class="video-info">
          <strong>Top New Games of March 2025</strong>
          <div class="tags">
            <span class="tag">TOP</span>
            <span class="tag">FUNNY</span>
          </div>
        </div>
      </div>
      <div class="video-item">
        <div class="video-cover"><div class="video-icon"></div></div>
        <img src="march2025.jpg" alt="March 2025">
        <div class="video-info">
          <strong>Top New Games of March 2025</strong>
          <div class="tags">
            <span class="tag">TOP</span>
            <span class="tag">FUNNY</span>
          </div>
        </div>
      </div>
    </div>
  </div>

   <div>
     <?php include_once __DIR__ . "/components/review.php"; ?>
      <?php include __DIR__ . "/components/mods.php"; ?>
    </div>

  <!--  -->
  
    <?php include_once __DIR__ . "/components/news.php" ?>

</section>


<footer>
    <?php include_once __DIR__ . "/components/footer.php"; ?>
</footer>

</body>

</html>
