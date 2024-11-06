<?php
include 'db.php';

// Fetch categories from the database
$sql = "SELECT * FROM categories";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Categories</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Clothing Categories</h1>

    <div class="categories">
        <?php
        while ($row = $result->fetch_assoc()) {
            echo '<div class="category">';
            echo '<h2>' . $row['category_name'] . '</h2>';
            echo '<img src="images/categories/' . $row['category_image'] . '" alt="' . $row['category_name'] . '">';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
