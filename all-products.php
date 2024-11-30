<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artemis - Beauty Code | Collection</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/all-products.css" />
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
          class="section brands"
          id="brands"
          aria-label="brands"
          data-section
        >
          <div class="container">
            <h2 class="h2.1 section-title">Lipstick Brands</h2>
            <ul class="brands-list">
              <li class="brands-item">
                <a href="nars.html" class="brands-link">
                  <img
                    src="images/nars-logo.png"
                    width="100"
                    height="100"
                    loading="lazy"
                    alt="NARS Logo"
                    class="brands-logo"
                  />
                </a>
              </li>
              <li class="brands-item">
                <a href="avon.html" class="brands-link">
                  <img
                    src="images/avon-logo.jpg"
                    width="100"
                    height="100"
                    loading="lazy"
                    alt="Avon Logo"
                    class="brands-logo"
                  />
                </a>
              </li>
              <li class="brands-item">
                <a href="ysl.html" class="brands-link">
                  <img
                    src="images/ysl-logo.jpg"
                    width="100"
                    height="100"
                    loading="lazy"
                    alt="YSL Logo"
                    class="brands-logo"
                  />
                </a>
              </li>
              <li class="brands-item">
                <a href="mac.html" class="brands-link">
                  <img
                    src="images/mac-logo.png"
                    width="100"
                    height="100"
                    loading="lazy"
                    alt="MAC Logo"
                    class="brands-logo"
                  />
                </a>
              </li>
              <li class="brands-item">
                <a href="maybelline.html" class="brands-link">
                  <img
                    src="images/maybelline-logo.jpg"
                    width="100"
                    height="100"
                    loading="lazy"
                    alt="MAC Logo"
                    class="brands-logo"
                  />
                </a>
              </li>
              <li class="brands-item">
                <a href="dior.html" class="brands-link">
                  <img
                    src="images/dior-logo.jpg"
                    width="100"
                    height="100"
                    loading="lazy"
                    alt="MAC Logo"
                    class="brands-logo"
                  />
                </a>
              </li>
            </ul>
          </div>
        </section>

        <section
          class="section shop"
          id="all-products"
          aria-label="all-products"
          data-section
        >
          <div class="container">
            <div class="title-wrapper">
              <h2 class="h2.1 section-title">Products</h2>

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

            <h2 class="h2 section-title">Flash Sale</h2>
            <ul class="has-scrollbar">
              <!-- Product 1 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/sheer/Maybelline Barely There Bliss.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Maybelline Delicate Dream Lipstick"
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
                      <del class="del">₱400.00</del>
                      <span class="span">₱300.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=91" class="card-title"
                        >Maybelline Delicate Dream Lipstick</a
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
                            role="button"
                            tabindex="0"
                          ></span>
                          <span class="color-tooltip">Classic Red</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #b22222"
                            aria-label="Dark Red"
                            role="button"
                            tabindex="0"
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
                      src="images/Satin/YSL Lush Satin.jpg"
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
                      <a href="product-detail.html?id=16" class="card-title"
                        >YSL Lush Satin Lipstick</a
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
                            style="background-color: #ff69b4"
                            aria-label="Pink"
                          ></span>
                          <span class="color-tooltip">Pink</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #da0d0d"
                            aria-label="Red"
                          ></span>
                          <span class="color-tooltip">Red</span>
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

              <!-- Product 4 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/liptint/NARS Dewy Kiss.jpg"
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
                      <del class="del">₱400.00</del>
                      <span class="span">₱300.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=61" class="card-title"
                        >NARS Dewy Kiss Liptint</a
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
                            style="background-color: #ff0033"
                            aria-label="Ruby Red"
                          ></span>
                          <span class="color-tooltip">Ruby Red</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #ff69b4"
                            aria-label="Pink Petal"
                          ></span>
                          <span class="color-tooltip">Pink Petal</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #e0115f"
                            aria-label="Crimson Red"
                          ></span>
                          <span class="color-tooltip">Crimson Red</span>
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
                      src="images/lipgloss/DIOR Addict Radiant Luster.jpg"
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
                      <a href="product-detail.html?id=43" class="card-title"
                        >DIOR Addict Radiant Luster Lipgloss</a
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

              <!-- Product 6 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/lipgloss/MAC Crystal Clear.jpg"
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
                      <a href="product-detail.html?id=31" class="card-title"
                        >MAC Crystal Clear Lipgloss</a
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
                            style="background-color: #ff69b4"
                            aria-label="Pink Sparkle"
                          ></span>
                          <span class="color-tooltip">Pink Sparkle</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #ffa07a"
                            aria-label="Orange Glow"
                          ></span>
                          <span class="color-tooltip">Orange Glow</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #c71585"
                            aria-label="Fuchsia Frenzy"
                          ></span>
                          <span class="color-tooltip">Fuchsia Frenzy</span>
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
                      src="images/lipcrayon/Avon Bold Crayon.jpg"
                      width="540"
                      height="720"
                      loading="lazy"
                      alt="Classic Red Lipstick"
                      class="img-cover"
                    />
                    <span class="badge" aria-label="20% off">-50%</span>
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
                      <del class="del">₱300.00.00</del>
                      <span class="span">₱150.00</span>
                    </div>
                    <h3>
                      <a href="product-detail.html?id=106" class="card-title"
                        >Avon Bold Crayon</a
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
                            style="background-color: #d50000"
                            aria-label="Fiery Scarlet"
                          ></span>
                          <span class="color-tooltip">Fiery Scarlet</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #e57373"
                            aria-label="Rosy Blush"
                          ></span>
                          <span class="color-tooltip">Rosy Blush</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #8b0000"
                            aria-label="Brick Red"
                          ></span>
                          <span class="color-tooltip">Brick Red</span>
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
                    <img
                      src="images/creamy/Maybelline Heavenly Texture.jpg"
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
                      <a href="product-detail.html?id=76" class="card-title"
                        >Maybelline Heavenly Texture Lipstick</a
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
                            style="background-color: #e60023"
                            aria-label="Cherry Cream"
                          ></span>
                          <span class="color-tooltip">Cherry Cream</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #b1773d"
                            aria-label="Pink Velvet"
                          ></span>
                          <span class="color-tooltip">Brown</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #a52a2a"
                            aria-label="Chestnut Cream"
                          ></span>
                          <span class="color-tooltip">Chestnut Cream</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>

            <h2 class="h2 section-title">All Products</h2>

            <ul class="has-scrollbar">
              <!-- Product 1 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/lipgloss/YSL Effortless Shine.jpg"
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
                      <a href="product-detail.html?id=33" class="card-title"
                        >YSL Effortless Shine Lipgloss</a
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
                            style="background-color: #32cd32"
                            aria-label="Green Goddess"
                          ></span>
                          <span class="color-tooltip">Green Goddess</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #ffff00"
                            aria-label="Yellow Sunshine"
                          ></span>
                          <span class="color-tooltip">Yellow Sunshine</span>
                        </div>
                        <div class="color-swatch-container">
                          <span
                            class="color-swatch"
                            style="background-color: #ff99cc"
                            aria-label="Pastel Pink"
                          ></span>
                          <span class="color-tooltip">Pastel Pink</span>
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
                      src="images/creamy/YSL Cream Lipstick.jpg"
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
                      <a href="product-detail.html?id=79" class="card-title"
                        >YSL Cream Lipstick</a
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

              <!-- Product 3 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/lipgloss/Maybelline Sweet Seduction.jpg"
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
                      <a href="product-detail.html?id=45" class="card-title"
                        >Maybelline Sweet Seduction Lipgloss</a
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

              <!-- Product 4 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/liptint/NARS Effortless Tint.jpg"
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
                      <a href="product-detail.html?id=62" class="card-title"
                        >NARS Effortless Tint</a
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

              <!-- Product 5 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/lipgloss/MAC Radiate Joy.jpg"
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
                      <a href="product-detail.html?id=44" class="card-title"
                        >MAC Radiate Joy Lipgloss</a
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
                      src="images/Satin/Dior Silken Spice.jpg"
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
                      <a href="product-detail.html?id=17" class="card-title"
                        >Dior Silken Spice Lipstick</a
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

              <!-- Product 12 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/sheer/Mac Flirty Sheen.jpg"
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
                      <a href="product-detail.html?id=94" class="card-title"
                        >Mac Flirty Sheen Lipstick</a
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

              <!-- Product 13 -->
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

              <!-- Product 14 -->
              <li class="scrollbar-item">
                <div class="shop-card">
                  <div
                    class="card-banner img-holder"
                    style="--width: 540; --height: 720"
                  >
                    <img
                      src="images/creamy/Maybelline Soft Cream.jpg"
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
                      <a href="product-detail.html?id=89" class="card-title"
                        >Maybelline Soft Cream</a
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
                      src="images/sheer/Maybelline Delicate Dream.jpg"
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
                      <a href="product-detail.html?id=93" class="card-title"
                        >Maybelline Delicate Dream Lipstick</a
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
