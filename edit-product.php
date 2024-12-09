<?php
session_start();
require './includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: ./login.php');
    exit();
}

if (!isset($_GET['id'])) {
    header('Location: ./all-products.php');
    exit();
}

$product_id = $_GET['id'];
$product = productById($product_id);
$brands = allBrands();
$categories = allCategories();
$colors = allColors();

$existing_color_ids = lipstickColorsIds($product_id);

var_dump($existing_color_ids);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $brand_id = intval($_POST['brand_id']);
    $category_id = intval($_POST['category_id']);
    $description = $_POST['description'];
    $price = floatval($_POST['price']);
    $image_url = $_POST['image_url'];
    $selected_colors = $_POST['colors'];

    updateLipstick($product_id, $name, $description, $price, $image_url, $brand_id, $category_id);
    updateLipstickColors($product_id, $selected_colors);

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
<body>
    <?php include './includes/header.php'; ?>
    <main>
        <article>
            <section class="section shop" id="all-products" data-section>
                <div class="container">
                        <div class="title-wrapper">
                        <h2 class="h2 section-title">Edit Product</h2>
                    </div>
                    <form action="" method="post" class="edit-form">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="brand_id">Brand</label>
                            <select id="brand_id" name="brand_id" required>
                                <?php foreach ($brands as $brand): ?>
                                    <option value="<?php echo $brand['id']; ?>" <?php echo $product['brand_id'] == $brand['id'] ? 'selected' : ''; ?>>
                                        <?php echo $brand['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select id="category_id" name="category_id" required>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?php echo $category['id']; ?>" <?php echo $product['category_id'] == $category['id'] ? 'selected' : ''; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" rows="5" required><?php echo $product['description']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" id="price" name="price" value="<?php echo $product['price']; ?>" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <label for="image_url">Image URL</label>
                            <input type="text" id="image_url" name="image_url" value="<?php echo $product['image_url']; ?>" placeholder="Ex: ./images/matte/NARS Velvet Touch.jpg">
                        </div>
                        <div class="form-group">
                            <label for="colors">Colors (hold ctrl for multiple selection)</label>
                            <select id="colors" name="colors[]" multiple required>
                                <?php foreach ($colors as $color): ?>
                                    <option value="<?php echo $color['id']; ?>"<?php echo in_array($color['id'], $existing_color_ids) ? 'selected' : ''; ?>>
                                        <?php echo $color['name']; ?> (<?php echo $color['hex_code']; ?>)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary" name='update'>Update Product</button>
                            <a href="./manage-products.php" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </section>
        </article>        
    </main>
    <?php include './includes/footer.php'; ?>
    <script src="js/script.js" defer></script>
    <script src="js/sort.js""></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>