<?php 

function signUp($username, $password) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    return $conn->query($sql);
}

function login($username, $password) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

function allReviews($id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "
    SELECT  
        reviews.id as id,
        reviews.lipstick_id,
        users.id as user_id,
        users.username as username,
        reviews.rating,
        reviews.review_text
    FROM reviews 
    JOIN users ON reviews.user_id = users.id
    WHERE lipstick_id = $id
    ORDER BY created_at DESC"; 
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);    
}

function addReview($lipstick_id, $user_id, $rating, $review_text) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO reviews (lipstick_id, user_id, rating, review_text) VALUES ($lipstick_id, $user_id, $rating, '$review_text')";
    if(!$conn->query($sql)) {
        echo "Error: " . $conn->error;
    }
}

function deleteReview($id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM reviews WHERE id = $id";
    if(!$conn->query($sql)) {
        echo "Error: " . $conn->error;
    }
}

function productById($id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "
    SELECT 
        l.*,
        b.name AS brand_name, 
        c.name AS category_name,
        GROUP_CONCAT(col.name SEPARATOR ', ') AS color_names,
        GROUP_CONCAT(col.hex_code SEPARATOR ', ') AS color_hex_codes,
        COALESCE(ROUND(AVG(r.rating), 1), 0) AS average_rating
    FROM lipsticks l
    JOIN brands b ON l.brand_id = b.id
    JOIN categories c ON l.category_id = c.id
    JOIN lipstick_colors lc ON l.id = lc.lipstick_id
    JOIN colors col ON lc.color_id = col.id
    LEFT JOIN reviews r ON l.id = r.lipstick_id
    WHERE l.id = $id
    GROUP BY l.id
    ORDER BY average_rating DESC;
    ";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

function under500products() {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "
      SELECT 
          l.id, 
          l.name, 
          l.image_url, 
          l.price, 
          GROUP_CONCAT(c.name SEPARATOR ', ') AS color_names,
          GROUP_CONCAT(c.hex_code SEPARATOR ', ') AS color_hex_codes,
          COALESCE(ROUND(AVG(r.rating)), 0) AS average_rating
      FROM lipsticks l
      JOIN lipstick_colors lc ON l.id = lc.lipstick_id
      JOIN colors c ON lc.color_id = c.id
      LEFT JOIN reviews r ON l.id = r.lipstick_id 
      WHERE l.price < 500
      GROUP BY l.id
      LIMIT 5
      ";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);    
}

function offeredProduct() {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

        $offerSql = "
    SELECT 
        l.id, 
        l.name, 
        l.description,
        l.image_url, 
        l.price
    FROM lipsticks l
    WHERE l.id = 15
    ";

    $offerResult = $conn->query($offerSql);
    return $offerResult->fetch_all(MYSQLI_ASSOC)[0];
}

function getReserves($user_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "
    SELECT 
        l.*,
        b.name AS brand_name, 
        GROUP_CONCAT(col.name SEPARATOR ', ') AS color_names,
        GROUP_CONCAT(col.hex_code SEPARATOR ', ') AS color_hex_codes,
        COALESCE(ROUND(AVG(r.rating), 1), 0) AS average_rating
    FROM user_reserves ur
    JOIN lipsticks l ON ur.lipstick_id = l.id
    JOIN brands b ON l.brand_id = b.id
    JOIN lipstick_colors lc ON l.id = lc.lipstick_id
    JOIN colors col ON lc.color_id = col.id
    LEFT JOIN reviews r ON l.id = r.lipstick_id
    WHERE ur.user_id = $user_id
    GROUP BY l.id
    ORDER BY average_rating DESC";

    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function removeReserve($user_id, $product_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $delete_query = "DELETE FROM user_reserves WHERE user_id = $user_id AND lipstick_id = $product_id;";
    if ($conn->query($delete_query)) {
        echo "Reserve removed successfully.";
    } else {
        echo "Error removing reserve: " . $conn->error;
    }
}

function reserve($user_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $insert_query = "
    INSERT INTO user_reserves (user_id, lipstick_id, added_at)
    SELECT user_id, lipstick_id, added_at
    FROM user_cart WHERE user_id = $user_id;
    ";

    if ($conn->query($insert_query) === TRUE) {
        $delete_query = "DELETE FROM user_cart WHERE user_id = $user_id;";
        if ($conn->query($delete_query)) {
            echo "All cart items removed successfully.";
        } else {
            echo "Error deleting cart items: " . $conn->error;
        }
    } else {
        echo "Error transferring items: " . $conn->error;
    }
}

function allProducts() {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }   

    $sql = "
    SELECT 
        l.*,
        b.name AS brand_name, 
        c.name AS category_name,
        GROUP_CONCAT(col.name SEPARATOR ', ') AS color_names,
        GROUP_CONCAT(col.hex_code SEPARATOR ', ') AS color_hex_codes,
        COALESCE(ROUND(AVG(r.rating), 1), 0) AS average_rating
    FROM lipsticks l
    JOIN brands b ON l.brand_id = b.id
    JOIN categories c ON l.category_id = c.id
    JOIN lipstick_colors lc ON l.id = lc.lipstick_id
    JOIN colors col ON lc.color_id = col.id
    LEFT JOIN reviews r ON l.id = r.lipstick_id
    GROUP BY l.id
    ";
  $result = $conn->query($sql);
  return $result->fetch_all(MYSQLI_ASSOC); 
}

function allColors() {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM colors";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function lipstickColorsIds($lipstick_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM lipstick_colors WHERE lipstick_id = $lipstick_id";
    $result = $conn->query($sql);

    $existing_color_ids = [];
    while ($row = $result->fetch_assoc()) {
        $existing_color_ids[] = $row['id'];
    }

    return $existing_color_ids;
}

function cartTotal($user_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }
    $sql = "
        SELECT sum(price) 
        FROM user_cart 
        JOIN lipsticks l ON user_cart.lipstick_id = l.id
        WHERE user_id = $user_id
        ";
    $result = $conn->query($sql);
    return $result->fetch_assoc()['sum(price)'];
}

function allBrandProducts($brandName) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "
    SELECT 
        l.id, 
        l.name, 
        l.description, 
        l.price, 
        l.image_url, 
        b.name AS brand_name, 
        c.name AS category_name,
        GROUP_CONCAT(col.name SEPARATOR ', ') AS color_names,
        GROUP_CONCAT(col.hex_code SEPARATOR ', ') AS color_hex_codes,
        COALESCE(ROUND(AVG(r.rating), 1), 0) AS average_rating
    FROM 
        lipsticks l
    JOIN 
        brands b ON l.brand_id = b.id
    JOIN 
        categories c ON l.category_id = c.id
    JOIN 
        lipstick_colors lc ON l.id = lc.lipstick_id
    JOIN 
        colors col ON lc.color_id = col.id
    LEFT JOIN 
        reviews r ON l.id = r.lipstick_id
    WHERE 
        b.name = '$brandName'
    GROUP BY 
        l.id
    ORDER BY 
        RAND()";

    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC); 

}

function addFavorites($user_id, $lipstick_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO user_favorites (user_id, lipstick_id) VALUES ($user_id, $lipstick_id)";
    $result = $conn->query($sql);
    return $result;
}

function addCart($user_id, $lipstick_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO user_cart (user_id, lipstick_id) VALUES ($user_id, $lipstick_id)";
    $result = $conn->query($sql);
    return $result;
}

function removeFavorites($user_id, $lipstick_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM user_favorites WHERE user_id = $user_id AND lipstick_id = $lipstick_id";
    $result = $conn->query($sql);
    return $result;
}

function removeFavorite($user_id, $lipstick_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM user_favorites WHERE user_id = $user_id AND lipstick_id = $lipstick_id";
    $result = $conn->query($sql);
    return $result;
}

function removeCart($user_id, $lipstick_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM user_cart WHERE user_id = $user_id AND lipstick_id = $lipstick_id";
    $result = $conn->query($sql);
    return $result;
}

function getCartTotal($user_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }
    $sql = "
    SELECT 
        SUM(l.price) AS total
    FROM 
        user_cart uc
    JOIN 
        lipsticks l ON uc.lipstick_id = l.id
    WHERE 
        uc.user_id = $user_id";
        
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getFavorites($user_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "
    SELECT 
        l.id, 
        l.name, 
        l.description, 
        l.price, 
        l.image_url, 
        b.name AS brand_name, 
        GROUP_CONCAT(col.name SEPARATOR ', ') AS color_names,
        GROUP_CONCAT(col.hex_code SEPARATOR ', ') AS color_hex_codes,
        COALESCE(ROUND(AVG(r.rating), 1), 0) AS average_rating
    FROM 
        user_favorites uf
    JOIN 
        lipsticks l ON uf.lipstick_id = l.id
    JOIN 
        brands b ON l.brand_id = b.id
    JOIN 
        lipstick_colors lc ON l.id = lc.lipstick_id
    JOIN 
        colors col ON lc.color_id = col.id
    LEFT JOIN 
        reviews r ON l.id = r.lipstick_id
    WHERE 
        uf.user_id = $user_id
    GROUP BY 
        l.id
    ORDER BY 
        average_rating DESC";

    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getCartProducts($user_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "
    SELECT 
        l.*,
        b.name AS brand_name, 
        GROUP_CONCAT(col.name SEPARATOR ', ') AS color_names,
        GROUP_CONCAT(col.hex_code SEPARATOR ', ') AS color_hex_codes,
        COALESCE(ROUND(AVG(r.rating), 1), 0) AS average_rating
    FROM user_cart uc
    JOIN lipsticks l ON uc.lipstick_id = l.id
    JOIN brands b ON l.brand_id = b.id
    JOIN lipstick_colors lc ON l.id = lc.lipstick_id
    JOIN colors col ON lc.color_id = col.id
    LEFT JOIN reviews r ON l.id = r.lipstick_id
    WHERE uc.user_id = $user_id
    GROUP BY l.id
    ORDER BY average_rating DESC";

    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function allCategoryProducts($categoryName) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "
    SELECT 
        l.id, 
        l.name, 
        l.description, 
        l.price, 
        l.image_url, 
        b.name AS brand_name, 
        c.name AS category_name,
        GROUP_CONCAT(col.name SEPARATOR ', ') AS color_names,
        GROUP_CONCAT(col.hex_code SEPARATOR ', ') AS color_hex_codes,
        COALESCE(ROUND(AVG(r.rating), 1), 0) AS average_rating
    FROM 
        lipsticks l
    JOIN 
        brands b ON l.brand_id = b.id
    JOIN 
        categories c ON l.category_id = c.id
    JOIN 
        lipstick_colors lc ON l.id = lc.lipstick_id
    JOIN 
        colors col ON lc.color_id = col.id
    LEFT JOIN 
        reviews r ON l.id = r.lipstick_id
    WHERE 
        c.name = '$categoryName'
    GROUP BY 
        l.id
    ORDER BY 
        average_rating DESC";

    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC); 
}

function updateLipstick($lipstick_id, $name, $description, $price, $image_url, $brand_id, $category_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "
        UPDATE lipsticks 
        SET name = '$name', 
            description = '$description', 
            price = $price, 
            image_url = '$image_url', 
            brand_id = $brand_id, 
            category_id = $category_id 
        WHERE id = $lipstick_id";
    $conn->query($sql);
}

function updateLipstickColors($lipstick_id, $colors) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM lipstick_colors WHERE lipstick_id = $lipstick_id";
    $conn->query($sql);

    foreach ($colors as $color) {
        $sql = "INSERT INTO lipstick_colors (lipstick_id, color_id) VALUES ($lipstick_id, $color)";
        $conn->query($sql);
    }
}

function addLipstickColors($lipstick_id, $colors) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    foreach ($colors as $color) {
        $sql = "INSERT INTO lipstick_colors (lipstick_id, color_id) VALUES ($lipstick_id, $color)";
        $conn->query($sql);
    }
}

function deleteLipstick($lipstick_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM lipstick_colors WHERE lipstick_id = $lipstick_id";
    $conn->query($sql);

    $sql = "DELETE FROM lipsticks WHERE id = $lipstick_id";
    $conn->query($sql);
}

function addLipstick($name, $description, $price, $image_url, $brand_id, $category_id) {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "
        INSERT INTO lipsticks (name, description, price, image_url, brand_id, category_id) 
        VALUES ('$name', '$description', $price, '$image_url', $brand_id, $category_id)";
    $conn->query($sql);
    return $conn->insert_id;
}




function allBrands() {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM brands";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function allCategories() {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM categories";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}


function allCollections() {

    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql ="
    SELECT 
        l.id,  
        l.name, 
        l.image_url, 
        l.price, 
        GROUP_CONCAT(c.name SEPARATOR ', ') AS color_names,
        GROUP_CONCAT(c.hex_code SEPARATOR ', ') AS color_hex_codes,
        COALESCE(ROUND(AVG(r.rating)), 0) AS average_rating,
        col.name AS collection,
        col.id AS collection_id
    FROM lipsticks l
    JOIN lipstick_colors lc ON l.id = lc.lipstick_id
    JOIN colors c ON lc.color_id = c.id
    LEFT JOIN reviews r ON l.id = r.lipstick_id 
    JOIN collections col ON l.collection_id = col.id  
    WHERE l.collection_id IN (1, 2, 3)
    GROUP BY l.id
    ";

    $result = $conn->query($sql);
    $collections = [];

    while($row = $result->fetch_assoc()) {
        $collections[$row['collection_id']][] = $row;
    }

    return $collections;
}

