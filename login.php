<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GX Corner Videos</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #0f111a;
      color: #cdd6f4;
    }
    .container {
      display: flex;
      padding: 20px;
      gap: 20px;
    }
    .main-video {
      flex: 2;
      background-color: #1a1d2c;
      border-radius: 12px;
      overflow: hidden;
    }
    .main-video img {
      width: 100%;
      display: block;
    }
    .main-video-content {
      padding: 20px;
    }
    .main-video-content h2 {
      margin-top: 0;
    }
    .sidebar {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 15px;
      max-height: 400px;
      overflow-y: auto;
      padding-right: 5px;
      background: linear-gradient(180deg, #1f1f2f 0%, #12121c 100%);
      border: 2px solid #00f0ff;
      border-radius: 12px;
      box-shadow: 0 0 12px #00f0ff;
      scrollbar-width: thin;
      scrollbar-color: #1f1f2f #0f111a;
    }
    .sidebar::-webkit-scrollbar {
      width: 8px;
    }
    .sidebar::-webkit-scrollbar-track {
      background: #0f111a;
    }
    .sidebar::-webkit-scrollbar-thumb {
      background: #1f1f2f;
      border-radius: 4px;
      box-shadow: 0 0 6px #00f0ff;
      transition: box-shadow 0.3s;
    }
    .sidebar:hover::-webkit-scrollbar-thumb {
      box-shadow: 0 0 10px #00f0ff;
    }
    .video-item {
      display: flex;
      gap: 10px;
      background-color: rgba(26, 29, 44, 0.8);
      border-radius: 8px;
      padding: 10px;
      min-height: 70px;
      position: relative;
      overflow: hidden;
      transition: background 0.3s;
    }
    .video-item:hover {
      background-color: rgba(36, 40, 60, 0.9);
    }
    .video-item img {
      width: 100px;
      height: 60px;
      object-fit: cover;
      border-radius: 6px;
      transition: transform 0.3s;
    }
    .video-item:hover img {
      transform: scale(1.05);
    }
    .video-info {
      flex: 1;
    }
    .tags {
      margin-top: 5px;
    }
    .tag {
      background-color: #2c2f48;
      color: #89b4fa;
      border-radius: 4px;
      padding: 2px 6px;
      font-size: 12px;
      margin-right: 5px;
    }
    .youtube-button {
      margin-top: 10px;
      background-color: #ff5555;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }
    .video-cover {
      position: absolute;
      top: 0;
      left: 0;
      width: 100px;
      height: 60px;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 6px;
      opacity: 0;
      transition: opacity 0.3s;
      pointer-events: none;
    }
    .video-item:hover .video-cover {
      opacity: 1;
    }
    .video-icon {
      width: 24px;
      height: 24px;
      background-color: #00f0ff;
      mask: url('https://cdn-icons-png.flaticon.com/512/0/375.png') no-repeat center;
      mask-size: contain;
      -webkit-mask: url('https://cdn-icons-png.flaticon.com/512/0/375.png') no-repeat center;
      -webkit-mask-size: contain;
    }
  </style>
</head>
<body>
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
    </div>
  </div>
</body>
</html>