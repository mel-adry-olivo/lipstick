<?php

session_start();

if(isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header('Location: ./index.php');
}

$isAdmin = false;
if(isset($_SESSION['user_id'])) {

  if($_SESSION['username'] === 'admin') {
    $isAdmin = true;
  }
  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Artemis Beauty Code</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/add-cart.css" />
    <link rel="stylesheet" href="css/favorites.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  </head>
  <body id="top">
    <?php include './includes/header.php'?>
    <main>
      <div class="login-container">
        <h1>Profile</h1>
        <?php if($isAdmin) : ?>
        <form action="./manage-products.php">
          <button type="submit">Manage Products</button>
        </form>
        <?php endif; ?>
        <form action="./reserve.php" method="POST">
          <button type="submit">Reservations</button>
        </form>
        <form action="./profile.php" method="POST" id="login-form">
          <button type="submit" name="logout">Logout</button>
        </form>
      </div>
    </main>
    <?php include './includes/footer.php'?>
    <script src="js/script.js" defer></script>
    <script src="js/login.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
