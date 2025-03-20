<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Kitale Computers</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
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
        <section class="about-container">
            <div class="about-text">
                <h1>Discover Kitale Computers:<br><span>Your Tech Haven</span></h1>
                <p>Kitale Computers is a vibrant cyber café located in the heart of Kitale, Kenya. Founded in 2015, we have evolved from a small repair shop into a community hub for technology. Our mission is to create a welcoming environment where technology meets community, ensuring every visitor leaves satisfied. We value Customer Satisfaction, Integrity, Innovation, and Community Engagement.</p>
                <p>Our skilled team, including John Doe, our Founder & CEO, and Jane Smith, our Head Technician, is dedicated to providing exceptional service and support.</p>
            </div>
            <div class="about-image">
                <img src="about-image.jpg" alt="Kitale Computers Office">
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Kitale Computers. All rights reserved.</p>
    </footer>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background: #007bff;
    padding: 15px;
    text-align: center;
    color: white;
}

nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 15px;
}

nav ul li {
    display: inline;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

nav ul li a.active {
    text-decoration: underline;
}

#about-container {
    display: flex;
    align-items: center;
    max-width: 1000px;
    margin: 40px auto;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.about-text {
    flex: 1

    </style>
</body>
</html>