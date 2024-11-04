<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Super Car Website</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="home.php" class="nav__logo">
                <i class="ri-roadster-fill"></i>
                THE SUPER WHEEL
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="about.php" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="popular.php" class="nav__link">Super Cars</a>
                    </li>
                    <li class="nav__item">
                        <a href="login_form.php" class="nav__link">Login</a>
                    </li>
                    <li class="nav__item">
                        <a href="c_parts.php" class="nav__link">Parts</a>
                    </li>
                    <li class="nav__item">
                        <a href="service.php" class="nav__link">Service</a>
                    </li>
                    <li class="nav__item">
                    <a href="c_cart.php" class="nav__link"><i class="ri-shopping-cart-line"></i></a>
                </li>
                </ul>
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <!-- Background Shapes -->
            <div class="shapeX shape__big"></div>
            <div class="shapeX shape__small"></div>

            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">Pick Your Best Car</h1>
                    <h2 class="home__subtitle">Ferrari 458</h2>
                    <h3 class="home__elec">
                        <i class="ri-flashlight-fill"></i>
                        RELENTLESS FORCE
                    </h3>
                </div>
                <img src="assets/img/home8.png" alt="Ferrari 458" class="home__img">
                <div class="home__car">
                    <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-temp-cold-line"></i>
                        </div>
                        <h2 class="home__car-number">3.0s</h2>
                        <h3 class="home__car-name">0-100 km/h</h3>
                    </div>
                    <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-dashboard-2-line"></i>
                        </div>
                        <h2 class="home__car-number">419</h2>
                        <h3 class="home__car-name">POWER (KW)</h3>
                    </div>
                    <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-flashlight-fill"></i>
                        </div>
                        <h2 class="home__car-number">325 km/h</h2>
                        <h3 class="home__car-name">MAX. SPEED</h3>
                    </div>
                </div>
                <div class="slider__bg">
                <div class="slider__bg-navBtn active"></div>
                <div class="slider__bg-navBtn"></div>
                <div class="slider__bg-navBtn"></div>
                <div class="slider__bg-navBtn"></div>
                <div class="slider__bg-navBtn"></div>
                </div>
        </section>
        <div class="home__social">
                <a href="#" class="home__social-icon"><i class="ri-facebook-fill"></i></a>
                <a href="#" class="home__social-icon"><i class="ri-instagram-fill"></i></a>
                <a href="#" class="home__social-icon"><i class="ri-twitter-fill"></i></a>
            </div>

        <!--==================== GALLERY BANNER ====================-->
        <section class="gallery section">
            <div class="gallery__container container grid">
                <video class="video__slide active" src="assets/video/vid_1.mp4" autoplay muted loop></video>
                <video class="video__slide" src="assets/video/vid_4.mp4" autoplay muted loop></video>
                <video class="video__slide" src="assets/video/vid_3.mp4" autoplay muted loop></video>
                <video class="video__slide" src="assets/video/vid_2.mp4" autoplay muted loop></video>
                <video class="video__slide" src="assets/video/vid_5.mp4" autoplay muted loop></video>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slideshow Example</title>
    <style>
        /* CSS for the slideshow */
        .slideshow-container {
            position: relative;
            max-width: 100%;
            margin: auto;
        }

        .mySlides {
            display: none;
        }

        .mySlides img {
            width: 100%; /* Make images responsive */
            height: auto;
        }

        .fade {
            animation: fade 1.5s;
        }

        @keyframes fade {
            from { opacity: 0.4; }
            to { opacity: 1; }
        }

        /* Additional styles for the about section */
        .about__container {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .about__data {
            margin-left: 20px;
        }

        .about__card {
            margin-top: 10px;
        }

        .button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <section class="about section" id="about">
        <div class="about__container container grid">
            <div class="about__group">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img src="assets/img/slideshow11.jpg" alt="About" class="about__img">
                    </div>
                    <div class="mySlides fade">
                        <img src="assets/img/slideshow2.jpg" alt="About" class="about__img">
                    </div>
                    <div class="mySlides fade">
                        <img src="assets/img/slideshow3.jpg" alt="About" class="about__img">
                    </div>
                </div>
                <div class="about__card">
                    <h3 class="about__card-title">2,500+</h3>
                    <p class="about__card-description">Supercharges placed along popular routes</p>
                </div>
            </div>
            <div class="about__data">
                <h2 class="section__title about__title">Machines With <br> Future Technology</h2>
                <p class="about__description">See the future with high-performance cars produced by renowned brands. They feature futuristic builds and designs with new and innovative platforms that last a long time.</p>
                <a href="about.php" class="button">Know More</a>
            </div>
        </div>
    </section>

    <script>
        // JavaScript for the slideshow functionality
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            const slides = document.getElementsByClassName("mySlides");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            slides[slideIndex - 1].style.display = "block";  
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }
    </script>
</body>
</html>


            <!--==================== POPULAR ====================-->
<section class="popular section" id="popular">
    <h2 class="section__title">
        Choose Your Gasoline Car <br> from Various Brands
    </h2>
    <div class="popular__container container swiper">
        <div class="swiper-wrapper">
            <!-- Rolls-Royce Phantom -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Rolls-Royce</h1>
                <h3 class="popular__subtitle">Phantom</h3>

                <img src="assets/img/r1.png" alt="Rolls-Royce Phantom" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 5.1 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 250 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹37,00,0000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- Lexus LC 500 -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Lexus</h1>
                <h3 class="popular__subtitle">LC 500</h3>

                <img src="assets/img/l6.png" alt="Lexus LC 500" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 4.4 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 270 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹8,30,0000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- Ford Mustang GT -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Ford</h1>
                <h3 class="popular__subtitle">Mustang GT</h3>

                <img src="assets/img/ff1.png" alt="Ford Mustang GT" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 4.2 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 250 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹49,00,000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- Mercedes S-Class -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Mercedes</h1>
                <h3 class="popular__subtitle">AMG</h3>

                <img src="assets/img/amg1.png" alt="Mercedes S-Class" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 4.5 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 250 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹10,60,0000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- Aston Martin DB11 -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Aston Martin</h1>
                <h3 class="popular__subtitle">DB11</h3>

                <img src="assets/img/as1.png" alt="Aston Martin DB11" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 4.0 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 250 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹1,68,00,000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- McLaren 720S -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">McLaren</h1>
                <h3 class="popular__subtitle">720S</h3>

                <img src="assets/img/mc1.png" alt="McLaren 720S" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 2.7 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 341 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹2,48,00,000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- Ferrari 488 GTB -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Ferrari</h1>
                <h3 class="popular__subtitle">488 GTB</h3>

                <img src="assets/img/f3.png" alt="Ferrari 488 GTB" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 3.0 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 330 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹1,85,00,000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- Audi R8 V10 -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Audi</h1>
                <h3 class="popular__subtitle">R8 V10</h3>

                <img src="assets/img/a4.png" alt="Audi R8 V10" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 3.2 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 330 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹14,11,0000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- Bugatti Chiron -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Bugatti</h1>
                <h3 class="popular__subtitle">Chiron</h3>

                <img src="assets/img/b1.png" alt="Bugatti Chiron" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 2.5 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 420 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹2,49,00,000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>
        </div>
    </div>
</section>

<!--==================== ADDITIONAL POPULAR ====================-->
<section class="popular section" id="additional-popular">
    <h2 class="section__title">
        More Popular Choices
    </h2>
    <div class="popular__container container swiper">
        <div class="swiper-wrapper">
            <!-- Lamborghini Aventador -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Lamborghini</h1>
                <h3 class="popular__subtitle">Aventador</h3>

                <img src="assets/img/l1.png" alt="Lamborghini Aventador" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 2.9 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 350 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹34,61,000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- Nissan GT-R -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Nissan</h1>
                <h3 class="popular__subtitle">GT-R</h3>

                <img src="assets/img/ns1.png" alt="Nissan GT-R" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 2.8 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 315 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹9,55,000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- Toyota Supra -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Toyota</h1>
                <h3 class="popular__subtitle">Supra</h3>

                <img src="assets/img/su1.png" alt="Toyota Supra" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 4.1 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 250 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹4,32,000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- Volkswagen Golf R -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Volkswagen</h1>
                <h3 class="popular__subtitle">Golf R</h3>

                <img src="assets/img/v1.png" alt="Volkswagen Golf R" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 4.0 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 250 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹3,74,000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- Porsche 911 Turbo S -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Porsche</h1>
                <h3 class="popular__subtitle">911 Turbo S</h3>

                <img src="assets/img/featured5.png" alt="Porsche 911 Turbo S" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 2.8 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 330 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹18,26,000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- Maserati Alfieri -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Maserati</h1>
                <h3 class="popular__subtitle">Alfieri</h3>

                <img src="assets/img/m1.png" alt="Maserati Alfieri" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 4.1 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 290 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹14,94,000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <!-- Maserati GranTurismo -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>

                <h1 class="popular__title">Maserati</h1>
                <h3 class="popular__subtitle">GranTurismo</h3>

                <img src="assets/img/m2.png" alt="Maserati GranTurismo" class="popular__img">

                <div class="popular__data">
                    <div class="popular__data-group">
                        <i class="ri-dashboard-2-line"></i> 4.3 sec
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-exchange-funds-line"></i> 299 Km/h
                    </div>
                    <div class="popular__data-group">
                        <i class="ri-gas-station-line"></i> Gasoline
                    </div>
                </div>

                <h3 class="popular__price">₹18,90,000</h3>
                <button class="button popular__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>
        </div>
    </div>
</section>


        <!--==================== FEATURED ====================-->
<section class="features section">
    <h2 class="section__title">
        More Features
    </h2>

    <div class="features__container container grid">
        <div class="features__group">
            <img src="assets/img/fe.png" alt="" class="features__img">

            <div class="features__card features__card-1">
                <h3 class="features__card-title">800v</h3>
                <p class="features__card-description">Turbo <br> Charging</p>
            </div>

            <div class="features__card features__card-2">
                <h3 class="features__card-title">350</h3>
                <p class="features__card-description">Km <br> Range</p>
            </div>
            <div class="features__card features__card-3">
                <h3 class="features__card-title">480</h3>
                <p class="features__card-description">Km <br> Travel</p>
            </div>
        </div>
    </div>

    <img src="assets/img/map.svg" alt="" class="features__map">
</section>

<!--==================== FEATURED ====================-->
<section class="featured section" id="featured">
    <h2 class="section__title">Featured Luxury Cars</h2>
    <div class="featured__container container">
        <ul class="featured__filters">
            <li>
                <button class="featured__item active-featured" data-filter="all">
                    <span>All</span>
                </button>
            </li>
            <li>
                <button class="featured__item" data-filter=".tesla">
                    <img src="assets/logo/logo3.png" alt="">
                </button>
            </li>
            <li>
                <button class="featured__item" data-filter=".audi">
                    <img src="assets/logo/logo2.png" alt="">
                </button>
            </li>
            <li>
                <button class="featured__item" data-filter=".porsche">
                    <img src="assets/logo/logo1.png" alt="">
                </button>
            </li>
        </ul>

        <div class="featured__content grid">

            <article class="featured__card mix tesla">
                <div class="shape shape__smaller"></div>
                <h1 class="featured__title">Tesla</h1>
                <h3 class="featured__subtitle">Model X</h3>
                <img src="assets/img/featured1.png" alt="" class="featured__img">
                <h3 class="featured__price">₹8,11,800</h3>
                <button class="button featured__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <article class="featured__card mix tesla">
                <div class="shape shape__smaller"></div>
                <h1 class="featured__title">Tesla</h1>
                <h3 class="featured__subtitle">Model 3</h3>
                <img src="assets/img/featured2.png" alt="" class="featured__img">
                <h3 class="featured__price">₹37,78,800</h3>
                <button class="button featured__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <article class="featured__card mix audi">
                <div class="shape shape__smaller"></div>
                <h1 class="featured__title">Audi</h1>
                <h3 class="featured__subtitle">E-tron</h3>
                <img src="assets/img/featured3.png" alt="" class="featured__img">
                <h3 class="featured__price">₹1,44,93,800</h3>
                <button class="button featured__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <article class="featured__card mix porsche">
                <div class="shape shape__smaller"></div>
                <h1 class="featured__title">Porsche</h1>
                <h3 class="featured__subtitle">Boxster 987</h3>
                <img src="assets/img/featured4.png" alt="" class="featured__img">
                <h3 class="featured__price">₹1,03,21,800</h3>
                <button class="button featured__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <article class="featured__card mix porsche">
                <div class="shape shape__smaller"></div>
                <h1 class="featured__title">Porsche</h1>
                <h3 class="featured__subtitle">Panamera</h3>
                <img src="assets/img/featured5.png" alt="" class="featured__img">
                <h3 class="featured__price">₹1,44,93,800</h3>
                <button class="button featured__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

            <article class="featured__card mix audi">
                <div class="shape shape__smaller"></div>
                <h1 class="featured__title">Audi</h1>
                <h3 class="featured__subtitle">R8 V10</h3>
                <img src="assets/img/a2.png" alt="" class="featured__img">
                <h3 class="featured__price">₹1,44,93,800</h3>
                <button class="button featured__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>

        </div>
    </div>
</section>

    

        <!--==================== OFFER ====================-->
        <section class="offer section">

            <div class="offer__container container grid">

                <img src="assets/img/offer-bg.png" alt="" class="offer__bg">

                <div class="offer__data">
                    <h2 class="section__title offer__title">
                        Do You Want To Receive <br> Special Offers?
                    </h2>

                    <p class="offer__description">Be the first to receive all the information about our
                        products and new cars by email by subscribing to our
                        mailing list.</p>

                    <a href="#" class="button">Subscribe Now</a>
                </div>

                <img src="assets/img/sub.png" alt="" class="offer__img">

            </div>

        </section>
<!--==================== LOGOS ====================-->
<section class="logos section">
            <div class="logos__container container grid">
                <div class="logos__content">
                    <img src="assets/logo/logo1.png" alt="Logo 1" class="logos__img">
                </div>
                <div class="logos__content">
                    <img src="assets/logo/logo6.png" alt="Logo 6" class="logos__img">
                </div>
                <div class="logos__content">
                    <img src="assets/logo/logo5.png" alt="Logo 5" class="logos__img">
                </div>
                <div class="logos__content">
                    <img src="assets/logo/logo4.png" alt="Logo 4" class="logos__img">
                </div>
                <div class="logos__content">
                    <img src="assets/logo/logo3.png" alt="Logo 3" class="logos__img">
                </div>
                <div class="logos__content">
                    <img src="assets/logo/logo2.png" alt="Logo 2" class="logos__img">
                </div>
                <div class="logos__content">
                    <img src="assets/logo/logo7.png" alt="Logo 7" class="logos__img">
                </div>
            </div>
        </section>
    </main>
    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div>
                <a href="" class="footer__logo">
                    <i class="ri-steering-fill"></i>
                    THE SUPER WHEEL
                </a>
                <p class="footer__description">Discover the best super <br>
                    cars including <br>
                    Ferrari, Porsche, and more at NextCar<br>
                </p>
            </div>

            <div class="footer__links">
                <h3 class="footer__title">Links</h3>
                <a href="index.php" class="footer__link">Home</a>
                <a href="about.php" class="footer__link">About</a>
                <a href="popular.php" class="footer__link">Super Cars</a>
                <a href="#features_of_car.php" class="footer__link">Features</a>
            </div>

            <div class="footer__social">
                <a href="#" class="footer__social-link"><i class="ri-facebook-fill"></i></a>
                <a href="#" class="footer__social-link"><i class="ri-instagram-fill"></i></a>
                <a href="#" class="footer__social-link"><i class="ri-twitter-fill"></i></a>
            </div>
        </div>
    </footer>
<!--=============== SCROLL REVEAL - PAGE ANNIMATION ===============-->
<script src="assets/js/scrollrevealAnimation.min.js"></script>

<!--=============== SWIPER JS - PRODUCT SLIDER ===============-->
<script src="/assets/js/swiper-bundle.min.js"></script>

<!--=============== MIXITUP JS - FILTER PRODUCT ===============-->
<script src="assets/js/mixitup.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main.js"></script>


    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>

    
</body>

</html>
