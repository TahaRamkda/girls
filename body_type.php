<?php
include 'db.php';

// Get the measurements from the form
$bust = $_POST['bust'];
$waist = $_POST['waist'];
$hip = $_POST['hip'];

// Calculate body type logic (simplified)
if ($bust > $hip && $bust > $waist) {
    $body_type = 'Inverted Triangle';
} elseif ($hip > $bust && $hip > $waist) {
    $body_type = 'Pear';
} else {
    $body_type = 'Hourglass';
}

// Fetch corresponding images from the database
$sql = "SELECT * FROM body_type_images WHERE body_type='$body_type'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Body Type</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Your Body Type: <?php echo $body_type; ?></h1>

    <div class="image-gallery">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<img src="images/body_types/' . $row['image_name'] . '" alt="' . $body_type . '">';
            }
        } else {
            echo "<p>No images available for this body type.</p>";
        }
        ?>
    </div>

    <a href="category.php">Explore Clothing Categories</a>
</body>
</html>
