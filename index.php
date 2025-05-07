<?php
session_start();
include 'condb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="/index.css">
</head>

<body>
    <header>
        <?php include_once __DIR__ . "/components/header.php"; ?>
    </header>

    
        <div class="explore-section">
  <div class="explore-content">
    <h1 class="explore-heading">Handle Business, Then Handle Boss Fights</h1>
    <button class="explore-button" onclick="window.location.href='store.php'">Explore</button>
  </div>
        </div>


    <main>
        <div>
            <h1>Game Store</h1>
            <?php if (isset($_SESSION['username'])) : ?>
                <p>Welcome <?php echo $_SESSION['username']; ?></p>
            <?php endif ?>
            <p>Discover games you will love</p>
            <a href="store.php">Handle Business, Then Handle Boss Fights</a>
        </div>
    </main>

    <?php include_once __DIR__ . "/components/review.php"; ?>
    <section>
        <div>
            <h4>WE RECOMMEND</h4>
            <div>
                <div>
                    <img src="https://i.ytimg.com/vi/Djtsw5k_DNc/maxresdefault.jpg">
                    <div>
                        <h5>Sea of thieves</h5>
                        <p>Xbox Game Studios</p>
                        <p>Sea of Thieves offers the essential pirate experience...</p>
                        <p>฿460</p>
                        <a href="store.php">See more</a>
                    </div>
                </div>

                <div>
                    <img src="https://i.ytimg.com/vi/WYvw1ZZ9WyA/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCTe4AsDDcf4DrUeLm-q17cy2y-wg">
                    <div>
                        <h5>PUBG: BATTLEGROUNDS</h5>
                        <p>KRAFTON, Inc.</p>
                        <p>Land on strategic locations, loot weapons...</p>
                        <p>฿99</p>
                        <a href="store.php">See more</a>
                    </div>
                </div>

                <div>
                    <img src="https://estaticos-cdn.prensaiberica.es/clip/882ee5d0-adde-4d02-9a48-984f80b550ab_mobile-ep-aspect-ratio_640w_0.jpg">
                    <div>
                        <h5>Dead by daylight</h5>
                        <p>Behaviour Interactive Inc.</p>
                        <p>Multiplayer (4vs1) horror game...</p>
                        <p>฿330</p>
                        <a href="store.php">See more</a>
                    </div>
                </div>

                <div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ3TV6GRC5cRq9gBbdqEdqlhlk5SfxqJZfzgc984AjzRbkT97rqbCWiDEvcUMmj1s1ZuU&usqp=CAU">
                    <div>
                        <h5>Dead by daylight</h5>
                        <p>Behaviour Interactive Inc.</p>
                        <p>Multiplayer (4vs1) horror game...</p>
                        <p>฿330</p>
                        <a href="store.php">See more</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

                <footer>
                    <?php include_once __DIR__ . "/components/footer.php"; ?>
                </footer>
</body>

</html>
