<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Kitale Computers</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Gallery</h1>
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
        <section id="content">
            <h2>Our Gallery</h2>
            <p>Take a look at our cyber café setup, services, and happy customers.</p>
            
            <!-- CATEGORY NAVIGATION -->
            <nav class="gallery-nav">
                <button onclick="showCategory('interior')">Interior</button>
                <button onclick="showCategory('services')">Services</button>
                <button onclick="showCategory('customers')">Customers</button>
                <button onclick="showCategory('videos')">Videos</button>
            </nav>

            <!-- INTERIOR CATEGORY -->
            <div id="interior" class="gallery-category">
                <h3>Interior View</h3>
                <div class="gallery-container">
                    <?php
                    $dir = "images/interior/";
                    if (is_dir($dir)) {
                        $files = array_diff(scandir($dir), array('.', '..'));
                        foreach ($files as $file) {
                            if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                                echo '<img src="' . $dir . $file . '" alt="Interior Image">';
                            }
                        }
                    } else {
                        echo "<p>No images found.</p>";
                    }
                    ?>
                </div>
            </div>

            <!-- SERVICES CATEGORY -->
            <div id="services" class="gallery-category" style="display:none;">
                <h3>Our Services</h3>
                <div class="gallery-container">
                    <?php
                    $dir = "images/services/";
                    if (is_dir($dir)) {
                        $files = array_diff(scandir($dir), array('.', '..'));
                        foreach ($files as $file) {
                            if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                                echo '<img src="' . $dir . $file . '" alt="Service Image">';
                            }
                        }
                    } else {
                        echo "<p>No images found.</p>";
                    }
                    ?>
                </div>
            </div>

            <!-- CUSTOMERS CATEGORY -->
            <div id="customers" class="gallery-category" style="display:none;">
                <h3>Happy Customers</h3>
                <div class="gallery-container">
                    <?php
                    $dir = "images/customers/";
                    if (is_dir($dir)) {
                        $files = array_diff(scandir($dir), array('.', '..'));
                        foreach ($files as $file) {
                            if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                                echo '<img src="' . $dir . $file . '" alt="Customer Image">';
                            }
                        }
                    } else {
                        echo "<p>No images found.</p>";
                    }
                    ?>
                </div>
            </div>

            <!-- VIDEO SECTION -->
            <div id="videos" class="gallery-category" style="display:none;">
                <h3>Videos</h3>
                <div class="video-container">
                    <!-- Embed YouTube Videos -->
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>

                    <!-- Embed Local MP4 Video -->
                    <video width="560" height="315" controls>
                        <source src="videos/cyber-tour.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

        </section>
    </main>
    <footer>
        <p>&copy; 2025 Kitale Computers. All rights reserved.</p>
    </footer>

    <!-- JAVASCRIPT TO TOGGLE GALLERY SECTIONS -->
    <script>
        function showCategory(category) {
            let categories = document.getElementsByClassName('gallery-category');
            for (let i = 0; i < categories.length; i++) {
                categories[i].style.display = 'none';
            }
            document.getElementById(category).style.display = 'block';
        }
    </script>
</body>
</html>
