<?php
session_start();
require './includes/db.php';
require './includes/product.php';

if(!isset($_SESSION['user_id'])) {
    header('Location: ./login.php');
    exit();
}

$products = allProducts();

if(isset($_POST['delete'])) {
    $product_id = $_POST['id'];
    deleteLipstick($product_id);
    header('Location: ./manage-products.php');
    exit();
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
    <link rel="stylesheet" href="css/manage.css">
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
              <h2 class="h2 section-title">Manage Products</h2>
              <a href="./add-product.php" class="btn btn-primary">Add Product</a>
            </div>
            <table class="product-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Category</th>
                    <th>Colors</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['brand_name']; ?></td>
                    <td><?php echo $product['category_name']; ?></td>
                    <td>
                    <?php
                        $color_names = explode(', ', $product['color_names']);
                        $color_hex_codes = explode(', ', $product['color_hex_codes']);

                        foreach ($color_names as $index => $color_name) :
                            $hex_code = isset($color_hex_codes[$index]) ? $color_hex_codes[$index] : '#000000'; 
                        ?>
                            <div class="color-swatch-container">
                                <span class="color-swatch" style="background-color: <?php echo $hex_code; ?>" aria-label="<?php echo $color_name; ?>"></span>
                                <span class="color-tooltip"><?php echo $color_name; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </td>
                    <td>$<?php echo number_format($product['price'], 2); ?></td>
                    <td>
                        <a href="./edit-product.php?id=<?php echo $product['id']; ?>" class="action-btn">Edit</a>
                        <form action="./manage-products.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                            <input type="hidden" name="action" value="delete">
                            <button type="submit" class="action-btn" name="delete" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                        </form>
                    </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
          </div>
        </section>
      </article>
    </main>
    <?php include './includes/footer.php'?>
    <script src="js/script.js" defer></script>
    <script src="js/sort.js""></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
