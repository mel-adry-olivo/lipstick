<?php 
session_start();
require './includes/db.php';
require './includes/product.php';

$under500 = under500products();
$offer = offeredProduct();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artemis - Beauty Code</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/add-cart.css" />
    <link rel="stylesheet" href="css/favorites.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="preload" as="image" href="images/logo.png" />
    <link rel="preload" as="image" href="images/hero-banner-1.jpg" />
    <link rel="preload" as="image" href="images/hero-banner-2.jpg" />
    <link rel="preload" as="image" href="images/hero-banner-3.jpg" />
  </head>
  <body id="top">
    <?php include './includes/header.php'?>
    <main>
      <section class="section hero" id="home" aria-label="hero" data-section>
        <div class="container">
          <ul class="has-scrollbar">
            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image: url('images/hero-banner-1.jpg')">
                <div class="card-content">
                  <h1 class="h1 hero-title">Discover Your<br/>Signature Shade</h1>
                  <p class="hero-text">Emphasize the long-lasting formula and its perfect application for special occasions.</p>
                  <p class="price">Starting at ₱100.00</p>
                  <a href="./all-products.php" id="shopNowButton1" class="btn btn-primary">Shop Now</a>
                </div>
              </div>
            </li>
            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image: url('images/hero-banner-2.jpg')">
                <div class="card-content">
                  <h1 class="h1 hero-title">Reveal The <br/>Beauty of your Lips</h1>
                  <p class="hero-text">Made using clean, non-toxic ingredients, our products are designed for everyone.</p>
                  <p class="price">Starting at ₱100.00</p>
                  <a href="./all-products.php" class="btn btn-primary">Shop Now</a>
                </div>
              </div>
            </li>
            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image: url('images/hero-banner-3.jpg')">
                <div class="card-content">
                  <h1 class="h1 hero-title">Reveal The <br/>Beauty of your Lips</h1>
                  <p class="hero-text">Made using clean, non-toxic ingredients, our products are designed for everyone.</p>
                  <p class="price">Starting at ₱100.00</p>
                  <a href="./all-products.php" class="btn btn-primary">Shop Now</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="section collection" id="collection" aria-label="collection" data-section>
        <div class="container">
          <ul class="collection-list">
            <li>
              <div class="collection-card has-before hover:shine">
                <h2 class="h2 card-title">New Collections</h2>
                <p class="card-text">Starting at ₱1000.00</p>
                <a href="./collection.php" class="btn-link">
                  <span class="span">Shop Now</span>
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>
                <div class="has-bg-image" style="background-image: url('images/collections/Rouge Sur Mesure.jpg')"></div>
              </div>
            </li>
            <li>
              <div class="collection-card has-before hover:shine">
                <h2 class="h2 card-title">Flash Sale</h2>
                <p class="card-text">Get the glow</p>
                <a href="./all-products.php" class="btn-link">
                  <span class="span">Discover Now</span>
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>
                <div class="has-bg-image" style="background-image: url('images/lipgloss/DIOR Addict Radiant Luster.jpg')"></div>
              </div>
            </li>
            <li>
              <!-- Collection Card -->
              <div class="collection-card has-before hover:shine">
                <h2 class="h2 card-title">Best Sellers</h2>
                <p class="card-text">Starting at ₱100.00</p>
                <a href="./all-products.php" class="btn-link">
                  <span class="span">Discover Now</span>
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>
                <div class="has-bg-image" style="background-image: url('images/matte/MAC Daring Diva.jpg')"></div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="section shop" id="shop" aria-label="shop" data-section>
        <div class="container">
          <div class="title-wrapper">
            <h2 class="h2 section-title">Under ₱500.00</h2>
            <a href="./all-products.php" class="btn-link">
              <span class="span">Shop All Products</span>
              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>
          <ul class="has-scrollbar">
          <?php foreach($under500 as $lipstick) {
            render_product($lipstick);
          }
          ?>
          </ul>
        </div>
      </section>
      <section class="section banner" aria-label="banner" data-section>
        <div class="container">
          <ul class="banner-list">
            <li>
              <div class="banner-card banner-card-1 has-before hover:shine">
                <p class="card-subtitle">New Collection</p>
                <h2 class="h2 card-title">Discover Our Yves Saint Laurent (YSL) Rouge Pur Couture Collection</h2>
                <a href="./catalog-products.php?brand_id=3" id="shopNowButton3" class="btn btn-secondary">Explore More</a>
                <div class="has-bg-image" style="background-image: url('images/banner-1.jpg')"></div>
              </div>
            </li>
            <li>
              <div class="banner-card banner-card-2 has-before hover:shine">
                <h2 class="h2 card-title">20% off Everything</h2>
                <p class="card-text">Lipsticks with extended range in colors for every human.</p>
                <a href="./all-products.php" id="shopNowButton4" class="btn btn-secondary">Shop Sale</a>
                <div
                  class="has-bg-image"
                  style="background-image: url('images/banner-2.jpg')"
                ></div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="section feature" aria-label="feature" data-section>
        <div class="container">
          <h2 class="h2-large section-title">Why Shop with Beauty Code?</h2>
          <ul class="flex-list">
            <li class="flex-item">
              <div class="feature-card">
                <img src="images/feature-1.jpg" width="204" height="236" loading="lazy" alt="Guaranteed PURE" class="card-icon"/>
                <h3 class="h3 card-title">Guaranteed PURE</h3>
                <p class="card-text">
                  All Grace formulations adhere to strict purity standards and will never contain
                  harsh or toxic ingredients
                </p>
              </div>
            </li>
            <li class="flex-item">
              <div class="feature-card">
                <img src="images/feature-2.jpg" width="204" height="236" loading="lazy" alt="Completely Cruelty-Free" class="card-icon"/>
                <h3 class="h3 card-title">Completely Cruelty-Free</h3>
                <p class="card-text">
                  All Grace formulations adhere to strict purity standards and will never contain
                  harsh or toxic ingredients
                </p>
              </div>
            </li>
            <li class="flex-item">
              <div class="feature-card">
                <img src="images/feature-3.jpg" width="204" height="236" loading="lazy" alt="Ingredient Sourcing" class="card-icon"/>
                <h3 class="h3 card-title">Ingredient Sourcing</h3>
                <p class="card-text">
                  All Grace formulations adhere to strict purity standards and will never contain
                  harsh or toxic ingredients
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="section offer" id="offer" aria-label="offer" data-section>
        <div class="container">
          <figure class="offer-banner">
            <img src="<?php echo $offer['image_url']; ?>" width="305" height="408" loading="lazy" alt="offer products" class="w-100"/>
          </figure>
          <div class="offer-content">
            <p class="offer-subtitle">
              <span class="span">Special Offer</span>
            </p>
            <h2 class="h2-large section-title"><?php echo $offer['name']; ?></h2>
            <p class="section-text">
              <?php echo $offer['description']; ?>
            </p>
            <div class="countdown">
              <span class="time" aria-label="days">15</span>
              <span class="time" aria-label="hours">21</span>
              <span class="time" aria-label="minutes">46</span>
              <span class="time" aria-label="seconds">08</span>
            </div>
            <a href="product-detail.html?id=<?php echo $offer['id']; ?>" class="btn btn-primary">Get Only ₱<?php echo $offer['price']; ?></a>
          </div>
        </div>
      </section>
      <section class="section blog" id="blog" aria-label="blog" data-section>
        <div class="container">
          <h2 class="h2-large section-title">More to Discover</h2>
          <ul class="flex-list">
            <li class="flex-item">
              <div class="blog-card">
                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450">
                  <img src="images/blog-1.jpg" width="700" height="450" loading="lazy" alt="Find a Store" class="img-cover"/>
                </figure>
                <h3 class="h3">
                  <a href="./about.php" class="card-title">Find a Store</a>
                </h3>
                <a href="about.html" class="btn-link">
                  <span class="span">About us</span>
                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>
            <li class="flex-item">
              <div class="blog-card">
                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450">
                  <img src="images/blog-3.jpg" width="700" height="450" loading="lazy" alt="Our Story" class="img-cover"/>
                </figure>
                <h3 class="h3">
                  <a href="#" class="card-title">Our Story</a>
                </h3>
                <a href="./about.html" class="btn-link">
                  <span class="span">About us</span>
                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php include './includes/footer.php'?>
    <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
      <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
    </a>
    <script src="js/script.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
