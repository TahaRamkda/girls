// JavaScript for hamburger menu toggle
document.querySelector('.hamburger').addEventListener('click', function () {
    this.classList.toggle('active');
    document.querySelector('.nav-links').classList.toggle('active');
});

// Basic form submission alert for Body Measurement
document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Your measurements have been submitted! We are processing your body type.');
    // Proceed with form submission logic
});
document.getElementById("measurementForm").addEventListener("submit", function(e) {
    e.preventDefault();
    console.log("Form submitted"); // Check if form submission is detected

    // Prepare form data
    const formData = new FormData(this);

    // Send AJAX request
    fetch("../backend/handle_measurements.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log("Response received:", data); // Log the response for debugging
        const resultDiv = document.getElementById("result");
        resultDiv.innerHTML = `<strong>Your Body Type:</strong> ${data}`;
        resultDiv.style.display = "block";
    })
    .catch(error => console.error("Error:", error));
});
