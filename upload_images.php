<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "images/body_types/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $body_type = $_POST['body_type'];
        $image_name = basename($_FILES["fileToUpload"]["name"]);

        $sql = "INSERT INTO body_type_images (body_type, image_name) VALUES ('$body_type', '$image_name')";
        $conn->query($sql);
        echo "Image uploaded successfully.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Upload Body Type Images</h1>
    <form action="upload_images.php" method="post" enctype="multipart/form-data">
        Select body type:
        <select name="body_type">
            <option value="Inverted Triangle">Inverted Triangle</option>
            <option value="Pear">Pear</option>
            <option value="Hourglass">Hourglass</option>
        </select><br><br>
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
        <button type="submit">Upload Image</button>
    </form>
</body>
</html>
