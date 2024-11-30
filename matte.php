<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artemis - Beauty Code | Products</title>

    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/all-products.css" />
    <link rel="stylesheet" href="css/login.css" />
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
    <header class="header">
      <div class="alert">
        <div class="container">
          <p class="alert-text">
            Free Shipping: Local Orders Over P999 & International Orders: Asia
            P10,000, US/Canada/Australia P15,000
          </p>
        </div>
      </div>

      <div class="header-top" data-header>
        <div class="container">
          <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
          </button>

          <div class="input-wrapper">
            <input
              type="search"
              name="search"
              placeholder="Search product"
              class="search-field"
            />

            <button class="search-submit" aria-label="search">
              <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

          <a href="#" class="logo">
            <img src="images/logo.png" width="179" height="26" alt="Glowing" />
          </a>

          <div class="header-actions">
            <a href="login.html">
              <button class="header-action-btn" aria-label="user">
                <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
              </button>
            </a>
            <button
              class="header-action-btn"
              id="favourites-icon"
              aria-label="favourite item"
            >
              <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
              <span class="btn-badge">0</span>
            </button>
            <button
              class="header-action-btn"
              id="cart-icon"
              aria-label="cart item"
            >
              <data class="btn-text" value="0">$0.00</data>
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <span class="btn-badge">0</span>
            </button>
          </div>
        </div>
      </div>

      <!-- Navigation Bar -->
      <nav class="navbar">
        <ul class="navbar-list">
          <li>
            <a href="index.html#home" class="navbar-link has-after">Home</a>
          </li>
          <li>
            <a href="collection.html#collection" class="navbar-link has-after"
              >Collections</a
            >
          </li>
          <li class="dropdown">
            <a
              href="all-products.html#all-products"
              class="navbar-link has-after dropdown-toggle"
              aria-haspopup="true"
              aria-expanded="false"
              >Shop</a
            >
            <ul class="dropdown-menu landscape">
              <li>
                <a href="matte.html#matte" class="dropdown-link">Matte</a>
              </li>
              <li>
                <a href="satin.html#satin" class="dropdown-link">Satin</a>
              </li>
              <li>
                <a href="lipgloss.html# lip-gloss" class="dropdown-link"
                  >Lip Gloss</a
                >
              </li>
              <li>
                <a href="lipstain.html#lip-stain" class="dropdown-link"
                  >Lip Stain</a
                >
              </li>
              <li>
                <a href="liptint.html#lip-tint" class="dropdown-link"
                  >Lip Tint</a
                >
              </li>
              <li>
                <a href="creamy.html#creamy" class="dropdown-link">Creamy</a>
              </li>
              <li>
                <a href="sheer.html#sheer" class="dropdown-link">Sheer</a>
              </li>
              <li>
                <a href="lipcrayons.html#lip-crayons" class="dropdown-link"
                  >Lip Crayons</a
                >
              </li>
            </ul>
          </li>
          <li>
            <a href="bestsellers.html" class="navbar-link has-after"
              >Bestsellers</a
            >
          </li>
          <li>
            <a href="about.html" class="navbar-link has-after">About Us</a>
          </li>
        </ul>
      </nav>
    </header>

    <!-- Cart Overlay -->
    <div class="cart-overlay" id="cart-overlay">
      <div class="cart-header">
        <h2>Your Cart</h2>
        <button class="close-cart-btn" id="close-cart-btn">&times;</button>
      </div>
      <div class="cart-content">
        <p id="cart-message">Your cart is currently empty.</p>
        <button class="continue-shopping-btn" id="continue-shopping">
          Continue Shopping
        </button>
        <button class="checkout-btn" id="checkout-btn" style="display: none">
          Checkout
        </button>
      </div>
    </div>
    <!-- Favourites Overlay -->
    <div class="favourites-overlay" id="favourites-overlay">
      <div class="favourites-header">
        <h2>Your Favourites</h2>
        <button class="close-favourites-btn" id="close-favourites-btn">
          &times;
        </button>
      </div>
      <div class="favourites-content">
        <p id="favourites-message">You have no favourites yet.</p>
        <button class="continue-shopping-btn" id="continue-shopping">
          Continue Shopping
        </button>
      </div>
    </div>

    <!-- MOBILE NAVBAR  -->

    <div class="mobile-navbar" data-navbar>
      <div class="wrapper">
        <a href="#" class="logo">
          <img src="images/logo.png" width="179" height="26" alt="Glowing" />
        </a>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>

      <ul class="navbar-list">
        <li>
          <a href="#home" class="navbar-link" data-nav-link>Home</a>
        </li>
        <li>
          <a href="#collection" class="navbar-link" data-nav-link
            >New Collection</a
          >
        </li>
        <li class="dropdown">
          <a href="#shop" class="navbar-link dropdown-toggle" data-nav-link
            >Shop</a
          >
          <ul class="dropdown-menu">
            <li>
              <a href="#matte" class="dropdown-link">Matte</a>
            </li>
            <li>
              <a href="#satin" class="dropdown-link">Satin</a>
            </li>
            <li>
              <a href="#lip-gloss" class="dropdown-link">Lip Gloss</a>
            </li>
            <li>
              <a href="#lip-stain" class="dropdown-link">Lip Stain</a>
            </li>
            <li>
              <a href="#lip-tint" class="dropdown-link">Lip Tint</a>
            </li>
            <li>
              <a href="#creamy" class="dropdown-link">Creamy</a>
            </li>
            <li>
              <a href="#sheer" class="dropdown-link">Sheer</a>
            </li>
            <li>
              <a href="#lip-crayons" class="dropdown-link">Lip Crayons</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#about-us" class="navbar-link" data-nav-link>About Us</a>
        </li>
      </ul>
    </div>

    <main>
      <article>
        <!-- All Products Section -->
        <section
          class="section shop"
          id="all-products"
          aria-label="all-products"
          data-section
        >
          <div class="container">
            <div class="title-wrapper">
              <h2 class="h2 section-title">Matte Lipsticks</h2>

              <div class="sort-by">
                <span>Sort by:</span>
                <select>
                  <option value="feature">Feature</option>
                  <!-- Change the value to 'feature' -->
                  <option value="price-asc">Price: Low to High</option>
                  <option value="price-desc">Price: High to Low</option>
                  <option value="name-asc">Name: A to Z</option>
                  <option value="name-desc">Name: Z to A</option>
                  <option value="oldest">Oldest to Newest</option>
                  <option value="newest">Newest to Oldest</option>
                </select>
              </div>
            </div>

            <ul class="has-scrollbar">
              <!-- Product 1 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/NARS Velvet Touch.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Classic Red Lipstick"
                      class="img-cover"
                    />
                    <span class="badge" aria-label="20% off">-20%</span>
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <del class="del">₱400.00.00</del>
                      <span class="span">₱300.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=1" class="card-title"
                        >NARS Velvet Touch Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="5-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
                      <p class="rating-text">4500 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #570549"
                            aria-label="Violet"
                          ></span>
                          <span class="color-tooltip">Violet</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #b22222"
                            aria-label="Dark Red"
                          ></span>
                          <span class="color-tooltip">Dark Red</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Product 2 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/Maybelline Timeless Temptation.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Cherry Red Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱200.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=2" class="card-title"
                        >Maybelline Timeless Temptation Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="4-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </div>
                      <p class="rating-text">3000 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #ff4444"
                            aria-label="Cherry Red"
                          ></span>
                          <span class="color-tooltip">Cherry Red</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #8b0000"
                            aria-label="Crimson Red"
                          ></span>
                          <span class="color-tooltip">Crimson Red</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Product 3 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/NARS Urban Chic.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Ruby Red Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱300.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=3" class="card-title"
                        >NARS Urban Chic</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="5-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
                      <p class="rating-text">4000 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #c8102e"
                            aria-label="Ruby Red"
                          ></span>
                          <span class="color-tooltip">Ruby Red</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #dc143c"
                            aria-label="Crimson"
                          ></span>
                          <span class="color-tooltip">Crimson</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Product 4 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/YSL Bold Ambition.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Matte Red Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱500.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=4" class="card-title"
                        >YSL Bold Ambition Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="4-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </div>
                      <p class="rating-text">2200 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #b22222"
                            aria-label="Matte Red"
                          ></span>
                          <span class="color-tooltip">Matte Red</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #cd5c5c"
                            aria-label="Soft Red"
                          ></span>
                          <span class="color-tooltip">Soft Red</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Product 5 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/MAC Chic Statement.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Shimmer Red Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱400.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=5" class="card-title"
                        >MAC Chic Statement Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="4-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </div>
                      <p class="rating-text">1700 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #dd25b5"
                            aria-label="Purple"
                          ></span>
                          <span class="color-tooltip">Purple</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #d91e18"
                            aria-label="Bright Red"
                          ></span>
                          <span class="color-tooltip">Bright Red</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>

            <ul class="has-scrollbar">
              <!-- Product 6 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/Maybelline Classic Charm.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Coral Kiss Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱200.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=6" class="card-title"
                        >Maybelline Classic Charm Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="4-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </div>
                      <p class="rating-text">1200 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #ff7f50"
                            aria-label="Coral"
                          ></span>
                          <span class="color-tooltip">Coral</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #ff4500"
                            aria-label="Bright Coral"
                          ></span>
                          <span class="color-tooltip">Bright Coral</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Product 7 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/MAC Daring Diva.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Classic Red Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱400.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=7" class="card-title"
                        >MAC Daring Diva Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="5-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
                      <p class="rating-text">3000 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #e63946"
                            aria-label="Classic Red"
                          ></span>
                          <span class="color-tooltip">Classic Red</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #d00000"
                            aria-label="Deep Red"
                          ></span>
                          <span class="color-tooltip">Deep Red</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Product 8 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <div class="brand-label">Avon</div>
                    <img
                      src="images/matte/Avon Fierce Confidence.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Berry Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱350.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=8" class="card-title"
                        >Avon Fierce Confidence Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="4-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </div>
                      <p class="rating-text">850 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #9b59b6"
                            aria-label="Berry"
                          ></span>
                          <span class="color-tooltip">Berry</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #8e44ad"
                            aria-label="Dark Berry"
                          ></span>
                          <span class="color-tooltip">Dark Berry</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Product 9 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/Avon Magnetic Appeal.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Nude Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱100.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=9" class="card-title"
                        >Avon Magnetic Appeal Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="4.5-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon
                          name="star-half"
                          aria-hidden="true"
                        ></ion-icon>
                      </div>
                      <p class="rating-text">1450 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #d8c7a6"
                            aria-label="Beige"
                          ></span>
                          <span class="color-tooltip">Beige</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #e4b169"
                            aria-label="Warm Nude"
                          ></span>
                          <span class="color-tooltip">Warm Nude</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Product 10 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/Mac Noir Romance.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Mauve Magic Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱700.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=10" class="card-title"
                        >Mac Noir Romance Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="4-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </div>
                      <p class="rating-text">1500 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #e091b8"
                            aria-label="Mauve"
                          ></span>
                          <span class="color-tooltip">Mauve</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #d597c9"
                            aria-label="Soft Mauve"
                          ></span>
                          <span class="color-tooltip">Soft Mauve</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>

            <ul class="has-scrollbar">
              <!-- Product 11 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/Mac Rebel Spirit.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Berry Burst Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱400.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=11" class="card-title"
                        >Mac Rebel Spirit Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="5-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
                      <p class="rating-text">2000 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #6f2c4b"
                            aria-label="Berry"
                          ></span>
                          <span class="color-tooltip">Berry</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #af4b63"
                            aria-label="Deep Berry"
                          ></span>
                          <span class="color-tooltip">Deep Berry</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Product 12 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/NARS Sassy Seduction.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Nude Delight Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱450.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=12" class="card-title"
                        >NARS Sassy Seduction Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="4-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </div>
                      <p class="rating-text">1300 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #f5d09b"
                            aria-label="Nude"
                          ></span>
                          <span class="color-tooltip">Nude</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #e6b19a"
                            aria-label="Soft Nude"
                          ></span>
                          <span class="color-tooltip">Soft Nude</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Product 13 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/NARS Ultra Matte Lipstick.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Plum Passion Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱550.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=13" class="card-title"
                        >NARS Ultra Matte Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="5-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
                      <p class="rating-text">2500 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #5d3b57"
                            aria-label="Plum"
                          ></span>
                          <span class="color-tooltip">Plum</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #a84b88"
                            aria-label="Deep Plum"
                          ></span>
                          <span class="color-tooltip">Deep Plum</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Product 14 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/Mac Lipstick.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Cherry Red Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱600.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=14" class="card-title"
                        >Mac Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="4-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </div>
                      <p class="rating-text">1600 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #b20d22"
                            aria-label="Cherry"
                          ></span>
                          <span class="color-tooltip">Cherry</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #f49c9b"
                            aria-label="Bright Cherry"
                          ></span>
                          <span class="color-tooltip">Bright Cherry</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Product 15 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/matte/YSL Coral Kiss.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Coral Kiss Lipstick"
                      class="img-cover"
                    />
                    <div class="card-actions">
                      <button class="action-btn" aria-label="add to cart">
                        <ion-icon
                          name="bag-handle-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="add to wishlist">
                        <ion-icon
                          name="star-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                      <button class="action-btn" aria-label="reserve">
                        <ion-icon
                          name="book-outline"
                          aria-hidden="true"
                        ></ion-icon>
                      </button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="price">
                      <span class="span">₱500.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=15" class="card-title"
                        >YSL Coral Kiss Lipstick</a
                      >
                    </h3>
                    <div class="card-rating">
                      <div class="rating-wrapper" aria-label="5-star rating">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
                      <p class="rating-text">1800 reviews</p>
                    </div>
                    <!-- Color Shades -->
                    <div class="color-shades">
                      <h4 class="color-title">Available Colors:</h4>
                      <div class="color-options">
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #f65a94"
                            aria-label="Coral"
                          ></span>
                          <span class="color-tooltip">Coral</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #f9d8b4"
                            aria-label="Soft Coral"
                          ></span>
                          <span class="color-tooltip">Soft Coral</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
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

    <!-- Scripts -->
    <script src="js/script.js" defer></script>
    <script src="js/all-products.js" defer></script>
    <script src="js/add-cart.js" defer></script>
    <script src="js/favorites.js" defer></script>

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
