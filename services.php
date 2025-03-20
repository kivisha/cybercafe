<?php
// Include database connection
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Kitale Computers</title>
    <link rel="stylesheet" href="styles.css">
    
    <script>
        function filterServices() {
            let input = document.getElementById('search').value.toLowerCase();
            let rows = document.querySelectorAll("#servicesTable tbody tr");
            let loader = document.getElementById("loading");

            loader.style.display = "block"; // Show loading animation

            setTimeout(() => {
                rows.forEach(row => {
                    let text = row.innerText.toLowerCase();
                    row.style.display = text.includes(input) ? "" : "none";
                });
                loader.style.display = "none"; // Hide loading animation
            }, 500);
        }
    </script>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section id="content">
            <h2>Our Services</h2>

            <input type="text" id="search" onkeyup="filterServices()" placeholder="Search services...">
            <p id="loading">Loading...</p>

            <table id="servicesTable">
                <thead>
                    <tr>
                        <th>Service Name</th>
                        <th>Description</th>
                        <th>Price (KES)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    try {
                        $stmt = $conn->prepare("SELECT name, description, price FROM services ORDER BY name ASC");
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>" . htmlspecialchars($row['name']) . "</td>
                                        <td>" . htmlspecialchars($row['description']) . "</td>
                                        <td>KES " . htmlspecialchars($row['price']) . "</td>
                                      </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No services available.</td></tr>";
                        }
                        $stmt->close();
                    } catch (Exception $e) {
                        echo "<tr><td colspan='3'>Error loading services.</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
