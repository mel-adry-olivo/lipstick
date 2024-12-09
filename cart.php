<?php
session_start();
require './includes/product.php';

$conn = new mysqli('localhost', 'root', '', 'lipstick');
if ($conn->connect_error) {
    exit("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['cart']) && isset($_SESSION['user_id'])) {

    $user_id = $_SESSION['user_id'];
    $product_id = $_POST['id'];
    
    $insertSql = "INSERT INTO user_cart (user_id, lipstick_id) VALUES ($user_id, $product_id)";
    $conn->query($insertSql);
}

if(isset($_POST['delete']) && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = $_POST['id'];

    $removeSql = "DELETE FROM user_cart WHERE user_id = $user_id AND lipstick_id = $product_id";
    $conn->query($removeSql);
    header('Location: ./cart.php');
    exit();
}

$cart = [];
$total = 0;

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];

    $cartSql = "
    SELECT 
      lipsticks.*,
      brands.name AS brand_name,
      GROUP_CONCAT(colors.name SEPARATOR ', ') AS color_names,
      GROUP_CONCAT(colors.hex_code SEPARATOR ', ') AS color_hex_codes,
      ROUND(AVG(reviews.rating), 1) AS average_rating
    FROM user_cart
    JOIN lipsticks ON user_cart.lipstick_id = lipsticks.id
    JOIN brands ON lipsticks.brand_id = brands.id
    JOIN lipstick_colors ON lipsticks.id = lipstick_colors.lipstick_id
    JOIN colors ON lipstick_colors.color_id = colors.id
    LEFT JOIN reviews ON lipsticks.id = reviews.lipstick_id
    WHERE user_cart.user_id = $user_id 
    GROUP BY lipsticks.id";

    $cartRes = $conn->query($cartSql);
    $cartProducts = $cartRes->fetch_all(MYSQLI_ASSOC);

    $total = 0;

    foreach($cartProducts as $product) {
        $total += intval($product['price']);
    }
 
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
              <h2 class="h2 section-title">Cart</h2>
            </div>
            <ul class="has-scrollbar has-scrollbar-disabled">
            <?php 
                if(isset($_SESSION['user_id'])) {
                    if(count($cartProducts) > 0) {
                        foreach($cartProducts as $pd) {
                                render_product($pd);
                        }
                        
                    } else {
                        echo '<p class="no-products">You have no cart products yet.</p>';
                    }
                } else {
                    echo '<p class="no-products">You need to login first.</p>';
                }
              ?>
            </ul>
          </div>
        </section>
        <?php if(isset($_SESSION['user_id'])) :?>
            <form action="./reserve.php" method="post" class="reserve-form">
              <p>Total: $<?php echo $total; ?></p>
              <button type="submit" class="btn btn-primary" name="reserve">Reserve</button>
            </form>
          <?php endif; ?>
      </article>
    </main>
    <?php include './includes/footer.php'?>
    <script src="js/script.js" defer></script>
    <script src="js/sort.js""></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
