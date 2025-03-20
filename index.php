<?php
// Start a session (if needed for login later)
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kitale Computers Cyber Café - Your one-stop solution for internet access, printing, and digital services.">
    <title>Kitale Computers Cyber Café</title>
    <link rel="stylesheet" href="styles.css"> <!-- Ensure this path is correct -->
</head>
<body>
    <header>
        <div class="hero">
            <div class="hero-overlay"></div>
            <div>
                <h1>Welcome to Kitale Computers Cyber Café</h1>
                <p>Your one-stop solution for internet access, printing, and digital services.</p>
                <a href="services.php" class="cta-btn">Explore Our Services</a>
            </div>
        </div>
        <nav>
            <?php 
                $current_page = basename($_SERVER['PHP_SELF']);
            ?>
            <ul>
                <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
                <li><a href="about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About Us</a></li>
                <li><a href="services.php" class="<?= $current_page == 'services.php' ? 'active' : '' ?>">Services</a></li>
                <li><a href="gallery.php" class="<?= $current_page == 'gallery.php' ? 'active' : '' ?>">Gallery</a></li>
                <li><a href="contact.php" class="<?= $current_page == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="features">
            <div class="feature-item animated">
                <i class="fas fa-wifi"></i>
                <h3>Fast Internet</h3>
                <p>Enjoy reliable, high-speed internet for all your browsing needs.</p>
            </div>
            <div class="feature-item animated">
                <i class="fas fa-print"></i>
                <h3>Printing & Scanning</h3>
                <p>Get high-quality prints and scans for your documents.</p>
            </div>
            <div class="feature-item animated">
                <i class="fas fa-desktop"></i>
                <h3>Professional Setup</h3>
                <p>Work in a comfortable, professional environment.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Kitale Computers. All rights reserved.</p>
    </footer>
    
</body>
</html>
