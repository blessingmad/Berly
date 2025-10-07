<!DOCTYPE html>
<html lang="en">

<head>
      <!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-57XMXKHW');</script>

<!-- End Google Tag Manager -->
<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-5B5VDWXDMN"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-5B5VDWXDMN'); </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berly Beauty</title>
    <link rel="icon" href="logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Merriweather:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
body {
    margin: 0;
    font-family: 'Merriweather', serif;
    color: #ffffff;
    overflow-x: hidden;
}

.hero {
    position: relative;
    width: 100%;
    height: 100vh;
    background: linear-gradient(to bottom, rgba(0, 0, 50, 0.7), rgba(0, 50, 100, 0.7));
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.hero-content {
    z-index: 2;
    color: white;
    background: rgba(0, 0, 50, 0.5);
    padding: 20px;
    border-radius: 10px;
}

.hero-content h1 {
    font-size: 3rem;
    font-family: 'Playfair Display', serif;
    margin-bottom: 10px;
}

.hero-content p {
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.buttons a {
    text-decoration: none;
    padding: 15px 30px;
    margin: 10px;
    border-radius: 5px;
    font-size: 1.2rem;
    font-weight: bold;
    display: inline-block;
    transition: 0.3s;
}

.btn-primary {
    background-color: #6c63ff;
    color: #fff;
}

.btn-primary:hover {
    background-color: #483d8b;
}

.btn-secondary {
    background-color: #fff;
    color: #6c63ff;
    border: 2px solid #6c63ff;
}

.btn-secondary:hover {
    background-color: #6c63ff;
    color: #fff;
}

.nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    z-index: 10;
    background: black;
}

.nav .company-name {
    display: flex;
    align-items: center;
}

.nav .company-name img {
    width: 50px;
    height: auto;
    margin-right: 10px;
}

.nav .company-name .text {
    font-size: 1.5rem;
    font-weight: bold;
    color: white;
}

.menu {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}

.menu li {
    margin-left: 20px;
}

.menu li a {
    color: white;
    text-decoration: none;
    font-size: 1rem;
    transition: 0.3s;
    position: relative;
}

.menu li a:hover {
    color: white;
    text-shadow: 0 0 10px white;
}

.hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.hamburger div {
    width: 25px;
    height: 3px;
    background: white;
    margin: 5px;
}

/* Media Queries for Mobile Responsiveness */
@media (max-width: 768px) {
    .hero-content h1 {
        font-size: 2rem; /* Adjusted heading size for mobile */
    }

    .hero-content p {
        font-size: 1.2rem; /* Adjusted paragraph size for mobile */
    }

    .buttons a {
        font-size: 1rem; /* Reduced button text size */
        padding: 10px 20px; /* Adjusted button padding */
    }

    .nav {
        flex-wrap: wrap; /* Allow navigation items to wrap on smaller screens */
        padding: 10px; /* Reduced padding for mobile */
    }

    .hamburger {
        display: flex;
    }

    .menu {
        display: none;
        flex-direction: column;
        background: rgba(0, 0, 50, 0.9);
        position: absolute;
        top: 50px;
        right: 0;
        width: 100%;
        padding: 10px 0;
    }

    .menu.active {
        display: flex; /* Show menu when active class is added */
    }

    .menu li {
        margin: 10px 0;
        text-align: center;
    }

    .menu li a {
        font-size: 1.2rem; /* Slightly larger text for better tapping */
    }
}


    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57XMXKHW"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->
    <!-- Navigation Ribbon -->
    <div class="nav">
        <div class="company-name">
            <img src="logo.png" alt="Logo">
            <span class="text">Berly Beauty</span>
        </div>
        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }
    </script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-03YXS0XVWX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-03YXS0XVWX');
</script>
	
<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="form-container">
        <h2>Contact Us</h2>
        <p>We’d love to hear from you! Fill out the form below and send us a message via WhatsApp.</p>
        <form id="whatsappForm">
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Type your message here..." required></textarea>
            </div>
            <button type="button" class="submit-button" onclick="sendWhatsAppMessage()">Send Message</button>
        </form>
    </div>
</section>

<script>
    function sendWhatsAppMessage() {
        const name = document.getElementById("name").value;
        const phone = document.getElementById("phone").value;
        const message = document.getElementById("message").value;

        const salonWhatsAppNumber = "+1234567890"; // Replace with the salon's WhatsApp number
        const encodedMessage = encodeURIComponent(
            `Hello! My name is ${name}. My phone number is ${phone}. Here is my message: ${message}`
        );

        const whatsappURL = `https://wa.me/${salonWhatsAppNumber}?text=${encodedMessage}`;
        window.open(whatsappURL, "_blank");
    }
</script>


<style>
/* Contact Form Section Styles */
.contact-form-section {
    background: linear-gradient(to bottom right, black, maroon);
    color: white;
    padding: 60px 20px;
    text-align: center;
}

.contact-form-section h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: #FFD700; /* Gold for headings */
}

.contact-form-section p {
    font-size: 1.2rem;
    margin-bottom: 40px;
    color: #ccc;
}

.form-container {
    max-width: 800px;
    margin: 0 auto;
    background: rgba(0, 0, 0, 0.8);
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
}

form {
    width: 100%;
}

.form-row {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.form-group {
    flex: 1;
    min-width: 250px;
    display: flex;
    flex-direction: column;
}

label {
    font-size: 1rem;
    margin-bottom: 10px;
    color: #FFD700; /* Gold for labels */
}

input, textarea {
    font-size: 1rem;
    padding: 10px;
    border: 1px solid #FFD700;
    border-radius: 5px;
    background: rgba(255, 255, 255, 0.1);
    color: white;
    outline: none;
    transition: border-color 0.3s ease;
}

input::placeholder, textarea::placeholder {
    color: #bbb;
}

input:focus, textarea:focus {
    border-color: #fff;
}

textarea {
    resize: none;
}

.submit-button {
    display: inline-block;
    font-size: 1.2rem;
    color: black;
    background-color: #FFD700;
    padding: 15px 30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.submit-button:hover {
    background-color: white;
    color: maroon;
}

/* Responsive Design */
@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
    }
}

</style>

<!-- Contact Section -->
<section class="contact-section">
    <div class="contact-header">
        <h2>Contact Us</h2>
        <p>Get in touch with Berly Beauty for all your salon, makeup, and boutique needs.</p>
    </div>
    <div class="contact-grid">
        <!-- Contact Details Card -->
        <div class="contact-card">
            <h3>Contact Details</h3>
            <ul>
                <li><i class="fas fa-phone"></i> Phone: +27 69 288 8445</li>
                <li><i class="fab fa-whatsapp"></i> WhatsApp: +27 69 288 8445</li>
                <li><i class="fas fa-envelope"></i> Email: 
                    <ul>
                        <li>care@berlybeauty.co.za</li>
                        <li>booking@berlybeauty.co.za</li>
                        <li>admin@berlybeauty.co.za</li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Map Card -->
        <div class="map-card">
            <h3>Find Us</h3>
            <div class="map-container">
                <img src="maps.jpg" alt="Static Map" class="map-img">
                <p>Address: 256 Ben Viljoen Street, Pretoria North</p>
                <a href="https://www.google.com/maps/place/248+Ben+Viljoen+St,+Pretoria+North,+Pretoria,+0116/@-25.676723,28.1718626,17z/data=!3m1!4b1!4m6!3m5!1s0x1ebfd913c7ffd09f:0x9a86955708556fe!8m2!3d-25.6767279!4d28.1744375!16s%2Fg%2F11fsynbwwx?entry=ttu&g_ep=EgoyMDI1MDEyMC4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="map-button">View Live Map</a>
            </div>
        </div>
    </div>
</section>


<style>
/* Contact Section */
.contact-section {
    padding: 60px 20px;
    background: linear-gradient(to bottom, black, maroon);
    color: #fff;
    text-align: center;
}

.contact-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #FFD700;
    margin-bottom: 10px;
}

.contact-header p {
    font-size: 1.2rem;
    margin-bottom: 40px;
    color: #fff;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    justify-items: center;
}

.contact-card, .map-card {
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid #FFD700;
    border-radius: 10px;
    padding: 20px;
    width: 100%;
    max-width: 500px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.contact-card:hover, .map-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}

.contact-card h3, .map-card h3 {
    font-size: 1.8rem;
    color: #FFD700;
    margin-bottom: 15px;
}

.contact-card ul {
    list-style: none;
    padding: 0;
    font-size: 1rem;
}

.contact-card ul li {
    margin: 10px 0;
    display: flex;
    align-items: center;
}

.contact-card ul li i {
    color: #FFD700;
    margin-right: 10px;
    font-size: 1.2rem;
}

.contact-card ul ul li {
    margin-left: 25px;
    list-style-type: disc;
    color: #fff;
}

.map-container {
    position: relative;
    text-align: center;
}

.map-img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    margin-bottom: 20px;
}

.map-button {
    display: inline-block;
    background-color: #FFD700;
    color: black;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.map-button:hover {
    background-color: #8b0000;
    color: #fff;
}

/* Media Queries for Mobile Responsiveness */
@media (max-width: 768px) {
    .contact-section {
        padding: 40px 15px; /* Reduced padding for smaller screens */
    }

    .contact-header h2 {
        font-size: 2rem; /* Adjusted heading size */
    }

    .contact-header p {
        font-size: 1rem; /* Adjusted paragraph size */
    }

    .contact-grid {
        gap: 15px; /* Reduced grid gap */
    }

    .contact-card, .map-card {
        padding: 15px; /* Adjusted padding inside cards */
        max-width: 100%; /* Ensure cards take full width on mobile */
    }

    .contact-card h3, .map-card h3 {
        font-size: 1.5rem; /* Adjusted heading size in cards */
    }

    .contact-card ul {
        font-size: 0.9rem; /* Adjusted font size for list items */
    }

    .contact-card ul li i {
        font-size: 1rem; /* Reduced icon size */
    }

    .map-button {
        font-size: 0.9rem; /* Adjusted button size */
        padding: 8px 15px; /* Reduced padding for buttons */
    }
}

</style>

<!-- Footer Section -->
<footer class="footer">
    <div class="footer-container">
        <!-- About Section -->
        <div class="footer-about">
            <h3>About Berly Beauty</h3>
            <p>Berly Beauty is your ultimate destination for luxury salon services, high-quality makeup, and African attire. We are dedicated to delivering beauty and elegance in every experience.</p>
            <p>Empowering confidence and style through our exceptional services and boutique offerings.</p>
        </div>

        <!-- Quick Links -->
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div class="footer-contact">
            <h3>Contact Us</h3>
            <ul>
                <li><i class="fas fa-phone"></i> +27 69 288 8445</li>
                <li><i class="fab fa-whatsapp"></i> +27 69 288 8445</li>
                <li><i class="fas fa-envelope"></i> <a href="mailto:care@berlybeauty.co.za">care@berlybeauty.co.za</a></li>
                <li><i class="fas fa-envelope"></i> <a href="mailto:booking@berlybeauty.co.za">booking@berlybeauty.co.za</a></li>
                <li><i class="fas fa-envelope"></i> <a href="mailto:admin@berlybeauty.co.za">admin@berlybeauty.co.za</a></li>
                <li><i class="fas fa-map-marker-alt"></i> 248 Ben Viljoen Street, Pretoria North</li>
            </ul>
        </div>

        <!-- Social Media -->
        <div class="footer-social">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="https://www.facebook.com/BerlyBeautySA" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Berly Beauty. All Rights Reserved.</p>
        <p>This site was designed and is maintained by Diamond Pinnacle IT Solutions.</p>
    </div>
</footer>


<style>
/* Footer Styles */
.footer {
    background: black;
    color: #fff;
    padding: 60px 20px 30px;
    font-family: 'Merriweather', serif;
    text-align: center;
}

.footer-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.footer-container div {
    padding: 10px 20px;
}

.footer-container h3 {
    font-size: 1.5rem;
    color: #FFD700;
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
}

.footer-container p, .footer-container ul li {
    font-size: 1rem;
    line-height: 1.8;
    color: #ccc;
}

.footer-container ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-container ul li {
    margin: 10px 0;
    display: flex;
    align-items: center;
}

.footer-container ul li i {
    color: #FFD700;
    margin-right: 10px;
}

.footer-container ul li a {
    color: #FFD700;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-container ul li a:hover {
    color: white;
}

.footer-social {
    text-align: center;
}

.footer-social .social-icons a {
    display: inline-block;
    margin: 0 10px;
    font-size: 1.5rem;
    color: #FFD700;
    transition: color 0.3s ease;
}

.footer-social .social-icons a:hover {
    color: maroon;
}

.footer-bottom {
    border-top: 1px solid #444;
    padding-top: 10px;
    font-size: 0.9rem;
    color: #ccc;
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-container {
        grid-template-columns: 1fr;
    }
}
</style>

