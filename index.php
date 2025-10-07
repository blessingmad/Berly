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
	<button onclick="window.location.href='services.php'">Explore Services</button>
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
    background: black; /* Updated to black */
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
    color: white; /* Updated to maroon */
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
    color: white; /* Updated to maroon */
    text-decoration: none;
    font-size: 1rem;
    transition: 0.3s;
    position: relative;
}

.menu li a:hover {
    color: white; /* Text changes to white on hover */
    text-shadow: 0 0 10px white; /* White glow effect */
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

@media (max-width: 768px) {
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
        display: flex;
    }

    .menu li {
        margin: 10px 0;
        text-align: center;
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
	
<!-- Valentine’s Themed Hero Section -->
<div class="hero">
    <div class="slider">
        <!-- Desktop Landscape Images -->
        <img class="slider-img desktop-img" src="wallpaper1.png" alt="Portfolio 1">
        <img class="slider-img desktop-img" src="wallpaper2.jpg" alt="Portfolio 2">
        <img class="slider-img desktop-img" src="wallpaper3.jpg" alt="Portfolio 3">
        <img class="slider-img desktop-img" src="wallpaper4.jpg" alt="Portfolio 4">
        <img class="slider-img desktop-img" src="wallpaper5.jpg" alt="Portfolio 5">
        
        <!-- Mobile Portrait Images -->
        <img class="slider-img mobile-img" src="wallpaper1-portrait.jpg" alt="Salon pic">
        <img class="slider-img mobile-img" src="wallpaper2-portrait.jpg" alt="Salon pic">
        <img class="slider-img mobile-img" src="wallpaper3-portrait.jpg" alt="Salon pic">
        <img class="slider-img mobile-img" src="wallpaper4-portrait.jpg" alt="Salon pic">
        <img class="slider-img mobile-img" src="wallpaper5-portrait.jpg" alt="Salon pic">
    </div>
    <div class="hero-content">
        <h1>💖 Welcome to Berly Beauty 💖</h1>
        <p>"Your Ultimate Destination for Luxury Salon Services, Makeup, and African Elegance"</p>
        <button id="exploreServicesBtn">💝 Explore Services 💝</button>
    </div>
</div>

<!-- JavaScript for Button Navigation -->
<script>
    document.getElementById('exploreServicesBtn').addEventListener('click', function() {
        window.location.href = 'services.php';
    });
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
/* Hero Section Styling */
.hero {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    background: linear-gradient(rgba(255, 105, 180, 0.5), rgba(139, 0, 0, 0.5));
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.slider {
    display: flex;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

.slider-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    transition: opacity 1.5s ease-in-out;
}

/* Hero Content */
.hero-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    z-index: 2;
    background-color: rgba(255, 20, 147, 0.7);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(255, 20, 147, 0.5);
    animation: fadeIn 2s ease-in-out;
}

.hero-content h1 {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 10px;
    text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.5);
}

.hero-content p {
    font-size: 1.4rem;
    margin-bottom: 20px;
}

.hero-content button {
    font-size: 1.2rem;
    padding: 12px 24px;
    background-color: #ff69b4;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    box-shadow: 0 5px 15px rgba(255, 105, 180, 0.5);
}

.hero-content button:hover {
    background-color: #8b0000;
    transform: scale(1.05);
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .hero-content {
        width: 90%;
        padding: 20px;
    }
    .hero-content h1 {
        font-size: 2rem;
    }
    .hero-content p {
        font-size: 1rem;
    }
    .hero-content button {
        font-size: 1rem;
    }
}
</style>


    <script>
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }
    </script>
	
    <script>
document.addEventListener('DOMContentLoaded', function() {
    let images;
    let currentIndex = 0;
    let totalImages;

    const transitionTime = 5000; // 5 seconds between transitions
    const resetDelay = 1000; // 1 second delay for last-to-first transition

    function initializeSlider() {
        // Determine which set of images to use based on screen size
        if (window.innerWidth > 768) {
            images = document.querySelectorAll('.slider-img.desktop-img');
        } else {
            images = document.querySelectorAll('.slider-img.mobile-img');
        }
        totalImages = images.length;

        // Initially show the first image
        currentIndex = 0;
        showImage(currentIndex);
    }

    function showImage(index) {
        images.forEach((img, i) => {
            img.style.opacity = (i === index) ? '1' : '0'; // Fade in/out images
        });
    }

    function nextImage() {
        if (currentIndex === totalImages - 1) {
            setTimeout(() => {
                currentIndex = 0; // Reset to first image
                showImage(currentIndex);
            }, resetDelay);
        } else {
            currentIndex = (currentIndex + 1) % totalImages; // Loop through images
            showImage(currentIndex);
        }
    }

    // Reinitialize slider on window resize to handle screen changes
    window.addEventListener('resize', () => {
        initializeSlider();
    });

    // Initialize slider and start the interval
    initializeSlider();
    setInterval(nextImage, transitionTime);
});

    </script>	

<!-- Valentine Section Styling -->
<style>
/* Valentine's Specials Section */
.valentine-specials {
    padding: 50px 20px;
    background: linear-gradient(to bottom, crimson, black);
    color: #fff;
    text-align: center;
    animation: fadeIn 1s ease-in-out;
}

.valentine-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    margin-bottom: 10px;
    color: #FFD700;
    animation: pulse 2s infinite;
}

.valentine-header p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    color: #fff;
}

.valentine-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 0 10px;
}

.valentine-card {
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid crimson;
    border-radius: 10px;
    padding: 20px;
    transition: transform 0.3s, background 0.3s;
    animation: bounceIn 1s ease-in-out;
}

.valentine-card:hover {
    transform: translateY(-10px);
    background: rgba(255, 255, 255, 0.2);
    animation: heartbeat 1.5s infinite;
}

.valentine-card .icon {
    font-size: 2.5rem;
    color: #FFD700;
    margin-bottom: 15px;
    animation: swing 1.5s infinite alternate;
}

.valentine-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    color: #FFD700;
    margin-bottom: 10px;
}

.valentine-card p {
    font-size: 1rem;
    color: #fff;
    line-height: 1.5;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

@keyframes swing {
    0% { transform: rotate(-5deg); }
    100% { transform: rotate(5deg); }
}

@keyframes heartbeat {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

@keyframes bounceIn {
    0% { opacity: 0; transform: scale(0.8); }
    100% { opacity: 1; transform: scale(1); }
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .valentine-specials {
        padding: 30px 15px;
    }

    .valentine-header h2 {
        font-size: 2rem;
    }

    .valentine-header p {
        font-size: 1rem;
    }

    .valentine-card {
        padding: 15px;
    }

    .valentine-card .icon {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    .valentine-card h3 {
        font-size: 1.3rem;
    }

    .valentine-card p {
        font-size: 0.9rem;
    }
}
</style>


<!-- Featured Services Section -->
<section class="featured-services">
    <div class="services-header">
        <h2>Our Services</h2>
        <p>Indulge in luxury and style with our exceptional salon and boutique offerings.</p>
    </div>
    <div class="services-grid">
        <!-- Service 1 -->
        <div class="service-card">
            <div class="icon">
                <i class="fas fa-cut"></i>
            </div>
            <h3>Hair Styling</h3>
            <p>Transform your look with our expert hair styling and cutting services.</p>
        </div>
        <!-- Service 2 -->
        <div class="service-card">
            <div class="icon">
                <i class="fas fa-spa"></i>
            </div>
            <h3>Facials</h3>
            <p>Rejuvenate your skin with our luxurious facial treatments.</p>
        </div>
        <!-- Service 3 -->
        <div class="service-card">
            <div class="icon">
                <i class="fas fa-brush"></i>
            </div>
            <h3>Makeup Artistry</h3>
            <p>Flawless makeup for every occasion, tailored to enhance your beauty.</p>
        </div>
        <!-- Service 4 -->
        <div class="service-card">
            <div class="icon">
                <i class="fas fa-paint-brush"></i>
            </div>
            <h3>Nail Art</h3>
            <p>Custom nail art and manicures to express your personal style.</p>
        </div>
        <!-- Service 5 -->
        <div class="service-card">
            <div class="icon">
                <i class="fas fa-store"></i>
            </div>
            <h3>African Attire</h3>
            <p>Exquisite African fashion tailored for modern elegance.</p>
        </div>
        <!-- Service 6 -->
        <div class="service-card">
            <div class="icon">
                <i class="fas fa-shopping-bag"></i>
            </div>
            <h3>Makeup Products</h3>
            <p>Shop premium makeup products to perfect your everyday look.</p>
        </div>
    </div>
</section>


<style>
/* Featured Services Section */
.featured-services {
    padding: 50px 20px;
    background: linear-gradient(to bottom, maroon, black);
    color: #fff;
    text-align: center;
}

.services-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    margin-bottom: 10px;
    color: #FFD700;
}

.services-header p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    color: #fff;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 0 10px; /* Add some padding for smaller screens */
}

.service-card {
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid maroon;
    border-radius: 10px;
    padding: 20px;
    transition: transform 0.3s, background 0.3s;
}

.service-card:hover {
    transform: translateY(-10px);
    background: rgba(255, 255, 255, 0.2);
}

.service-card .icon {
    font-size: 2.5rem;
    color: #FFD700;
    margin-bottom: 15px;
}

.service-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    color: #FFD700;
    margin-bottom: 10px;
}

.service-card p {
    font-size: 1rem;
    color: #fff;
    line-height: 1.5;
}

/* Media Queries for Mobile Responsiveness */
@media (max-width: 768px) {
    .featured-services {
        padding: 30px 15px; /* Reduce padding for smaller screens */
    }

    .services-header h2 {
        font-size: 2rem; /* Adjust heading size */
    }

    .services-header p {
        font-size: 1rem; /* Adjust paragraph size */
    }

    .service-card {
        padding: 15px; /* Reduce padding for service cards */
    }

    .service-card .icon {
        font-size: 2rem; /* Reduce icon size */
        margin-bottom: 10px;
    }

    .service-card h3 {
        font-size: 1.3rem; /* Adjust heading size for card */
    }

    .service-card p {
        font-size: 0.9rem; /* Adjust paragraph size for better readability */
    }
}

</style>

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
<!--Metrics dance section-->
<!-- Metric Dance Section -->
<section class="metric-dance">
  <div class="dance-header">
    <h2>Metric Dance </h2>
    <p>  Metric Dance Style.</p>
  </div>

  <div class="dance-grid">
    <!-- Dance Type 1 -->
    <div class="dance-card">
      <div class="icon">
        <i class="fas fa-drum"></i>
      </div>
      <h3>Feel Your Moment</h3>
        <img src="metric1.jpeg" alt="Metric Hair Style" style="width:100%; border-radius:10px; margin-bottom:15px;">
        <p>Happy Day</p>  
    </div>

    <!-- Dance Type 2 -->
    <div class="dance-card">
      <div class="icon">
        <i class="fas fa-music"></i>
      </div>
      <h3>Make-up ~ Soft Glam</h3>
       <img src="metric2.jpeg" alt="Free style Hair Style" style="width:100%; border-radius:10px; margin-bottom:15px;">
        <p>Happy Day</p>
    </div>

    <!-- Dance Type 3 -->
    <div class="dance-card">
      <div class="icon">
        <i class="fas fa-heartbeat"></i>
      </div>
      <h3>Package 1</h3>
      <img src="metric3.jpeg" alt="Skin Care" style="width:100%; border-radius:10px; margin-bottom:15px;">
        <p>Happy Day</p>
    </div>

    <!-- Dance Type 4 -->
    <div class="dance-card">
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
      <h3>Group Fusion</h3>
      <img src="metric4.jpeg" alt="Happy Client" style="width:100%; border-radius:10px; margin-bottom:15px;">
      <p>Join the crew and sync up with collective beats in team dance sessions.</p>
    </div>

    <!-- Dance Type 5 -->
    <div class="dance-card">
      <div class="icon">
        <i class="fas fa-star"></i>
      </div>
      <h3>Package 2</h3>
      <img src="" alt="Package 2" style="width:100%; border-radius:10px; margin-bottom:15px;">
    </div>

    <!-- Dance Type 6 -->
    <div class="dance-card">
      <div class="icon">
        <i class="fas fa-child"></i>
      </div>
      <h3>Package 3</h3>
      <img src="" alt="Package 3" style="width:100%; border-radius:10px; margin-bottom:15px;">
      <p>Happy day</p>
    </div>
    <div class="dance-card">
      <div class="icon">
        <i class="fas fa-child"></i>
      </div>
      <!--style 7-->
      <h3>Package 3</h3>
      <img src="" alt="Package 3" style="width:100%; border-radius:10px; margin-bottom:15px;">
      <p>Happy day</p>
    </div>
    <!--style 7-->
    <div class="dance-card">
      <div class="icon">
        <i class="fas fa-child"></i>
      </div>
      <!--style 7-->
      <h3>Package 3</h3>
      <img src="" alt="Package 3" style="width:100%; border-radius:10px; margin-bottom:15px;">
      <p>Happy day</p>
    </div>
  </div>
</section>

<style>
/* Metric Dance Section */
.metric-dance {
  padding: 50px 20px;
  background: linear-gradient(135deg, #800000, #000);
  color: #fff;
  text-align: center;
  font-family: 'Poppins', sans-serif;
}

.dance-header h2 {
  font-family: 'Playfair Display', serif;
  font-size: 2.5rem;
  color: #FFD700;
  margin-bottom: 10px;
}

.dance-header p {
  font-size: 1.2rem;
  color: #fff;
  margin-bottom: 30px;
}

.dance-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  padding: 0 10px;
}

.dance-card {
  background: rgba(255, 255, 255, 0.1);
  border: 2px solid #FFD700;
  border-radius: 12px;
  padding: 20px;
  transition: transform 0.3s, background 0.3s;
}

.dance-card:hover {
  transform: translateY(-10px);
  background: rgba(255, 255, 255, 0.2);
}

.dance-card .icon {
  font-size: 2.5rem;
  color: #FFD700;
  margin-bottom: 15px;
}

.dance-card h3 {
  font-family: 'Playfair Display', serif;
  font-size: 1.5rem;
  color: #FFD700;
  margin-bottom: 10px;
}

.dance-card p {
  font-size: 1rem;
  color: #fff;
  line-height: 1.5;
}

/* Responsive Design */
@media (max-width: 1024px) {
  .metric-dance {
    padding: 40px 15px;
  }

  .dance-header h2 {
    font-size: 2.2rem;
  }

  .dance-header p {
    font-size: 1.1rem;
  }
}

@media (max-width: 768px) {
  .metric-dance {
    padding: 30px 10px;
  }

  .dance-header h2 {
    font-size: 2rem;
  }

  .dance-header p {
    font-size: 1rem;
  }

  .dance-card {
    padding: 15px;
  }

  .dance-card .icon {
    font-size: 2rem;
  }

  .dance-card h3 {
    font-size: 1.3rem;
  }

  .dance-card p {
    font-size: 0.9rem;
  }
}

@media (max-width: 480px) {
  .dance-header h2 {
    font-size: 1.8rem;
  }

  .dance-header p {
    font-size: 0.9rem;
  }

  .dance-card {
    padding: 12px;
  }

  .dance-card .icon {
    font-size: 1.8rem;
  }

  .dance-card h3 {
    font-size: 1.2rem;
  }

  .dance-card p {
    font-size: 0.85rem;
  }
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
                <p><s>R650</s> <strong>R500</strong> ❤️</p>
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
                <p><s>R455</s> <strong>R350</strong> ❤️</p>
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

<!----------------------------------------------------------------WIgs Installation------------------------------------------------------------------------------------------------------------------------------------------------------>
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
        height: 400px; /* Adjust height as needed */
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


<!-- Why Choose Us Section -->
<section class="why-choose-us">
    <div class="why-header">
        <h2>Why Choose Us?</h2>
        <p>Discover why Berly Beauty is your trusted partner for luxury salon services and boutique offerings.</p>
    </div>
    <div class="why-grid">
        <!-- Feature 1 -->
        <div class="why-card">
            <div class="icon"><i class="fas fa-star"></i></div>
            <h3>Luxury Experience</h3>
            <p>Indulge in premium salon treatments designed to pamper and rejuvenate.</p>
        </div>
        <!-- Feature 2 -->
        <div class="why-card">
            <div class="icon"><i class="fas fa-clock"></i></div>
            <h3>Convenient Scheduling</h3>
            <p>Flexible appointment options to fit seamlessly into your busy lifestyle.</p>
        </div>
        <!-- Feature 3 -->
        <div class="why-card">
            <div class="icon"><i class="fas fa-user-friends"></i></div>
            <h3>Personalized Care</h3>
            <p>Our team tailors every service to meet your unique beauty and style needs.</p>
        </div>
        <!-- Feature 4 -->
        <div class="why-card">
            <div class="icon"><i class="fas fa-leaf"></i></div>
            <h3>Sustainable Products</h3>
            <p>We use eco-friendly and cruelty-free products for all our services.</p>
        </div>
        <!-- Feature 5 -->
        <div class="why-card">
            <div class="icon"><i class="fas fa-scissors"></i></div>
            <h3>Expert Stylists</h3>
            <p>Our skilled professionals are dedicated to delivering flawless results.</p>
        </div>
        <!-- Feature 6 -->
        <div class="why-card">
            <div class="icon"><i class="fas fa-heart"></i></div>
            <h3>Customer Satisfaction</h3>
            <p>Your happiness is our priority, and we strive to exceed your expectations.</p>
        </div>
    </div>
</section>

<style>
/* Why Choose Us Section */
.why-choose-us {
    padding: 60px 20px;
    background: linear-gradient(to bottom, maroon, black);
    color: #fff;
    text-align: center;
}

.why-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #FFD700;
    margin-bottom: 10px;
}

.why-header p {
    font-size: 1.2rem;
    color: #fff;
    margin-bottom: 40px;
}

.why-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.why-card {
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid #FFD700;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
}

.why-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}

.why-card .icon {
    font-size: 3rem;
    color: #FFD700;
    margin-bottom: 15px;
}

.why-card h3 {
    font-size: 1.5rem;
    color: #FFD700;
    margin-bottom: 10px;
}

.why-card p {
    font-size: 1rem;
    line-height: 1.5;
    color: #fff;
}

/* Media Queries for Mobile Responsiveness */
@media (max-width: 768px) {
    .why-choose-us {
        padding: 40px 15px; /* Reduced padding for smaller screens */
    }

    .why-header h2 {
        font-size: 2rem; /* Adjusted heading size */
    }

    .why-header p {
        font-size: 1rem; /* Adjusted paragraph size */
    }

    .why-grid {
        gap: 15px; /* Reduced gap between cards */
    }

    .why-card {
        padding: 15px; /* Adjusted padding inside cards */
        border-width: 1px; /* Thinner border for smaller screens */
    }

    .why-card .icon {
        font-size: 2.5rem; /* Reduced icon size */
        margin-bottom: 10px;
    }

    .why-card h3 {
        font-size: 1.3rem; /* Adjusted heading size in cards */
    }

    .why-card p {
        font-size: 0.9rem; /* Adjusted paragraph size */
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

