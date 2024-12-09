<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ./login.php');
    exit();
}

$conn = new mysqli('localhost', 'root', '', 'lipstick');
if ($conn->connect_error) {
    exit("Connection failed: " . $conn->connect_error);
}

$brandsSql = "SELECT * FROM brands";
$brandsResult = $conn->query($brandsSql);

$categoriesSql = "SELECT * FROM categories";
$categoriesResult = $conn->query($categoriesSql);

$colorsSql = "SELECT * FROM colors";
$colorsResult = $conn->query($colorsSql);

$brands = $brandsResult->fetch_all(MYSQLI_ASSOC);
$categories = $categoriesResult->fetch_all(MYSQLI_ASSOC);
$colors = $colorsResult->fetch_all(MYSQLI_ASSOC);

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $brand_id = intval($_POST['brand_id']);
    $category_id = intval($_POST['category_id']);
    $description = $_POST['description'];
    $price = floatval($_POST['price']);
    $image_url = $_POST['image_url'];
    $selected_colors = $_POST['colors'];


    $insertSql = "
        INSERT INTO lipsticks (name, description, price, image_url, brand_id, category_id) 
        VALUES ('$name', '$description', $price, '$image_url', $brand_id, $category_id)";
    $conn->query($insertSql);
    $newId = $conn->insert_id;
    
    foreach ($selected_colors as $color) {
        $insertColorSql = "INSERT INTO lipstick_colors (lipstick_id, color_id) VALUES ($newId, $color)";
        $conn->query($insertColorSql);
    }
    
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
    <title>Artemis - Beauty Code | Add Product</title>
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
            <section class="section shop" id="add-product" data-section>
                <div class="container">
                    <div class="title-wrapper">
                        <h2 class="h2 section-title">Add New Product</h2>
                    </div>
                    <?php if (isset($error)): ?>
                        <p class="error"><?php echo $error; ?></p>
                    <?php endif; ?>
                    <form action="" method="post" class="edit-form">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="brand_id">Brand</label>
                            <select id="brand_id" name="brand_id" required>
                                <?php foreach ($brands as $brand): ?>
                                    <option value="<?php echo $brand['id']; ?>"><?php echo $brand['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select id="category_id" name="category_id" required>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" id="price" name="price" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <label for="image_url">Image URL</label>
                            <input type="text" id="image_url" name="image_url" placeholder="Ex: ./images/matte/NARS Velvet Touch.jpg">
                        </div>
                        <div class="form-group">
                            <label for="colors">Colors (hold ctrl for multiple selection)</label>
                            <select id="colors" name="colors[]" multiple required>
                                <?php foreach ($colors as $color): 
                                        $colorName = $color['name'];
                                        $colorId = $color['id'];
                                        $hexCode = $color['hex_code'];

                                        $optionText = "$colorName ($hexCode)" ;
                                    ?>
                                    <option value="<?php echo $colorId; ?>">
                                        <?php echo $optionText; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary" name="add">Add Product</button>
                            <a href="./manage-products.php" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </section>
        </article>        
    </main>
    <?php include './includes/footer.php'; ?>
    <script src="js/script.js" defer></script>
    <script src="js/sort.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
