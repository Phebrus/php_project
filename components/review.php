<link rel="stylesheet" href="/components/css/review.css">
<h1 class="section-title">RECOMMENDED</h1>
<div class="carousel-container">
  <button class="arrow" onclick="scrollCarousel(-1)">&#10094;</button>

  <div class="carousel-wrapper">
    <div class="carousel" id="carousel">
     <div class="game-card" 
     data-title="Doom: The Dark Ages"
     data-release="May 15, 2025"
     data-reviews="Highly Anticipated"
     data-tags="FPS,Action,Medieval,Single-player">
  <img src="https://example.com/images/doom-dark-ages.jpg" alt="Doom: The Dark Ages" />
  <div class="game-info">
    <div class="price">$69.99</div>
    <div class="tag">FPS</div>
    <button class="checkout-btn" onclick="checkout(this)">Check Out</button>
  </div>
</div>

<div class="game-card" 
     data-title="Assassin's Creed Shadows"
     data-release="March 20, 2025"
     data-reviews="Positive Reviews"
     data-tags="Action-Adventure,Stealth,Historical,Single-player">
  <img src="https://example.com/images/ac-shadows.jpg" alt="Assassin's Creed Shadows" />
  <div class="game-info">
    <div class="price">$59.99</div>
    <div class="tag">Stealth</div>
    <button class="checkout-btn" onclick="checkout(this)">Check Out</button>
  </div>
</div>

<div class="game-card" 
     data-title="Monster Hunter Wilds"
     data-release="February 28, 2025"
     data-reviews="Critically Acclaimed"
     data-tags="Action RPG,Multiplayer,Open World,Co-op">
  <img src="https://example.com/images/monster-hunter-wilds.jpg" alt="Monster Hunter Wilds" />
  <div class="game-info">
    <div class="price">$59.99</div>
    <div class="tag">Co-op</div>
    <button class="checkout-btn" onclick="checkout(this)">Check Out</button>
  </div>
</div>

<div class="game-card" 
     data-title="Split Fiction"
     data-release="March 6, 2025"
     data-reviews="10/10 Rating"
     data-tags="Co-op,Adventure,Fantasy,Sci-Fi">
  <img src="https://example.com/images/split-fiction.jpg" alt="Split Fiction" />
  <div class="game-info">
    <div class="price">$49.99</div>
    <div class="tag">Co-op</div>
    <button class="checkout-btn" onclick="checkout(this)">Check Out</button>
  </div>
</div>

<div class="game-card" 
     data-title="Clair Obscur: Expedition 33"
     data-release="April 24, 2025"
     data-reviews="Critically Acclaimed"
     data-tags="Turn-Based RPG,Fantasy,Single-player">
  <img src="https://example.com/images/clair-obscur.jpg" alt="Clair Obscur: Expedition 33" />
  <div class="game-info">
    <div class="price">$59.99</div>
    <div class="tag">RPG</div>
    <button class="checkout-btn" onclick="checkout(this)">Check Out</button>
  </div>
</div>

<div class="game-card" 
     data-title="Marvel 1943: Rise of Hydra"
     data-release="TBA 2025"
     data-reviews="Highly Anticipated"
     data-tags="Action-Adventure,Superhero,Single-player">
  <img src="https://example.com/images/marvel-1943.jpg" alt="Marvel 1943: Rise of Hydra" />
  <div class="game-info">
    <div class="price">$59.99</div>
    <div class="tag">Superhero</div>
    <button class="checkout-btn" onclick="checkout(this)">Check Out</button>
  </div>
</div>

<div class="game-card" 
     data-title="Borderlands 4"
     data-release="September 12, 2025"
     data-reviews="Highly Anticipated"
     data-tags="FPS,Looter Shooter,Co-op,Multiplayer">
  <img src="https://example.com/images/borderlands-4.jpg" alt="Borderlands 4" />
  <div class="game-info">
    <div class="price">$59.99</div>
    <div class="tag">Looter Shooter</div>
    <button class="checkout-btn" onclick="checkout(this)">Check Out</button>
  </div>
</div>

<div class="game-card" 
     data-title="Mafia: The Old Country"
     data-release="August 8, 2025"
     data-reviews="Positive Reviews"
     data-tags="Action-Adventure,Crime,Single-player">
  <img src="https://example.com/images/mafia-old-country.jpg" alt="Mafia: The Old Country" />
  <div class="game-info">
    <div class="price">$49.99</div>
    <div class="tag">Crime</div>
    <button class="checkout-btn" onclick="checkout(this)">Check Out</button>
  </div>
</div>

<div class="game-card" 
     data-title="Killing Floor 3"
     data-release="March 25, 2025"
     data-reviews="Positive Reviews"
     data-tags="FPS,Horror,Co-op,Multiplayer">
  <img src="https://example.com/images/killing-floor-3.jpg" alt="Killing Floor 3" />
  <div class="game-info">
    <div class="price">$39.99</div>
    <div class="tag">Horror</div>
    <button class="checkout-btn" onclick="checkout(this)">Check Out</button>
  </div>
</div>

<div class="game-card" 
     data-title="Avowed"
     data-release="TBA 2025"
     data-reviews="Highly Anticipated"
     data-tags="RPG,Fantasy,First-person,Single-player">
  <img src="https://example.com/images/avowed.jpg" alt="Avowed" />
  <div class="game-info">
    <div class="price">$59.99</div>
    <div class="tag">RPG</div>
    <button class="checkout-btn" onclick="checkout(this)">Check Out</button>
  </div>
</div>
  
    </div>
  </div>

  <button class="arrow" onclick="scrollCarousel(1)">&#10095;</button>
</div>

<div class="hover-box" id="hover-box">
  <div id="hover-title" style="font-weight:bold; margin-bottom:4px;"></div>
  <div id="hover-release" style="font-size:12px; color:#333;"></div>
  <div id="hover-reviews" style="font-size:12px; margin:6px 0;"></div>
  <div id="hover-tags"></div>
</div>

<script>
  const carousel = document.getElementById('carousel');
  const hoverBox = document.getElementById('hover-box');
  let currentIndex = 0;
  const cardWidthWithGap = 216;
  const visibleCards = 6;

  function scrollCarousel(direction) {
    const totalCards = carousel.children.length;
    const maxIndex = totalCards - visibleCards;
    currentIndex += direction;
    if (currentIndex < 0) currentIndex = maxIndex;
    else if (currentIndex > maxIndex) currentIndex = 0;
    carousel.style.transform = `translateX(-${currentIndex * cardWidthWithGap}px)`;
  }

  function checkout(button) {
    const card = button.closest('.game-card');
    card.classList.add('rotating');
    setTimeout(() => {
      window.location.href = 'about.php';
    }, 800);
  }

  carousel.querySelectorAll('.game-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
      hoverBox.style.opacity = '1';
      hoverBox.style.transform = 'translateY(0)';

      document.getElementById('hover-title').innerText = card.dataset.title;
      document.getElementById('hover-release').innerText = 'Released: ' + card.dataset.release;
      document.getElementById('hover-reviews').innerText = 'Overall user reviews: ' + card.dataset.reviews;
      document.getElementById('hover-tags').innerHTML = card.dataset.tags
        .split(',')
        .map(tag => `<span class="hover-tag">${tag}</span>`)
        .join('');
    });

    card.addEventListener('mousemove', (e) => {
      hoverBox.style.top = (e.clientY + 20) + 'px';
      hoverBox.style.left = (e.clientX + 20) + 'px';
    });

    card.addEventListener('mouseleave', () => {
      hoverBox.style.opacity = '0';
      hoverBox.style.transform = 'translateY(10px)';
    });
  });
</script>