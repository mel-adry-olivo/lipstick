<?php 

session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - Beauty Code</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/about.css" />
    <link rel="stylesheet" href="css/add-cart.css" />
    <link rel="stylesheet" href="css/favorites.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
  </head>

  <body id="top">
    <?php include './includes/header.php'?>
    <main>
      <article>
        <section
          class="section about-us"
          id="about-us"
          aria-label="about us"
          data-section
        >
          <div class="container">
            <h2 class="h2 section-title">About Us</h2>
            <p>
              Welcome to Beauty Code! At Beauty Code, we believe in the power of
              a well-crafted lipstick. Our mission is to empower individuals by
              helping them express their unique beauty through bold, radiant
              lips. We offer a wide range of shades and finishes to suit every
              mood, occasion, and style.
            </p>
          </div>
        </section>

        <section
          class="section our-story"
          id="our-story"
          aria-label="our story"
          data-section
        >
          <div class="container">
            <h2 class="h2 section-title">Our Story</h2>
            <p>
              Beauty Code started with a passion for creating high-quality,
              long-lasting lipsticks that cater to every skin tone. Our founder
              noticed a gap in the market for inclusive beauty products that
              celebrate diversity, and so Beauty Code was born. We combine
              luxurious textures, vibrant pigments, and nourishing ingredients
              to ensure your lips look flawless while staying hydrated.
            </p>
          </div>
        </section>

        <section
          class="section stores"
          id="stores"
          aria-label="stores"
          data-section
        >
          <div class="container">
            <h2 class="h2 section-title">Stores Available</h2>
            <p>You can find Beauty Code Lipsticks in the following stores:</p>
            <ul>
              <li>Lipstick Boutique (New York, NY)</li>
              <li>Glam Beauty Essentials (Los Angeles, CA)</li>
              <li>Shimmer Cosmetics (Chicago, IL)</li>
              <li>Luxe Makeup Haven (Houston, TX)</li>
              <li>Online at <a href="#">www.beautycode.com</a></li>
            </ul>
          </div>
        </section>

        <section
          class="section join-us"
          id="join-us"
          aria-label="join us"
          data-section
        >
          <div class="container">
            <h2 class="h2 section-title">Join Us!</h2>
            <p>
              Join our community of beauty lovers and let us help you unlock
              your inner beauty. Follow us on social media and sign up for our
              newsletter to get the latest updates on new collections,
              promotions, and more.
            </p>
            <p>Let’s Paint the World with Color!</p>
          </div>
        </section>
      </article>
    </main>

    <footer class="footer" data-section>
      <div class="container">
        <!-- Opening container -->
        <div class="footer-top">
          <ul class="footer-list">
            <li>
              <p class="footer-list-title">Company</p>
            </li>

            <li>
              <p class="footer-list-text">
                Find a location nearest you. See
                <a href="#" class="link">Our Stores</a>
              </p>
            </li>

            <li>
              <p class="footer-list-text bold">+962 79 0456 795</p>
            </li>

            <li>
              <p class="footer-list-text">dianahmariecanonicato@gmail.com</p>
            </li>
          </ul>

          <ul class="footer-list">
            <li>
              <p class="footer-list-title">Useful links</p>
            </li>

            <li>
              <a href="#" class="footer-link">New Products</a>
            </li>

            <li>
              <a href="#" class="footer-link">Best Sellers</a>
            </li>

            <li>
              <a href="#" class="footer-link">Bundle & Save</a>
            </li>

            <li>
              <a href="#" class="footer-link">Online Gift Card</a>
            </li>
          </ul>

          <ul class="footer-list">
            <li>
              <p class="footer-list-title">Information</p>
            </li>

            <li>
              <a href="#" class="footer-link">Start a Return</a>
            </li>

            <li>
              <a href="#" class="footer-link">Contact Us</a>
            </li>

            <li>
              <a href="#" class="footer-link">Shipping FAQ</a>
            </li>

            <li>
              <a href="#" class="footer-link">Terms & Conditions</a>
            </li>

            <li>
              <a href="#" class="footer-link">Privacy Policy</a>
            </li>
          </ul>

          <div class="footer-list">
            <p class="newsletter-title">Good emails.</p>

            <p class="newsletter-text">
              Enter your email below to be the first to know about new
              collections and product launches.
            </p>

            <form action="" class="newsletter-form">
              <input
                type="email"
                name="email_address"
                placeholder="Enter your email address"
                required
                class="email-field"
              />
              <button type="submit" class="btn btn-primary">
                Coding Stuff
              </button>
            </form>
          </div>
        </div>
        <!-- Closing footer-top -->

        <div class="footer-bottom">
          <div class="wrapper">
            <p class="copyright">&copy; 2024, Dianah Marie Canonicato</p>

            <ul class="social-list">
              <li>
                <a href="https://twitter.com" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
              <li>
                <a
                  href="https://www.facebook.com/dianahmarie.malfartacanonicato/"
                  class="social-link"
                >
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
              <li>
                <a
                  href="https://www.instagram.com/dyanexx/"
                  class="social-link"
                >
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/" class="social-link">
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
              </li>
            </ul>
          </div>

          <a href="#" class="logo">
            <img
              src="images/logo.png"
              width="179"
              height="26"
              loading="lazy"
              alt="Glowing"
            />
          </a>

          <img
            src="images/pay.png"
            width="313"
            height="28"
            alt="available all payment method"
            class="w-100"
          />
        </div>
        <!-- Closing footer-bottom -->
      </div>
      <!-- Closing container -->
    </footer>

    <!-- 
    - #BACK TO TOP
  -->

    <a
      href="#top"
      class="back-top-btn"
      aria-label="back to top"
      data-back-top-btn
    >
      <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
    </a>

    <!-- 
    - custom js link
  -->
    <script src="js/script.js" defer></script>
    <script src="js/add-cart.js" defer></script>
    <script src="js/favorites.js" defer></script>

    <!-- 
    - ionicon link
  -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
