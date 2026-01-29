<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHLPost Portal</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="modal.css">
    


    <header>
        <div class="container nav-container">
            <div class="logo">
                <img src="images/phlpost logo.png" alt="PHLPost Logo">
            </div>

            

            <div id="clock" class="clock-display">Loading...</div>
            
        <nav>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="#">About</a></li>
        
        <!-- Services with Dropdown -->
        <li class="dropdown">
            <a href="#" class="dropbtn">Services</a>
            <div class="dropdown-content">A
                <a href="https://dts.phlpost.gov.ph/pages/home">Data Tracking System</a><br><br>
                <a href="http://192.168.63.30/">Document Depository System</a><br><br>
                <a href="http://192.168.63.245/login.php">Postal Profile System</a>
               
            </div>
        </li>
        
        <li>
  <a href="#loginModal" class="login-btn" onclick="document.getElementById('loginModal').style.display='block'; return false;">
    LOGIN
  </a>
</li>

    </ul>
        </nav>
        </div>
    </header>

</head>
<body>

    

   <main class="hero">
    <div class="container">

        <div class="content-wrapper">
            <!-- Left Side: Main Content -->
            <div class="left-content">
                <section class="glass-card">
                    <h2>About PHLPost Portal</h2>
                    <p>The Philippine Postal Corporation (PHLPost) is the country’s premier postal service provider, dedicated to connecting people, communities, and institutions through reliable communication and logistics. With a proud history of service, PHLPost continues to evolve by embracing digital transformation to meet the needs of a modern society.
The PHLPost Portal serves as a centralized digital gateway, offering secure, efficient, and accessible services for government agencies, businesses, and the public. It integrates innovative systems that streamline operations and enhance accountability:<br>
- 📑 Document Tracking System (DTS) – Ensures every stage of a document’s lifecycle is logged, traceable, and compliant with organizational standards.<br>
- 🗂️ Document Depository System (DDS) – Provides a structured repository for storing, organizing, and retrieving physical or digital records with controlled access.<br>
- 👤 Postal Profile System (PPS) – Maintains detailed customer, employee, and transaction profiles to improve service delivery and operational efficiency.<br>
Through these platforms, the PHLPost Portal strengthens transparency, efficiency, and trust in public service. It embodies the corporation’s mission to combine tradition with technology—ensuring that every letter, parcel, and document continues to reach its destination safely, securely, and on time.
</p>
                   
                   
                </section>

                    
               
            </div>

            <!-- Right Side: Sidebar -->
            <div class="right-sidebar">

                <section class="glass-card">
                    <h2>QUICK LINKS</h2>
                    <p><a href="http://phlpost.gov.ph/">phlpost.gov.ph</a></p>
                    <p><a href="phlpostcares@phlpost.gov.ph">phlpostcares@phlpost.gov.ph</a></p>
                    <p><a href="http://facebook.com/PHLPost">facebook.com/PHLPost</a></p>
                    <p><a href="http://twitter.com/PostOfficePH">twitter.com/PostOfficePH</a></p>
                </section>

                <section class="glass-card">
                    <h2>ANNOUNCEMENTS</h2>
                    <p>New services available</p>
                </section>
            </div>
        </div>
    </div>
</main>


    <?php
$companyName = "PHLPost Portal";
$year = date('Y');

?>  

   

<script>
async function updateClock() {
    try {
        const response = await fetch('https://worldtimeapi.org/api/timezone/Asia/Manila');
        const data = await response.json();
        
        const datetime = new Date(data.datetime);
        
        // Format date and time
        const dateOptions = { 
            weekday: 'long',
            year: 'numeric', 
            month: 'long', 
            day: 'numeric'
        };
        const timeOptions = {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
        };
        
        const dateStr = datetime.toLocaleDateString('en-US', dateOptions);
        const timeStr = datetime.toLocaleTimeString('en-US', timeOptions);
        
        document.getElementById('clock').innerHTML = `${dateStr}<br>${timeStr}`;
        
    } catch (error) {
        // Fallback to browser time if API fails
        const now = new Date();
        const dateStr = now.toLocaleDateString('en-US', { 
            weekday: 'long',
            year: 'numeric', 
            month: 'long', 
            day: 'numeric'
        });
        const timeStr = now.toLocaleTimeString('en-US');
        document.getElementById('clock').innerHTML = `${dateStr}<br>${timeStr}`;
    }
}

// Update every 10 seconds
setInterval(updateClock, 10000);
updateClock(); // Run immediately
</script>

<script>

// Close modal when clicking outside of it
window.onclick = function(event) {
    const modal = document.getElementById('loginModal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>




<div id="loginModal" class="modal">
    <div class="modal-content glass-card">
        <span class="close-btn" onclick="document.getElementById('loginModal').style.display='none'">&times;</span>
        <h2>Login to Portal</h2>
        <form action="login_process.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn2">Sign In</button>
        </form>
    </div>
</div>



</body>


 <footer>
        <div class="container footer-content">
            <div class="footer-logos">
                <img src="images/bagong pilipinas.png" alt="Bagong Pilipinas" class="footer-icon">
                <div class="divider"></div>
                <img src="images/qr.png" alt="QR Code" class="qr-code">
            </div>

              <div class="footer-text">
                <p>Magallanes Drive, Liwasang Bonifacio,</p>
                <p><j>Brgy. 659-A Ermita, 1000 Manila, Philippines</j></p>
                <p>&copy; <?php echo $year . ' ' . $companyName; ?>. All rights reserved.</p>
                
            </div>
        </div>
    </footer>

</html>