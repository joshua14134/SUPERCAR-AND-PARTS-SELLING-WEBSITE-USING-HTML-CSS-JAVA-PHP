<?php
include 'header.php'; // Include the header
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Cars</title>
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Link to your new stylesheet -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> <!-- Swiper CSS -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
     <!-- Navigation and other sections -->

     <section class="popular section" id="popular">
    <h2 class="section__title">
        Choose Your Car <br> from Various Brands
    </h2>
    <div class="popular__container container swiper-container">
        <div class="swiper-wrapper">
            <!-- Porsche Cars -->
<div class="swiper-slide">
    <h3 class="brand-title">Porsche</h3>
    <div class="brand-carousel swiper-container">
        <div class="swiper-wrapper">
            <!-- Existing Porsche Cars -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">Porsche 911 Turbo S</h1>
                <h3 class="popular__subtitle">Turbo S</h3>
                <img src="assets/img/popular1.png" alt="Porsche 911 Turbo S" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 3.7 sec</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 356 Km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Electric</div>
                </div>
                <h3 class="popular__price">₹14,594,700</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
            <!-- Additional Porsche Cars -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">Porsche Cayenne</h1>
                <h3 class="popular__subtitle">Cayenne Turbo</h3>
                <img src="assets/img/p2.png" alt="Porsche Cayenne" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 4.1 sec</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 250 Km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Gasoline</div>
                </div>
                <h3 class="popular__price">₹10,790,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">Porsche Panamera</h1>
                <h3 class="popular__subtitle">Panamera Turbo</h3>
                <img src="assets/img/p3.png" alt="Porsche Panamera" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 3.6 sec</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 320 Km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Gasoline</div>
                </div>
                <h3 class="popular__price">₹12,450,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<!-- Audi Cars -->
<div class="swiper-slide">
    <h3 class="brand-title">Audi</h3>
    <div class="brand-carousel swiper-container">
        <div class="swiper-wrapper">
            <!-- Existing Audi Cars -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">Audi R8 V10</h1>
                <h3 class="popular__subtitle">V10 Plus</h3>
                <img src="assets/img/a1.png" alt="Audi R8 V10" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 3.2s</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 330 km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Gasoline</div>
                </div>
                <h3 class="popular__price">₹13,280,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
            <!-- Additional Audi Cars -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">Audi Q8</h1>
                <h3 class="popular__subtitle">Q8 55 TFSI</h3>
                <img src="assets/img/a2.png" alt="Audi Q8" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 5.4s</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 250 km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Gasoline</div>
                </div>
                <h3 class="popular__price">₹7,055,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">Audi A7</h1>
                <h3 class="popular__subtitle">A7 Sportback</h3>
                <img src="assets/img/a3.png" alt="Audi A7" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 5.0s</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 250 km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Gasoline</div>
                </div>
                <h3 class="popular__price">₹5,976,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<!-- BMW Cars -->
<div class="swiper-slide">
    <h3 class="brand-title">BMW</h3>
    <div class="brand-carousel swiper-container">
        <div class="swiper-wrapper">
            <!-- Existing BMW Cars -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">BMW M4 Competition</h1>
                <h3 class="popular__subtitle">M4 Competition</h3>
                <img src="assets/img/b1.png" alt="BMW M4 Competition" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 3.8s</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 306 km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Gasoline</div>
                </div>
                <h3 class="popular__price">₹9,960,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
            <!-- Additional BMW Cars -->
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">BMW X5 M</h1>
                <h3 class="popular__subtitle">X5 M Competition</h3>
                <img src="assets/img/b2.png" alt="BMW X5 M" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 3.9s</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 250 km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Gasoline</div>
                </div>
                <h3 class="popular__price">₹11,940,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">BMW 7 Series</h1>
                <h3 class="popular__subtitle">740Li</h3>
                <img src="assets/img/b3.png" alt="BMW 7 Series" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 5.0s</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 250 km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Gasoline</div>
                </div>
                <h3 class="popular__price">₹8,150,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<!-- Lamborghini Cars -->
<div class="swiper-slide">
    <h3 class="brand-title">Lamborghini</h3>
    <div class="brand-carousel swiper-container">
        <div class="swiper-wrapper">
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">Lamborghini Aventador</h1>
                <h3 class="popular__subtitle">Aventador SVJ</h3>
                <img src="assets/img/l1.png" alt="Lamborghini Aventador" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 2.8s</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 350 km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Gasoline</div>
                </div>
                <h3 class="popular__price">₹42,91,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">Lamborghini Huracán</h1>
                <h3 class="popular__subtitle">Huracán EVO</h3>
                <img src="assets/img/l2.png" alt="Lamborghini Huracán" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 2.9s</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 325 km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Gasoline</div>
                </div>
                <h3 class="popular__price">₹21,63,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<!-- Ferrari Cars -->
<div class="swiper-slide">
    <h3 class="brand-title">Ferrari</h3>
    <div class="brand-carousel swiper-container">
        <div class="swiper-wrapper">
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">Ferrari SF90 Stradale</h1>
                <h3 class="popular__subtitle">SF90 Stradale</h3>
                <img src="assets/img/f1.png" alt="Ferrari SF90 Stradale" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 2.5s</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 340 km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Hybrid</div>
                </div>
                <h3 class="popular__price">₹51,75,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">Ferrari 488 Pista</h1>
                <h3 class="popular__subtitle">488 Pista</h3>
                <img src="assets/img/f2.png" alt="Ferrari 488 Pista" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 2.85s</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 340 km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Gasoline</div>
                </div>
                <h3 class="popular__price">₹27,30,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<!-- Toyota Cars -->
<div class="swiper-slide">
    <h3 class="brand-title">Toyota</h3>
    <div class="brand-carousel swiper-container">
        <div class="swiper-wrapper">
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">Toyota Supra</h1>
                <h3 class="popular__subtitle">GR Supra</h3>
                <img src="assets/img/t1.png" alt="Toyota Supra" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 4.1s</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 250 km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Gasoline</div>
                </div>
                <h3 class="popular__price">₹4,39,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
            <article class="popular__card swiper-slide">
                <div class="shapeX shape__smaller"></div>
                <h1 class="popular__title">Toyota Land Cruiser</h1>
                <h3 class="popular__subtitle">Land Cruiser 300</h3>
                <img src="assets/img/t2.png" alt="Toyota Land Cruiser" class="popular__img">
                <div class="popular__data">
                    <div class="popular__data-group"><i class="ri-dashboard-2-line"></i> 6.0s</div>
                    <div class="popular__data-group"><i class="ri-exchange-funds-line"></i> 200 km/h</div>
                    <div class="popular__data-group"><i class="ri-charging-pile-2-line"></i> Gasoline</div>
                </div>
                <h3 class="popular__price">₹70,55,000</h3> <!-- Converted price -->
                <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
            </article>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>


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
                    <img src="assets/logo/logo3.png" alt="Tesla">
                </button>
            </li>
            <li>
                <button class="featured__item" data-filter=".audi">
                    <img src="assets/logo/logo2.png" alt="Audi">
                </button>
            </li>
            <li>
                <button class="featured__item" data-filter=".porsche">
                    <img src="assets/logo/logo1.png" alt="Porsche">
                </button>
            </li>
            <li>
                <button class="featured__item" data-filter=".lamborghini">
                    <img src="assets/logo/logo4.png" alt="Lamborghini">
                </button>
            </li>
            <li>
                <button class="featured__item" data-filter=".maserati">
                    <img src="assets/logo/logo6.png" alt="Maserati">
                </button>
            </li>
            <li>
                <button class="featured__item" data-filter=".rolls-royce">
                    <img src="assets/logo/logo7.png" alt="Rolls-Royce">
                </button>
            </li>
            <li>
                <button class="featured__item" data-filter=".bmw">
                    <img src="assets/logo/logo5.png" alt="BMW">
                </button>
            </li>
        </ul>

        <div class="featured__content grid">
    <!-- Existing Cars -->
    <article class="featured__card mix tesla">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">Tesla</h1>
        <h3 class="featured__subtitle">Model X</h3>
        <img src="assets/img/featured1.png" alt="Tesla Model X" class="featured__img">
        <h3 class="featured__price">₹82,80,700</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
        </button>
    </article>
    <article class="featured__card mix tesla">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">Tesla</h1>
        <h3 class="featured__subtitle">Model 3</h3>
        <img src="assets/img/featured2.png" alt="Tesla Model 3" class="featured__img">
        <h3 class="featured__price">₹38,12,700</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
        </button>
    </article>
    <article class="featured__card mix audi">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">Audi</h1>
        <h3 class="featured__subtitle">E-tron</h3>
        <img src="assets/img/featured3.png" alt="Audi E-tron" class="featured__img">
        <h3 class="featured__price">₹1,46,01,700</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
    </article>
    <article class="featured__card mix porsche">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">Porsche</h1>
        <h3 class="featured__subtitle">Boxster 987</h3>
        <img src="assets/img/featured4.png" alt="Porsche Boxster 987" class="featured__img">
        <h3 class="featured__price">₹1,05,34,700</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
    </article>
    <article class="featured__card mix porsche">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">Porsche</h1>
        <h3 class="featured__subtitle">Panamera</h3>
        <img src="assets/img/featured5.png" alt="Porsche Panamera" class="featured__img">
        <h3 class="featured__price">₹1,46,01,700</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
    </article>
    <article class="featured__card mix audi">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">Audi</h1>
        <h3 class="featured__subtitle">E-tron</h3>
        <img src="assets/img/a4.png" alt="Audi E-tron" class="featured__img">
        <h3 class="featured__price">₹1,46,01,700</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
    </article>

    <!-- New Cars -->
    <article class="featured__card mix lamborghini">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">Lamborghini</h1>
        <h3 class="featured__subtitle">Aventador SVJ</h3>
        <img src="assets/img/l4.png" alt="Lamborghini Aventador SVJ" class="featured__img">
        <h3 class="featured__price">₹42,91,000</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
    </article>
    <article class="featured__card mix lamborghini">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">Lamborghini</h1>
        <h3 class="featured__subtitle">Huracán EVO</h3>
        <img src="assets/img/l3.png" alt="Lamborghini Huracán EVO" class="featured__img">
        <h3 class="featured__price">₹21,63,000</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
    </article>
    <article class="featured__card mix rolls-royce">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">Rolls-Royce</h1>
        <h3 class="featured__subtitle">Phantom</h3>
        <img src="assets/img/r1.png" alt="Rolls-Royce Phantom" class="featured__img">
        <h3 class="featured__price">₹37,76,000</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
    </article>
    <article class="featured__card mix rolls-royce">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">Rolls-Royce</h1>
        <h3 class="featured__subtitle">Cullinan</h3>
        <img src="assets/img/r2.png" alt="Rolls-Royce Cullinan" class="featured__img">
        <h3 class="featured__price">₹27,39,000</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
    </article>
    <article class="featured__card mix maserati">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">Maserati</h1>
        <h3 class="featured__subtitle">GranTurismo</h3>
        <img src="assets/img/m1.png" alt="Maserati GranTurismo" class="featured__img">
        <h3 class="featured__price">₹1,45,75,000</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
    </article>
    <article class="featured__card mix maserati">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">Maserati</h1>
        <h3 class="featured__subtitle">Levante</h3>
        <img src="assets/img/m2.png" alt="Maserati Levante" class="featured__img">
        <h3 class="featured__price">₹78,85,000</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
    </article>
    <article class="featured__card mix bmw">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">BMW</h1>
        <h3 class="featured__subtitle">M5 Competition</h3>
        <img src="assets/img/b5.png" alt="BMW M5 Competition" class="featured__img">
        <h3 class="featured__price">₹87,15,000</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
    </article>
    <article class="featured__card mix bmw">
        <div class="shape shape__smaller"></div>
        <h1 class="featured__title">BMW</h1>
        <h3 class="featured__subtitle">i8 Roadster</h3>
        <img src="assets/img/b4.png" alt="BMW i8 Roadster" class="featured__img">
        <h3 class="featured__price">₹1,22,52,500</h3> <!-- Converted price -->
        <a href="buy.php" class="button popular__button"><i class="ri-shopping-bag-2-line"></i></a>
    </article>
</div>



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Swiper for the main container
            const mainSwiper = new Swiper('.popular__container', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                slidesPerView: 1,
                spaceBetween: 30,
            });

            // Initialize Swipers for each brand carousel
            const brandCarousels = document.querySelectorAll('.brand-carousel');
            brandCarousels.forEach(carousel => {
                new Swiper(carousel, {
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    slidesPerView: 3,
                    spaceBetween: 20, // Adjust spacing between images here
                });
            });
        });
    </script>
</body>
</html>
