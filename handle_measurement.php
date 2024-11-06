<?php
// handle_measurements.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bust = $_POST['bust'];
    $waist = $_POST['waist'];
    $hip = $_POST['hip'];

    // Basic body type determination logic
    if ($bust > $waist && $hip > $waist && $bust < $hip) {
        $bodyType = 'Pear Shape';
    } elseif ($bust > $hip && $bust > $waist) {
        $bodyType = 'Apple Shape';
    } elseif ($bust === $hip && $bust === $waist) {
        $bodyType = 'Rectangle Shape';
    } elseif ($bust === $hip && $waist < $bust) {
        $bodyType = 'Hourglass Shape';
    } else {
        $bodyType = 'Unknown Shape';
    }

    // Redirect to the relevant body type page
    header("Location: ../pages/body_types.html?type=" . urlencode($bodyType));
    exit();
} else {
    // Redirect back to the form if accessed directly
    header("Location: ../pages/body_measurement.html");
    exit();
}
