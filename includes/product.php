<?php


function render_product($lipstick) {
    
    $inCart = $_SERVER['REQUEST_URI'] == '/lipstick/cart.php';
    $inFavorites = $_SERVER['REQUEST_URI'] == '/lipstick/favorites.php';
    $action = $inCart ? './cart.php' : './favorites.php';
    ?>
    <li class="scrollbar-item">
        <div class="shop-card">
            <?php if($inCart || $inFavorites) :?>
                <form action="<?php echo $action; ?>" method="POST">
                    <input type="hidden" name="id" value="<?php echo $lipstick['id']; ?>">
                    <button class="action-btn" name="delete" type="submit" onclick="return confirm('Are you sure you want to delete?')">
                        Delete
                    </button>
                </form>
            <?php endif; ?>
            <div class="card-banner img-holder" style="--width: 540; --height: 720">
                <img src="<?php echo $lipstick['image_url']; ?>" width="540" height="720" loading="lazy" alt="Cherry Red Lipstick" class="img-cover"/>
                <div class="card-actions">
                    <form action="./cart.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $lipstick['id']; ?>">
                        <button class="action-btn" name="cart" type="submit">
                            <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        </button>
                    </form>
                    <form action="./favorites.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $lipstick['id']; ?>">
                        <button class="action-btn" name="favorites" type="submit">
                            <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                        </button>
                    </form>
                </div>
            </div>
            <div class="card-content">
                <div class="price">
                    <span class="span">₱<?php echo $lipstick['price']; ?></span>
                </div>
                <h3>
                    <a href="./product-detail.php?id=<?php echo $lipstick['id']; ?>" class="card-title"><?php echo $lipstick['name']; ?> Lip</a>
                </h3>
                <div class="card-rating">
                    <div class="rating-wrapper" aria-label="<?php echo $lipstick['average_rating']; ?>-star rating">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $lipstick['average_rating']) {
                                echo '<ion-icon name="star" aria-hidden="true"></ion-icon>';
                            } else {
                                echo '<ion-icon name="star-outline" aria-hidden="true"></ion-icon>';
                            }
                        }
                        ?>
                    </div>
                    <p class="rating-text"><?php echo $lipstick['average_rating']; ?> reviews</p>
                </div>
                <div class="color-shades">
                    <h4 class="color-title">Available Colors:</h4>
                    <div class="color-options">
                        <?php
                        // Split the color names and hex codes into arrays
                        $color_names = explode(', ', $lipstick['color_names']);
                        $color_hex_codes = explode(', ', $lipstick['color_hex_codes']);

                        // Loop through each color and display it
                        foreach ($color_names as $index => $color_name) :
                            $hex_code = isset($color_hex_codes[$index]) ? $color_hex_codes[$index] : '#000000'; // Fallback if hex is missing
                        ?>
                            <div class="color-swatch-container">
                                <span class="color-swatch" style="background-color: <?php echo $hex_code; ?>" aria-label="<?php echo $color_name; ?>"></span>
                                <span class="color-tooltip"><?php echo $color_name; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <?php
}
?>
