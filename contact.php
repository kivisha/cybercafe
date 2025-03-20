<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Kitale Computers</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <?php 
                $pages = ["index.php" => "Home", "about.php" => "About Us", "services.php" => "Services", "gallery.php" => "Gallery", "contact.php" => "Contact"];
                $current_page = basename($_SERVER['PHP_SELF']);
            ?>
            <ul>
                <?php foreach ($pages as $file => $name): ?>
                    <li><a href="<?= $file ?>" class="<?= $current_page == $file ? 'active' : '' ?>"><?= $name ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id="contact-container">
            <div id="contact-info">
                <h2>Contact Us</h2>
                <p>Reach out for any inquiries or support.</p>
                <p><i class="fas fa-envelope"></i> info@kitalecomputers.co.ke</p>
                <p><i class="fas fa-phone"></i> +254 700 123 456</p>
                <p><i class="fas fa-map-marker-alt"></i> Moi Avenue, Kitale, Kenya</p>
            </div>

            <div id="contact-form">
                <h2>Send Us a Message</h2>
                <form action="contact.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" placeholder="Type your message" required></textarea>
                    
                    <div class="terms">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">I accept the <a href="#">Terms</a></label>
                    </div>

                    <button type="submit" name="submit">Send</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    include 'config.php';

                    $name = trim($_POST['name']);
                    $email = trim($_POST['email']);
                    $message = trim($_POST['message']);

                    if (!empty($name) && !empty($email) && !empty($message)) {
                        $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
                        $stmt->bind_param("sss", $name, $email, $message);
                        if ($stmt->execute()) {
                            echo "<p class='success'>Message sent successfully!</p>";
                        } else {
                            echo "<p class='error'>Error: " . $stmt->error . "</p>";
                        }
                        $stmt->close();
                    } else {
                        echo "<p class='error'>Please fill in all fields.</p>";
                    }
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Kitale Computers. All rights reserved.</p>
    </footer>
<style>
    /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: #f8f8f8;
}

/* Navigation */
nav ul {
    list-style: none;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline;
    margin: 0 10px;
}

nav ul li a {
    text-decoration: none;
    padding: 8px 12px;
    border-radius: 5px;
    color: #000;
}

nav ul li a.active {
    background: blue;
    color: white;
}

/* Contact Section */
#contact-container {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    max-width: 900px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 10px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#contact-info {
    flex: 1;
    padding: 20px;
    text-align: left;
}

#contact-info h2, #contact-form h2 {
    text-align: center;
    font-size: 22px;
}

#contact-info p {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
}

#contact-info i {
    font-size: 18px;
    color: blue;
}

#contact-form {
    flex: 1;
    padding: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
}

textarea {
    resize: vertical;
    height: 100px;
}

.terms {
    display: flex;
    align-items: center;
    gap: 5px;
    margin-top: 10px;
}

.terms input {
    width: 15px;
    height: 15px;
}

.terms label {
    font-size: 14px;
}

.terms a {
    color: blue;
    text-decoration: none;
}

button {
    width: 100%;
    padding: 12px;
    background: blue;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    margin-top: 10px;
}

button:hover {
    background: darkblue;
}

/* Success and Error Messages */
.success {
    color: green;
    text-align: center;
}

.error {
    color: red;
    text-align: center;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    #contact-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    #contact-info, #contact-form {
        width: 100%;
    }

    .terms {
        justify-content: center;
    }
}

</style>
</body>
</html>
