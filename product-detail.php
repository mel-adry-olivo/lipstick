<?php

session_start();
require './includes/db.php';
require './includes/product.php';

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $product = productById($id);
}

if(isset($_POST['submit-review']) && isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
  $product_id = $product['id'];
  $rating = $_POST['rating'];
  $review = $_POST['review-text'];

  addReview($product_id,$user_id, $rating, $review);
  header('Location: ./product-detail.php?id=' . $product_id);
  exit();
}


$brand = allBrandProducts($product['brand_name']);
$reviews = allReviews($product['id']);

?>

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
    <link rel="stylesheet" href="css/product-detail.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  </head>
  <body id="top">
    <?php include './includes/header.php'?>
    <main>
      <section class="product-details" id="product-details">
        <div class="product-image-container">
          <img id="product-image" src="<?php echo $product['image_url']; ?>" alt="Product Image" />
        </div>
        <div class="product-info">
          <h2 id="product-name"><?php echo $product['name']; ?></h2>
          <p id="product-description"><?php echo $product['description']; ?></p>
          <p id="product-price">₱<?php echo $product['price']; ?></p>
          <p id="product-review-count"></p>
          <div class="available-colors">
            <h4>Available Colors:</h4>
            <div id="color-options">
            </div>
          </div>
          <button class="add-to-cart-btn">Add to Cart</button>
        </div>
      </section>
      <section class="reviews" id="reviews">
        <h3>Customer Reviews</h3>
        <div id="reviews-container">
          <?php foreach ($reviews as $review) : ?>
          <div class="review-item">
          <div class="review-rating">
            <?php
              for ($i = 1; $i <= $review['rating']; $i++) {
                  echo '★';
              }
              for ($i = $review['rating'] + 1; $i <= 5; $i++) {
                  echo '☆'; 
              }
              ?>
          </div>
            <p><strong><?php echo $review['username']; ?>:</strong> <?php echo $review['review_text']; ?></p>
          </div>
          <?php endforeach; ?>
        </div>
        <h4>Add a Review</h4>
        <form action="./product-detail.php?id=<?php echo $product['id']; ?>" id="review-form" method="POST">
          <div id="rating-container">
            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
              <option value="">Select rating</option>
              <option value="1">1 Star</option>
              <option value="2">2 Stars</option>
              <option value="3">3 Stars</option>
              <option value="4">4 Stars</option>
              <option value="5">5 Stars</option>
            </select>
          </div>
          <textarea
            name = "review-text"
            id = "review-input"
            placeholder = "Write your review here..."
            required
          ></textarea>
          <button type="submit" name="submit-review">Submit Review</button>
        </form>
      </section>
      <section class="related-products" id="related-products">
        <h3>Related Products</h3>
        <div class="container">
          <ul class="has-scrollbar" id="related-products-list">
            <?php foreach($brand as $product) {
              render_product($product); 
            }?>
          </ul>
        </div>
      </section>
    </main>
    <?php include './includes/footer.php'?>
    <script src="js/script.js" defer></script>
    <script src="js/product-details.js" defer></script>
    <script src="js/add-cart.js" defer></script>
    <script src="js/favorites.js" defer></script>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" type="module"></script>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" nomodule></script>
  </body>
</html>
