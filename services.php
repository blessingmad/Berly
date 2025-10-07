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
	
<style>
/* Valentine's Theme */
.valentines-theme {
    background: #ffccd5;
    color: #b30000;
    text-align: center;
    padding: 50px 20px;
    border: 3px dashed #b30000;
    border-radius: 15px;
}

.portfolio-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #b30000;
}

.portfolio-header p {
    font-size: 1.2rem;
    color: #b30000;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.portfolio-card {
    background: #ffe5ec;
    border: 2px solid #b30000;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
}

.portfolio-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}

.card-content h3 {
    color: #b30000;
}

.card-content p {
    font-size: 1.2rem;
    color: #b30000;
}

.card-content s {
    color: #666;
    margin-right: 10px;
}

.whatsapp-button {
    background-color: #ff6699;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    padding: 10px 15px;
    font-size: 1rem;
    transition: background 0.3s;
}

.whatsapp-button:hover {
    background-color: #e6005c;
}
</style>

<!-- Twist Hairstyles Section with Valentine's Theme -->
<section class="portfolio valentines-theme">
    <div class="portfolio-header">
        <h2>💕 Our Twist Styles 💕</h2>
        <p>Get a romantic twist for less! Enjoy 20% off our stunning twist styles. 💖</p>
    </div>
    <div class="portfolio-grid">
        <!-- Twist Style Card 1 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('senegalese_twists.jpg');"></div>
            <div class="card-content">
                <h3>Senegalese Twists</h3>
                <p><s>R562</s> <strong>R450</strong> ❤️</p>
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
                <p><s>R625</s> <strong>R500</strong> ❤️</p>
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
                <p><s>R437</s> <strong>R350</strong> ❤️</p>
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
                <p><s>R437</s> <strong>R350</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Flat Twists', 350)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
    </div>
</section>



<!-- Loc Styles Section with Valentine's Theme -->
<section class="portfolio valentines-theme">
    <div class="portfolio-header">
        <h2>💕 Our Loc Styles 💕</h2>
        <p>Celebrate love with 20% off our timeless loc styles! Book your romantic look today. 💖</p>
    </div>
    <div class="portfolio-grid">
        <!-- Loc Style Card 1 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('traditional_locs.jpg');"></div>
            <div class="card-content">
                <h3>Traditional Locs</h3>
                <p><s>R1000</s> <strong>R800</strong> ❤️</p>
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
                <p><s>R1875</s> <strong>R1500</strong> ❤️</p>
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
                <p><s>R1500</s> <strong>R1200</strong> ❤️</p>
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
                <p><s>R1500</s> <strong>R1200</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Faux Locs', 1200)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Afro Styles Section with Valentine's Theme -->
<section class="portfolio valentines-theme">
    <div class="portfolio-header">
        <h2>💕 Our Afro Styles 💕</h2>
        <p>Rock your natural beauty with 20% off these stunning afro styles. 💘</p>
    </div>
    <div class="portfolio-grid">
        <!-- Afro Style Card 1 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('classic_afro1.jpg');"></div>
            <div class="card-content">
                <h3>Classic Afro</h3>
                <p><s>R875</s> <strong>R700</strong> ❤️</p>
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
                <p><s>R1000</s> <strong>R800</strong> ❤️</p>
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
                <p><s>R937</s> <strong>R750</strong> ❤️</p>
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
                <p><s>R937</s> <strong>R750</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
    </div>
</section>


<script>
function bookOnWhatsApp(styleName, price) {
    const message = `Hello! I would like to book the ${styleName} hairstyle for R${price}.`;
    const whatsappNumber = '+27692888445';
    const url = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(message)}`;
    window.open(url, '_blank');
}
</script>


<!-----------------------------------------------------------------------WIgs Installation-------------------------------------------------------------------------------------------->
<section class="portfolio valentines-theme">
    <div class="portfolio-header">
        <h2>💕 Wigs Installation 💕</h2>
        <p>Here are our beautiful wigs installation. 💖</p>
    </div>
    <div class="portfolio-grid">
        <!-- Loc Style Card 1 -->
        <div class="portfolio-card">
            <div class="card-video">
                <video controls>
                    <source src="VID-20250611-WA0041.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R500</s> <strong>R300</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Traditional Locs', 800)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

<style>
    .card-video {
        width: 100%;
        height: 400px;
        overflow: hidden;
    }
    
    .card-video video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
        <!-- Loc Style Card 2 -->
        <div class="portfolio-card">
            <div class="card-video">
                <video controls>
                    <source src="VID-20250611-WA0042.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R500</s> <strong>R300</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Traditional Locs', 800)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

          <!-- Wig Installation -->
          <div class="portfolio-card">
            <div class="card-image" style="background-image: url('4.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R500</s> <strong>R300</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Classic Afro', 700)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Afro Style Card 2 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('1.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R1000</s> <strong>R800</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Blowout Afro', 800)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Afro Style Card 3 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('2.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R580</s> <strong>R380</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>
        <!-- Afro Style Card 4 -->
        <div class="portfolio-card">
            <div class="card-image" style="background-image: url('3.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R610</s> <strong>R410</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 5 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('5.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R500</s> <strong>R300</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('6.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R687</s> <strong>R487</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('7.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R490</s> <strong>R320</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('8.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R500</s> <strong>R375</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('9.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R690</s> <strong>R490</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('10.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R620</s> <strong>R330</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('11.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R710</s> <strong>R510</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('12.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R837</s> <strong>R620</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('13.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R710</s> <strong>R510</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('14.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R700</s> <strong>R380</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('15.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R937</s> <strong>R750</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('16.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R937</s> <strong>R750</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('17.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R937</s> <strong>R750</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('18.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R937</s> <strong>R750</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('19.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R937</s> <strong>R750</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('20.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R570</s> <strong>R370</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('21.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R690</s> <strong>R400</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('22.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R737</s> <strong>R550</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('23.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R837</s> <strong>650</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('24.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R730</s> <strong>R410</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('26.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R490</s> <strong>R300</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('27.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R490</s> <strong>R320</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('28.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R470</s> <strong>310</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('29.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R710</s> <strong>R510</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('30.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R520</s> <strong>R320</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('31.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R637</s> <strong>437</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('32.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R550</s> <strong>R350</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('33.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R650</s> <strong>R450</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
                    Book Now on WhatsApp
                </button>
            </div>
        </div>

         <!-- Afro Style Card 4 -->
         <div class="portfolio-card">
            <div class="card-image" style="background-image: url('34.jpg');"></div>
            <div class="card-content">
                <h3>Wig Installation</h3>
                <p><s>R600</s> <strong>R400</strong> ❤️</p>
                <button class="whatsapp-button" onclick="bookOnWhatsApp('Tapered Afro', 750)">
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

