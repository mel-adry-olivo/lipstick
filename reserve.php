<?php
session_start();
require './includes/db.php';
require './includes/product.php';

if(isset($_POST['reserve']) && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    reserve($user_id);
}

if(isset($_POST['delete']) && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = $_POST['id'];
    removeReserve($user_id, $product_id);
    header('Location: ./reserve.php');
    exit();
}

if(isset($_SESSION['user_id'])) {
    $reserves = getReserves($_SESSION['user_id']);
}

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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  </head>
  <body id="top">
    <?php include './includes/header.php'; ?>
    <main>
      <article>
        <section class="section shop" id="all-products" data-section>
          <div class="container">
            <div class="title-wrapper">
              <h2 class="h2 section-title">Reservations</h2>
            </div>
            <ul class="has-scrollbar has-scrollbar-disabled">
                <?php 
                    if(isset($_SESSION['user_id'])) {
                        if(count($reserves) > 0) {
                            foreach($reserves as $pd) {
                                    render_product($pd);
                            }
                            
                        } else {
                            echo '<p class="no-products">You have no reservations yet.</p>';
                        }
                    } else {
                        echo '<p class="no-products">You need to login first.</p>';
                    }
                ?>
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
