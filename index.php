<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHLPost Portal</title>
    <link rel="stylesheet" href="style.css">

    
    
</head>
<body>
    <!-- Loading Screen -->
    <div id="loading-screen">
        <img src="images/loading.gif" alt="Loading..." class="loading-spinner">
    </div>

    <?php
    // PHP Configuration
    $page_title = "PHLPost - Philippine Postal Corporation";
    $tagline = "You Send. We Deliver.";
    $current_year = date('Y');
    
 
    ?>

    <!-- Header -->
    <header class="header">
        <img src="images/bagong pilipinas.png" 
             alt="Bagong Pilipinas Logo" class="logo">
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="phlpost-logo">
                <img src="images/phlpost logo.png" alt="PHLPost - You Send. We Deliver.">
            </div>
            
            <a href="./home.php" class="cta-button">GET STARTED</a>
        </div>

        <!-- Footer -->                 
        <div class="footer">
            <div class="qr-code">
                <img src="images/qr.png" alt="QR Code">
            </div>
        </div>
    </section>

    <script>
        // Hide loading screen when page is fully loaded
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('loading-screen').classList.add('hidden');
            }, 3000);
        });

        

        // Add parallax effect to background
        window.addEventListener('scroll', function() {
            const hero = document.querySelector('.hero');
            const scrolled = window.pageYOffset;
            hero.style.transform = 'translateY(' + (scrolled * 0.5) + 'px)';
        });
    </script>
</body>
</html>