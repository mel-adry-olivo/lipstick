<?php
session_start();
require './includes/product.php';

$conn = new mysqli('localhost', 'root', '', 'lipstick');
if ($conn->connect_error) {
    exit("Connection failed: " . $conn->connect_error);
}

// get all lipsticks that are in a collection
$collectionsSql = "
  SELECT 
      lipsticks.*,
      brands.name AS brand_name,
      categories.name AS category_name,
      collections.name AS collection,
      collections.id AS collection_id,
      GROUP_CONCAT(colors.name SEPARATOR ', ') AS color_names,
      GROUP_CONCAT(colors.hex_code SEPARATOR ', ') AS color_hex_codes,
      ROUND(AVG(reviews.rating), 1) AS average_rating
  FROM lipsticks
  JOIN brands ON lipsticks.brand_id = brands.id
  JOIN categories ON lipsticks.category_id = categories.id
  JOIN lipstick_colors ON lipsticks.id = lipstick_colors.lipstick_id
  JOIN colors ON lipstick_colors.color_id = colors.id
  LEFT JOIN reviews ON lipsticks.id = reviews.lipstick_id 
  JOIN collections ON lipsticks.collection_id = collections.id  
  WHERE lipsticks.collection_id IN (1, 2, 3)
  GROUP BY lipsticks.id
";

$collectionsResult = $conn->query($collectionsSql);
$collections = [];

// Group lipsticks by their collection ID
while($collection = $collectionsResult->fetch_assoc()) {
    $collections[$collection['collection_id']][] = $collection;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artemis - Beauty Code | Collection</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/collection.css" />
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
    <section class="section shop" id="shop" aria-label="shop" data-section>
      <div class="container">
        <div class="title-wrapper">
          <h2 class="h2.1 section-title">Our Collections</h2>
          <a href="./all-products.php" id="shopNowButton1" class="btn-link">
            <span class="span">Shop All Products</span>
            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
          </a>
        </div>
        <?php foreach($collections as $collectionKey => $collection) : ?>
          <h2 class="h2 section-title" id="collection<?php echo $collectionKey ?>"><?php echo $collection[0]['collection'] ?></h2>
          <ul class="has-scrollbar">
          <?php foreach($collection as $product) : ?>
            <?php render_product($product); ?>
          <?php endforeach; ?>
          </ul>
        <?php endforeach; ?>
    </section>s
    <?php include './includes/footer.php'?>
    <script src="js/script.js" defer></script>
    <script src="js/collection.js" defer></script>
    <script src="js/add-cart.js" defer></script>
    <script src="js/favorites.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
