<!DOCTYPE html>
<html lang="en">

<head>
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
	
<!-- Braided Hairstyles Section -->
<section class="portfolio">
    <div class="portfolio-header">
        <h2>Our Braided Hairstyles</h2>
        <p>Explore our fashionable braided hairstyles and book your next appointment instantly.</p>
    </div>
    <div class="portfolio-grid">
        <!-- Hairstyle Card 1 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('box_braids.jpg');"></div>
            <div class="card-content">
                <h3>Box Braids</h3>
                <p>Price: R850</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Box Braids', 850)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Hairstyle Card 2 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('knotless_braids.jpg');"></div>
            <div class="card-content">
                <h3>Knotless Braids</h3>
                <p>Price: R950</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Knotless Braids', 950)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Hairstyle Card 3 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('cornrows.jpg');"></div>
            <div class="card-content">
                <h3>Cornrows</h3>
                <p>Price: R600</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Cornrows', 600)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Hairstyle Card 4 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('faux_locs.jpg');"></div>
            <div class="card-content">
                <h3>Faux Locs</h3>
                <p>Price: R1200</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Faux Locs', 1200)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Hairstyle Card 5 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('twist_braids.jpg');"></div>
            <div class="card-content">
                <h3>Twist Braids</h3>
                <p>Price: R750</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Twist Braids', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Hairstyle Card 6 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('goddess_braids.jpg');"></div>
            <div class="card-content">
                <h3>Goddess Braids</h3>
                <p>Price: R900</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Goddess Braids', 900)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Hairstyle Card 7 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('feed_in_braids.jpg');"></div>
            <div class="card-content">
                <h3>Feed-In Braids</h3>
                <p>Price: R700</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Feed-In Braids', 700)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Hairstyle Card 8 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('bohemian_braids.jpg');"></div>
            <div class="card-content">
                <h3>Bohemian Braids</h3>
                <p>Price: R1100</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Bohemian Braids', 1100)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Twists Section -->
<section class="portfolio">
    <div class="portfolio-header">
        <h2>Our Twist Styles</h2>
        <p>Explore our twist styles, from sleek to chunky, for a bold and beautiful look.</p>
    </div>
    <div class="portfolio-grid">
        <!-- Twist Style Card 1 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('senegalese_twists.jpg');"></div>
            <div class="card-content">
                <h3>Senegalese Twists</h3>
                <p>Price: R450</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Senegalese Twists', 450)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Twist Style Card 2 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('havana_twists.jpg');"></div>
            <div class="card-content">
                <h3>Havana/Marley Twists</h3>
                <p>Price: R500</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Havana/Marley Twists', 500)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Twist Style Card 3 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('flat_twists1.jpg');"></div>
            <div class="card-content">
                <h3>Flat Twists</h3>
                <p>Price: R350</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Flat Twists', 350)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Twist Style Card 4 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('flat_twists2.jpg');"></div>
            <div class="card-content">
                <h3>Flat Twists</h3>
                <p>Price: R350</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Flat Twists', 350)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
    </div>
</section>



<!-- Locs Section -->
<section class="portfolio">
    <div class="portfolio-header">
        <h2>Our Loc Styles</h2>
        <p>Discover timeless loc styles, from traditional to trendy faux locs.</p>
    </div>
    <div class="portfolio-grid">
        <!-- Loc Style Card 1 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('traditional_locs.jpg');"></div>
            <div class="card-content">
                <h3>Traditional Locs</h3>
                <p>Price: R800</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Traditional Locs', 800)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Loc Style Card 2 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('sisterlocks.jpg');"></div>
            <div class="card-content">
                <h3>Sisterlocks</h3>
                <p>Price: R1500</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Sisterlocks', 1500)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Loc Style Card 3 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('faux_locs.jpg');"></div>
            <div class="card-content">
                <h3>Faux Locs</h3>
                <p>Price: R1200</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Faux Locs', 1200)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Loc Style Card 4 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('faux_locs1.jpg');"></div>
            <div class="card-content">
                <h3>Faux Locs</h3>
                <p>Price: R1200</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Faux Locs', 1200)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
    </div>
</section>


<!-- Afros Section -->
<section class="portfolio">
    <div class="portfolio-header">
        <h2>Our Afro Styles</h2>
        <p>Embrace the beauty of natural hair with these stunning afro styles.</p>
    </div>
    <div class="portfolio-grid">
        <!-- Afro Style Card 1 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('classic_afro1.jpg');"></div>
            <div class="card-content">
                <h3>Classic Afro</h3>
                <p>Price: R700</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Classic Afro', 700)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Afro Style Card 2 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('blowout_afro1.jpg');"></div>
            <div class="card-content">
                <h3>Blowout Afro</h3>
                <p>Price: R800</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Blowout Afro', 800)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Afro Style Card 3 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('tapered_afro.jpg');"></div>
            <div class="card-content">
                <h3>Tapered Afro</h3>
                <p>Price: R750</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Afro Style Card 4 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('tapered_afro1.jpg');"></div>
            <div class="card-content">
                <h3>Tapered Afro</h3>
                <p>Price: R750</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
    </div>
</section>


<!-- Weaves & Extensions Section -->
<section class="portfolio">
    <div class="portfolio-header">
        <h2>Our Weaves & Extensions</h2>
        <p>Transform your look with versatile weave and extension styles.</p>
    </div>
    <div class="portfolio-grid">
        <!-- Weave/Extension Style Card 1 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('sew_ins.jpg');"></div>
            <div class="card-content">
                <h3>Sew-Ins</h3>
                <p>Price: R1000</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Sew-Ins', 1000)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Weave/Extension Style Card 2 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('quick_weaves.jpg');"></div>
            <div class="card-content">
                <h3>Quick Weaves</h3>
                <p>Price: R800</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Quick Weaves', 800)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Weave/Extension Style Card 3 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('clip_ins.jpg');"></div>
            <div class="card-content">
                <h3>Clip-Ins</h3>
                <p>Price: R650</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Clip-Ins', 650)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Weave/Extension Style Card 4 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('clip_ins1.jpg');"></div>
            <div class="card-content">
                <h3>Clip-Ins</h3>
                <p>Price: R650</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Clip-Ins', 650)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
    </div>
</section>



<style>
/* Portfolio Section */
.portfolio {
    padding: 50px 20px;
    background: black;
    color: #fff;
    text-align: center;
}

.portfolio-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    margin-bottom: 10px;
    color: #FFD700;
}

.portfolio-header p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    color: #fff;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.portfolio-card {
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid maroon;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
}

.portfolio-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}

.card-image {
    width: 100%;
    height: 400px;
    background-size: cover;
    background-position: center;
    border-bottom: 2px solid maroon;
}

.card-content {
    padding: 20px;
    text-align: left;
}

.card-content h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    color: #FFD700;
    margin-bottom: 10px;
}

.card-content p {
    font-size: 1rem;
    color: #fff;
    line-height: 1.5;
}

.whatsapp-button {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 15px;
    background-color: #25D366;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    font-family: 'Arial', sans-serif;
    text-transform: uppercase;
    transition: background 0.3s;
}

.whatsapp-button:hover {
    background-color: #20b858;
}

/* Media Queries for Mobile Responsiveness */
@media (max-width: 768px) {
    .portfolio-header h2 {
        font-size: 2rem;
    }

    .portfolio-header p {
        font-size: 1rem;
    }

    .portfolio-grid {
        gap: 15px;
    }

    .card-image {
        height: 400px;
    }

    .card-content h3 {
        font-size: 1.3rem;
    }

    .card-content p {
        font-size: 0.9rem;
    }
}
</style>

<script>
function bookOnWhatsApp(styleName, price) {
    const message = `Hello! I would like to book the ${styleName} hairstyle for R${price}.`;
    const whatsappNumber = '+27692888445';
    const url = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(message)}`;
    window.open(url, '_blank');
}
</script>

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

