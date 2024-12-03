<?php
session_start();
require './includes/db.php';
require './includes/product.php';

$allproducts = allproducts();
$allbrands = allbrands();
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
        <section class="section brands" id="brands" data-section>
          <div class="container">
            <h2 class="h2.1 section-title">Lipstick Brands</h2>
            <ul class="brands-list">
              <?php foreach ($allbrands as $brand) { ?>
              <li class="brands-item">
                <a href="./catalog-products.php?brand_name=<?php echo $brand['name']; ?>" class="brands-link">
                  <img
                    src="<?php echo $brand['image_url']; ?>"
                    width="100"
                    height="100"
                    loading="lazy"
                    alt="<?php $brand['name']?> Logo"
                    class="brands-logo"
                  />
                </a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </section>
        <section class="section shop" id="all-products" data-section>
          <div class="container">
            <div class="title-wrapper">
              <h2 class="h2.1 section-title">Products</h2>

              <div class="sort-by">
                <span>Sort by:</span>
                <select>
                  <option value="price-asc">Price: Low to High</option>
                  <option value="price-desc">Price: High to Low</option>
                  <option value="name-asc">Name: A to Z</option>
                  <option value="name-desc">Name: Z to A</option>
                </select>
              </div>
            </div>
            <ul class="has-scrollbar has-scrollbar-disabled">
              <?php foreach ($allproducts as $product) {
                render_product($product);
              }?>
            </ul>
          </div>
        </section>
      </article>
    </main>
    <?php include './includes/footer.php'?>
    <script src="js/script.js" defer></script>
    <script src="js/all-products.js" defer></script>
    <script src="js/add-cart.js" defer></script>
    <script src="js/favorites.js" defer></script>
    <script src="js/sort.js""></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
