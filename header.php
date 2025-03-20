<?php echo "<!-- Current Page: " . basename($_SERVER['PHP_SELF']) . " -->"; ?>
<header>
    <h1>Kitale Computers</h1>
    <nav>
        <ul>
            <li><a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a></li>
            <li><a href="about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">About Us</a></li>
            <li><a href="services.php" class="<?= basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : '' ?>">Services</a></li>
            <li><a href="gallery.php" class="<?= basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : '' ?>">Gallery</a></li>
            <li><a href="contact.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
        </ul>
    </nav>
</header>
