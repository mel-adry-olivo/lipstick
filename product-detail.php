<?php

session_start();
require './includes/product.php';

$conn = new mysqli('localhost', 'root', '', 'lipstick');
if ($conn->connect_error) {
    exit("Connection failed: " . $conn->connect_error);
}

// get lipstick id from query parameters
if(isset($_GET['id'])) {
	$id = $_GET['id'];

  $lipstickSql = "
  SELECT 
      lipsticks.*,
      brands.name AS brand_name,
      categories.name AS category_name,
      GROUP_CONCAT(colors.name SEPARATOR ', ') AS color_names,
      GROUP_CONCAT(colors.hex_code SEPARATOR ', ') AS color_hex_codes,
      ROUND(AVG(reviews.rating), 1) AS average_rating
  FROM lipsticks
  JOIN brands ON lipsticks.brand_id = brands.id
  JOIN categories ON lipsticks.category_id = categories.id
  JOIN lipstick_colors ON lipsticks.id = lipstick_colors.lipstick_id
  JOIN colors ON lipstick_colors.color_id = colors.id
  LEFT JOIN reviews ON lipsticks.id = reviews.lipstick_id 
  WHERE lipsticks.id = $id
  GROUP BY lipsticks.id";

  $result = $conn->query($lipstickSql);
	$lipstick = $result->fetch_assoc();
}

// if user clicked submit review
if(isset($_POST['submit-review']) && isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];
	$lipstick_id = $lipstick['id'];
	$rating = $_POST['rating'];
	$review = $_POST['review-text'];

  $sql = "INSERT INTO reviews (lipstick_id, user_id, rating, review_text) VALUES ($lipstick_id, $user_id, $rating, '$review')";
  $conn->query($sql);

	header('Location: ./product-detail.php?id=' . $lipstick_id);
	exit();
}

// if user clicked delete review
if(isset($_POST['delete-review']) && isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];
	$lipstick_id = $lipstick['id'];
	$review_id = $_POST['review-id'];

	$sql = "DELETE FROM reviews WHERE id = $review_id";
  $conn->query($sql);

	header('Location: ./product-detail.php?id=' . $lipstick_id);
	exit();
}

// get related products
$brand_name = $lipstick['brand_name'] ?? '';
$lipsticksByBrandSql = "
SELECT 
    lipsticks.*,
    brands.name AS brand_name,
    categories.name AS category_name,
    GROUP_CONCAT(colors.name SEPARATOR ', ') AS color_names,
    GROUP_CONCAT(colors.hex_code SEPARATOR ', ') AS color_hex_codes,
    ROUND(AVG(reviews.rating), 1) AS average_rating
FROM lipsticks
JOIN brands ON lipsticks.brand_id = brands.id
JOIN categories ON lipsticks.category_id = categories.id
JOIN lipstick_colors ON lipsticks.id = lipstick_colors.lipstick_id
JOIN colors ON lipstick_colors.color_id = colors.id
LEFT JOIN reviews ON lipsticks.id = reviews.lipstick_id 
WHERE brands.name = '$brand_name'
GROUP BY lipsticks.id
ORDER BY RAND()
";

$lipsticksByBrandSqlResult = $conn->query($lipsticksByBrandSql);
$lipsticksByBrand = $lipsticksByBrandSqlResult->fetch_all(MYSQLI_ASSOC);


// get reviews
$lipstick_id = $lipstick['id'];
$reviewsSql = "
  SELECT  
        reviews.id as id,
        reviews.lipstick_id,
        users.id as user_id,
        users.username as username,
        reviews.rating,
        reviews.review_text
    FROM reviews 
    JOIN users ON reviews.user_id = users.id
    WHERE lipstick_id = $lipstick_id
    ORDER BY created_at DESC"; 
    $reviewsResult = $conn->query($reviewsSql);

$reviews = $reviewsResult->fetch_all(MYSQLI_ASSOC);  

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
          <img id="product-image" src="<?php echo $lipstick['image_url']; ?>" alt="Product Image" />
        </div>
        <div class="product-info">
          <h2 id="product-name"><?php echo $lipstick['name']; ?></h2>
          <p id="product-description"><?php echo $lipstick['description']; ?></p>
          <p id="product-price">₱<?php echo $lipstick['price']; ?></p>
          <p id="product-review-count"></p>
          <div class="available-colors">
            <h4>Available Colors:</h4>
            <div id="color-options">
            </div>
          </div>
		  <form action="./cart.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $lipstick['id']; ?>">
			<button class="add-to-cart-btn" name="cart" type="submit">
				Add to cart
			</button>
		  </form>
        </div>
      </section>
      <section class="reviews" id="reviews">
        <h3>Customer Reviews</h3>
        <div id="reviews-container">		
          <?php if(!empty($reviews)) : ?>
            <?php foreach ($reviews as $review) : ?>
				<div class="review-item">
					<div class="text-wrapper">
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
						<p class="review-text"><strong><?php echo $review['username']; ?>:</strong> <?php echo $review['review_text']; ?></p>
					</div>
					<?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $review['user_id']) : ?>
						<form action="./product-detail.php?id=<?php echo $lipstick['id']; ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this review?')">
							<input type="hidden" name="review-id" value="<?php echo $review['id']; ?>">
							<button name="delete-review" >Delete Review</button>
						</form>
					<?php endif; ?>
          		</div>
          	<?php endforeach; ?>
          <?php else : ?>
            <p>No reviews yet.</p>
          <?php endif; ?>
        </div>
        <h4>Add a Review</h4>
        <form action="./product-detail.php?id=<?php echo $lipstick['id']; ?>" id="review-form" method="POST">
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
            <?php foreach($lipsticksByBrand as $lipstick) {
              render_product($lipstick); 
            }?>
          </ul>
        </div>
      </section>
    </main>
    <?php include './includes/footer.php'?>
    <script src="js/script.js" defer></script>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" type="module"></script>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" nomodule></script>
  </body>
</html>
