<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "game_store_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get mods from the database
$sql = "SELECT * FROM mods";
$result = $conn->query($sql);

?>

<link rel="stylesheet" href="/components/css/mods.css">

<div class="main">
    <h2>MODS</h2>
    <div class="calendar-container">
        <?php
        // Display the mods dynamically
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Check mod type and assign class dynamically
                $mod_class = '';
                $label_class = '';
                if ($row['mod_type'] == 'DEMO') {
                    $mod_class = 'purple-border';
                    $label_class = 'purple-label';
                } elseif ($row['mod_type'] == 'CONSOLE') {
                    $mod_class = 'pink-border';
                    $label_class = 'pink-label';
                } else {
                    $mod_class = 'game-card';
                }
                ?>
                <div class="game-card <?php echo $mod_class; ?>">
                    <a href="<?php echo $row['link']; ?>">
                        <?php if ($row['mod_type'] != 'Game') { ?>
                            <span class="label <?php echo $label_class; ?>"><?php echo $row['mod_type']; ?></span>
                        <?php } ?>
                        <img src="<?php echo $row['image_url']; ?>" alt="Game" class="game-cover">
                        <div class="release-date <?php echo $mod_class . '-date'; ?>"><?php echo $row['mod_name']; ?></div>
                    </a>
                </div>
                <?php
            }
        } else {
            echo "No mods found.";
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>
</div>
