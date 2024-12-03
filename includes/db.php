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

function productById($id) {
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
        l.id = $id
    GROUP BY 
        l.id
    ORDER BY 
        average_rating DESC;
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

function allProducts() {
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
    GROUP BY 
        l.id
    ORDER BY 
        average_rating DESC;
    ";
  $result = $conn->query($sql);
  return $result->fetch_all(MYSQLI_ASSOC); 
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

function allBrands() {
    $conn = new mysqli('localhost', 'root', '', 'lipstick');
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM brands";
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

