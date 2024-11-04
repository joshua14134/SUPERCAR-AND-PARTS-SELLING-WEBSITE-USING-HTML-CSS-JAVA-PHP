<?php
include 'header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full-Page Scrolling Images with Centered Drop-in Text</title>
    <style>
        /* Reset and full height for each section */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
        }

        /* Styling each image section to be full viewport height */
        .image-link {
            width: 100%;
            height: 100vh; /* Full viewport height */
            position: relative;
            display: block;
        }

        .image-link img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures image covers the entire section */
        }

        /* Text overlay styling with initial hidden position for animation */
        .image-link span {
            position: absolute;
            top: 50%; /* Start from the center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -200%); /* Start above the viewport */
            font-size: 3em;
            color: blue;
            font-weight: bold;
            text-align: center;
            background: rgba(255, 255, 255, 0.7); /* Semi-transparent background */
            padding: 15px 30px;
            border-radius: 10px;
            opacity: 0; /* Start as invisible */
            transition: transform 1s ease, opacity 1s ease; /* Smooth transition */
        }

        /* Active class to trigger the drop-in animation */
        .image-link.visible span {
            transform: translate(-50%, -50%); /* Center position */
            opacity: 1; /* Make it visible */
        }
    </style>
</head>
<body>

    <!-- Top image with link to Home -->
    <a href="index.php" class="image-link">
        <img src="assets/img/HOME1.jpg" alt="Home Image">
        <span>HOME</span>
    </a>

    <!-- Middle image with link to Login -->
    <a href="login_form.php" class="image-link">
        <img src="assets/img/HOME2.jpg" alt="Login Image">
        <span>LOGIN</span>
    </a>

    <!-- Bottom image with link to See the New Cars -->
    <a href="populaR.php" class="image-link">
        <img src="assets/img/HOME3.jpg" alt="New Cars Image">
        <span>SEE THE NEW CARS</span>
    </a>

    <script>
        // JavaScript to handle the drop-in effect using IntersectionObserver
        document.addEventListener("DOMContentLoaded", () => {
            const sections = document.querySelectorAll(".image-link");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    } else {
                        entry.target.classList.remove("visible"); // Remove class if you want text to re-animate on scroll
                    }
                });
            }, { threshold: 0.5 }); // Trigger when 50% of the section is visible

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>

</body>
</html>
