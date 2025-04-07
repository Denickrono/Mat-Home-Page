<?php
// Initialize the session
session_start();
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASENO SACCO</title>
    <link rel="stylesheet" href="webpage.css">
</head>
<body >
    <header>
        <div class="logo-container">
            <img src="C1.jpg" alt="Maseno SACCO Logo" class="logo">
        </div>
        <div class="title-container">
            <h1>ADVANCED MATATU SACCO SYSTEM</h1>
            </class>
    </header>

    <div class="dashboard-container">
        <button id="dashboard-btn"id = "dasbut">Dashboard</button>
        <div id="dashboard-menu" class="dashboard-menu">
            <ul>
                <li id="about-btn">About Us</li>
                <li id="services-btn">Our Services</li>
                <li id="contacts-btn">Contacts</li>
                <li id="help-btn">Help</li>
            </ul>
        </div>
    </div>
    <class image>

    <img src="C1.jpg" alt="Maseno SACCO Logo" >
    </class>

    <div class="content-container">
        <section id="about-section" class="content-section">
            <h2>About Us</h2>
            <p>Maseno sacco is a matatu sacco stystem devoted to transportation of goods and services togethe with people from 
                one place to the other within the Nairobi - Mombasa road.
            </p>
            
        </section>

        <section id="services-section" class="content-section">
            <h2>Our Services</h2>
            <ul>
                <li>transportation of goodsa and servicea</li>
                <li>passenger transportation</li>
                <li>private vehicles</li>
                <li>public vehicle hire</li>
                <li>road trips</li>
                
            </ul>
        </section>

        <section id="contacts-section" class="content-section">
            <h2>Contacts</h2>
            <p>Address: Maseno University, Private Bag, Maseno</p>
            <p>Phone: +254 712 345 678</p>
            <p>Email: info@masenosacco.co.ke</p>
            <p>Working Hours: Monday - Friday, 8:00 AM - 5:00 PM</p>
        </section>

        <section id="help-section" class="content-section">
            <h2>Help</h2>
            <p>Need assistance? Here are some ways to get help:</p>
            <ul>
                <li>Visit our physical offices during working hours</li>
                <li>Call our customer service line at +254 712 345 678</li>
                <li>Send an email to support@masenosacco.co.ke</li>
                <li>Use the online chat feature available on our website (coming soon)</li>
            </ul>
            <p>Our dedicated team is always ready to assist you with any queries or concerns.</p>
        </section>
    
        <!-- <section class="slideshow">
        <div class="slides">
            <img src="logo.jpg" alt="Vehicle 1">
            <img src="OIF.jpg" alt="Vehicle 2">
            <img src="images.jpg" alt="Vehicle 3">
        </div>
    </section> -->
    </div>
        <div class="auth-buttons">
        <!-- <?php
            // Check if the user is already logged in
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                echo '<a href="dashboard.php" class="btn">Go to Dashboard</a>';
                echo '<a href="logout.php" class="btn"id="logbut">Logout</a>';
            } else {
                echo '<a href="login.php" class="btn"id="logbut">Login</a>';
                echo '<a href="signup.php" class="btn"id="sinbut">Sign Up</a>';
            }
            ?> -->
            <a href="login.php" class="btn login-btn"id="logbut">Login</a>
            <a href="signup.php" class="btn signup-btn"id = "sinbut">Sign Up</a>
             <a href="booking.php" class="btn booking-btn"id = "bokbut" >go to booking ?</a>
        </div>
        <!-- <script>
        let index = 0;
        function slideshow() {
            const slides = document.querySelectorAll(".slides img");
            slides.forEach(img => img.style.display = "none");
            index = (index + 1) % slides.length;
            slides[index].style.display = "block";
        }
        setInterval(slideshow, 3000);
        slideshow();
    </script>
  -->
    <script src="webpage.js"></script>
</body>
</html>