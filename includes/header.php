<header class="header">
    <div class="alert">
        <div class="container">
            <p class="alert-text">
            Free Shipping: Local Orders Over P999 & International Orders: Asia P10,000,
            US/Canada/Australia P15,000
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
                <input type="search" name="search" placeholder="Search product" class="search-field" />
                <button class="search-submit" aria-label="search">
                    <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
                </button>
            </div>
            <a href="#" class="logo">
                <img src="images/logo.png" width="179" height="26" alt="Glowing" />
            </a>
            <div class="header-actions">
              <p><?php echo isset($_SESSION['user_id']) ?  'Hello, ' . $_SESSION['username'] : '';?></p>
                <a href="<?php echo isset($_SESSION['user_id']) ? './logout.php' : './login.php'; ?> ">
                    <button class="header-action-btn" aria-label="user">
                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                    </button>
                </a>
                <a href="./favorites.php" class="header-action-btn" id="favourites-icon" aria-label="favourite item">
                    <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    <!-- <span class="btn-badge">0</span> -->
                </a>
                <a href="./cart.php" class="header-action-btn" id="cart-icon" aria-label="cart item">
                    <data class="btn-text" value="0">$0.00</data>
                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    <!-- <span class="btn-badge">0</span> -->
                </a>
            </div>
        </div>
    </div>
    <nav class="navbar">
        <ul class="navbar-list">
            <li>
                <a href="./index.php" class="navbar-link has-after">Home</a>
            </li>
            <li>
                <a href="./collection.php" class="navbar-link has-after">Collections</a>
            </li>
            <li class="dropdown">
                <a href="./all-products.php" class="navbar-link has-after dropdown-toggle" aria-haspopup="true" aria-expanded="false">Shop</a>
                <ul class="dropdown-menu landscape">
                    <li>
                        <a href="./catalog-products.php?category_name=matte" class="dropdown-link">Matte</a>
                    </li>
                    <li>
                        <a href="./catalog-products.php?category_name=satin" class="dropdown-link">Satin</a>
                    </li>
                    <li>
                        <a href="./catalog-products.php?category_name=creamy" class="dropdown-link">Creamy</a>
                    </li>
                    <li>
                        <a href="./catalog-products.php?category_name=sheer" class="dropdown-link">Sheer</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="./about.php" class="navbar-link has-after">About Us</a>
            </li>
        </ul>
    </nav>
    <!-- <div class="cart-overlay" id="cart-overlay">
        <div class="cart-header">
            <h2>Your Cart</h2>
            <button class="close-cart-btn" id="close-cart-btn">&times;</button>
        </div>
        <div class="cart-content">
            <p id="cart-message">Your cart is currently empty.</p>
            <button class="continue-shopping-btn" id="continue-shopping">Continue Shopping</button>
            <button class="checkout-btn" id="checkout-btn" style="display: none">Checkout</button>
        </div>
    </div>
    <div class="favourites-overlay" id="favourites-overlay">
        <div class="favourites-header">
            <h2>Your Favourites</h2>
            <button class="close-favourites-btn" id="close-favourites-btn">&times;</button>
        </div>
        <div class="favourites-content">
            <p id="favourites-message">You have no favourites yet.</p>
            <button class="continue-shopping-btn" id="continue-shopping">Continue Shopping</button>
        </div>
    </div> -->
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
          <a href="#collection" class="navbar-link" data-nav-link>New Collection</a>
        </li>
        <li class="dropdown">
          <a href="#shop" class="navbar-link dropdown-toggle" data-nav-link>Shop</a>
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
</header>