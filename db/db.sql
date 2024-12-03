CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE brands (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    image_url VARCHAR(255)
);

CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE lipsticks (
    id INT PRIMARY KEY AUTO_INCREMENT,
    brand_id INT NOT NULL,
    category_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(255),
    FOREIGN KEY (category_id) REFERENCES categories(id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (brand_id) REFERENCES brands(id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE colors (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    hex_code VARCHAR(7)
);

CREATE TABLE lipstick_colors (
    id INT PRIMARY KEY AUTO_INCREMENT,
    lipstick_id INT NOT NULL,
    color_id INT NOT NULL,
    FOREIGN KEY (lipstick_id) REFERENCES lipsticks(id) ON UPDATE CASCADE ON DELETE RESTRICT
    FOREIGN KEY (color_id) REFERENCES colors(id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE reviews (
    id INT PRIMARY KEY AUTO_INCREMENT,
    lipstick_id INT NOT NULL,
    user_id INT NOT NULL,
    rating INT,
    review_text TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (lipstick_id) REFERENCES lipsticks(id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE RESTRICT
);


CREATE TABLE user_favorites (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT NOT NULL,
  lipstick_id INT NOT NULL,
  added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (lipstick_id) REFERENCES lipsticks(id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE user_cart (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT NOT NULL,
  lipstick_id INT NOT NULL,
  quantity INT NOT NULL DEFAULT 1,
  added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (lipstick_id) REFERENCES lipsticks(id) ON UPDATE CASCADE ON DELETE CASCADE
);

INSERT INTO brands (name, image_url)
VALUES
  ('NARS', './images/nars-logo.png'),
  ('AVON', './images/avon-logo.jpg'),
  ('YSL', './images/ysl-logo.jpg'),
  ('MAC', './images/mac-logo.png'),
  ('Maybelline', './images/maybelline-logo.jpg'),
  ('DIOR', './images/dior-logo.jpg');

INSERT INTO collections (brand_id, name)
VALUES
  (1, 'NARS Audacious Lipstick'),
  (3, 'Yves Saint Laurent (YSL) Rouge Pur Couture'),
  (6, 'Dior - Rouge Dior');

INSERT INTO categories (id, name)
VALUES
  (1, 'Matte'),
  (2, 'Satin'),
  (3, 'Lip Gloss'),
  (4, 'Lip Stain'),
  (5, 'Lip Tint'),
  (6, 'Creamy'),
  (7, 'Sheer'),
  (8, 'Lip Crayons');

INSERT INTO lipsticks (brand_id, category_id, name, description, price, image_url) VALUES
(1, 1, 'NARS Velvet Touch Lipstick', 'A luxurious matte lipstick that offers a rich, velvety finish, perfect for long-lasting wear.', 400.00, './images/matte/NARS Velvet Touch.jpg'),
(1, 1, 'NARS Urban Chic', 'A bold red lipstick with a matte finish, perfect for making statement.', 300.00, './images/matte/NARS Urban Chic.jpg'),
(1, 7, 'NARS Ultra Matte Lipstick', 'A luxurious matte lipstick that offers a rich, velvety finish, perfect for long-lasting wear.', 550.00, './images/matte//NARS Ultra Matte Lipstick.jpg'),
(1, 7, 'Margaret', 'Margaret is a classic, deep red shade that exudes elegance and sophistication, offering a rich, bold finish perfect for special occasions or a chic everyday look.', 1900.00, './images/collections/Margaret.jpg'),
(1, 7, 'Anna', 'Anna is a bright, playful pink hue that adds a fun pop of color to any look. It’s vibrant and lively, making it ideal for those who love a bit of flair.', 1900.00, './images/collections/Anna.jpg'),
(1, 7, 'Audrey', 'Audrey is a sophisticated mauve shade that strikes the perfect balance between bold and understated, ideal for daily wear or adding a polished finish to any look.', 1900.00, './images/collections/Audrey.jpg'),
(1, 7, 'Brigitte', 'Brigitte is a deep, intense berry shade with a matte finish, making it a powerful statement color that exudes confidence and boldness.', 1900.00, './images/collections/Brigitte.jpg'),
(1, 7, 'Vivien', 'Vivien is a soft pink nude with a hint of warmth, offering a natural, subtle flush that enhances the lips with a delicate, feminine touch.', 1900.00, './images/collections/Vivien.jpg'),
(2, 6, 'AVON Creamy Indulgence Lipstick', 'A rich, velvety lipstick with a smooth application and long-lasting creamy finish for an indulgent touch.', 400.00, './images/creamy/AVON Creamy Indulgence.jpg'),
(2, 6, 'AVON Divine Comfort Lipstick', 'Luxurious and moisturizing, this lipstick glides on effortlessly, providing soft, all-day comfort.', 350.00, './images/creamy/AVON Divine Comfort.jpg'),
(2, 6, 'AVON Dreamy Cream Lipstick', 'Experience the dreamy, silky texture that melts into your lips, giving you an ethereal and natural glow.', 200.00, './images/creamy/AVON Dreamy Cream.jpg'),
(2, 6, 'AVON Dreamy Smooth Lipstick', 'A perfectly smooth formula that enhances your lips with vibrant color and a soft, comfortable feel.', 300.00, './images/creamy/AVON Dreamy Smooth.jpg'),
(2, 2, 'AVON Alluring Shine Lipstick', 'This lipstick combines vivid color with a glossy shine, adding a touch of allure to any look.', 500.00, './images/Satin/Avon Alluring Shine.jpg'),
(3, 1, 'YSL Bold Ambition Lipstick', 'Make a statement with this vibrant, bold lipstick that exudes confidence and sophistication.', 500.00, './images/matte/YSL Bold Ambition.jpg'),
(3, 1, 'YSL Coral Kiss Lipstick', 'A fresh, coral shade that adds a playful touch to any look with a kiss of bright color.', 500.00, './images/matte/YSL Coral Kiss.jpg'),
(3, 7, 'YSL Natural Glow Lipstick', 'A creamy lipstick that enhances your lips\' natural beauty with a soft, glowing finish.', 100.00, './images/sheer/YSL Natural Glow.jpg'),
(3, 2, 'Rouge Pur Couture The Bold', 'An intense, bold lipstick that delivers vibrant color with a satin finish, offering full coverage and all-day wear for a striking, confident look.', 1000.00, './images/collections/Rouge Pur Couture The Bold.jpg'),
(3, 1, 'Rouge Pur Couture Night Edition', 'A luxurious lipstick designed for evening glamour, featuring rich, deep shades that add a sophisticated touch to your lips with a smooth, long-lasting finish.', 1500.00, './images/collections/Rouge Pur Couture Night Edition.jpg'),
(3, 7, 'Ruby Red Lipstick', 'A captivating, classic red hue that exudes elegance and allure, providing a bold, statement-making look with a creamy, comfortable texture.', 1499.00, './images/collections/Rouge Pur Couture Satin.jpg'),
(3, 2, 'Rouge Sur Mesure', 'A customizable lipstick that allows you to create the perfect shade, blending effortlessly with your lips for a personalized, flawless finish.', 1900.00, './images/collections/Rouge Sur Mesure.jpg'),
(3, 1, 'Tatouage Couture', 'A tattoo-inspired liquid lipstick that delivers a lightweight, matte finish with high-impact color, ensuring a bold, smudge-proof look that lasts all day.', 1900.00, './images/collections/Tatouage Couture.jpg'),
(4, 1, 'MAC Lipstick', 'The classic go-to lipstick with a rich, pigmented formula that provides lasting color in every swipe.', 600.00, './images/matte/Mac Lipstick.jpg'),
(4, 1, 'MAC Noir Romance Lipstick', 'A deep, sultry shade that exudes elegance and adds a touch of mystery to any look.', 700.00, './images/matte/Mac Noir Romance.jpg'),
(4, 7, 'MAC Flirty Sheen Lipstick', 'A playful lipstick with a hint of sheen, perfect for adding a flirty touch to your smile.', 500.00, './images/sheer/Mac Flirty Sheen.jpg'),
(4, 7, 'MAC Sheer Whisper Lipstick', 'A soft, sheer lipstick that adds a delicate hint of color for a naturally beautiful look.', 400.00, './images/sheer/MAC Sheer Whisper.jpg'),
(4, 1, 'MAC Chic Statement Lipstick', 'Make a chic, bold statement with this sophisticated lipstick that’s perfect for any occasion.', 400.00, './images/matte/MAC Chic Statement.jpg'),
(5, 1, 'Maybelline Classic Charm Lipstick', 'A timeless lipstick that exudes classic charm with a smooth, creamy finish and vibrant color.', 200.00, './images/matte/Maybelline Classic Charm.jpg'),
(5, 1, 'Maybelline Timeless Temptation Lipstick', 'Indulge in this lipstick\'s rich, seductive shade that never goes out of style.', 200.00, './images/matte/Maybelline Timeless Temptation.jpg'),
(5, 7, 'Maybelline Barely There Bliss Lipstick', 'A subtle, barely-there shade for a soft, blissful touch that enhances natural beauty.', 400.00, './images/sheer/Maybelline Barely There Bliss.jpg'),
(5, 7, 'Maybelline Delicate Dream Lipstick', 'A light, dreamy formula that adds a delicate tint to your lips for an effortless look.', 300.00, './images/sheer/Maybelline Delicate Dream.jpg'),
(5, 2, 'Maybelline Crème Kiss Lipstick', 'Creamy and smooth, this lipstick delivers a kiss of color with a luscious finish.', 300.00, './images/Satin/Maybelline Crème Kiss.jpg'),
(6, 8, 'Dior Colorful Charm', 'A vibrant lipstick that adds a charming burst of color, perfect for a lively, unforgettable look.', 500.00, './images/lipcrayon/Dior Colorful Charm.jpg'),
(6, 8, 'DIOR Crayon Crush', 'This chic crayon lipstick delivers bold color with easy application, ideal for creating a stylish statement.', 200.00, './images/lipcrayon/DIOR Crayon Crush.jpg'),
(6, 6, 'DIOR Creamy Delight Lipstick', 'Indulge in a creamy, delightful formula that provides rich color and smooth application.', 200.00, './images/creamy/DIOR Creamy Delight.jpg'),
(6, 1, 'Rouge Dior Forever Liquid', 'A long-lasting liquid lipstick that offers vibrant, bold color with a comfortable matte finish, delivering up to 16 hours of wear without fading or smudging.', 1900.00, './images/collections/Rouge Dior Forever Liquid.jpg'),
(6, 1, 'Rouge Dior Couture Color', 'A luxurious lipstick that provides intense, couture-inspired color with a satin finish, ensuring full coverage and lasting hydration for a flawless, elegant look.', 1900.00, './images/collections/Rouge Dior Couture Color.jpg'),
(6, 1, 'Rouge Dior Ultra Care', 'A nourishing lipstick that combines bold color with a hydrating formula, leaving your lips soft, smooth, and comfortable while delivering a chic, long-lasting finish.', 1900.00, './images/collections/Rouge Dior Ultra Care.jpg'),
(6, 7, 'Rouge Dior Nude Look', 'A sophisticated nude lipstick that enhances your natural lip color with a subtle, silky finish, perfect for an effortlessly elegant look every day.', 1900.00, './images/collections/Rouge Dior Nude Look.jpg'),
(6, 1, 'Rouge Dior Metallics', 'A statement-making lipstick with a shimmering metallic finish, offering bold color with a reflective shine that adds an edgy, high-fashion touch to your lips.', 1900.00, './images/collections/Rouge Dior Metallics.jpg');


INSERT INTO colors (name, hex_code) VALUES
('Violet', '#8A2BE2'),
('Dark Red', '#8B0000'),
('Ruby Red', '#9B111E'),
('Crimson', '#DC143C'),
('Matte Red', '#B03060'),
('Soft Red', '#E57373'),
('Cherry Red', '#D2042D'),
('Crimson Red', '#990000'),
('Classic Red', '#BF0A30'),
('Bright Red', '#FF0000'),
('Shimmer Red', '#C41E3A'),
('Vermilion', '#E34234'),
('Mahogany Red', '#C04000'),
('Scarlet Crush', '#FF2400'),
('Plum', '#DDA0DD'),
('Deep Plum', '#673147'),
('Anna', '#B48491'),
('Audrey', '#8B475D'),
('Vivien', '#803E52'),
('Rosy Rouge', '#D991A3'),
('Fuchsia Crush', '#C154C1'),
('Light Pink', '#FFB6C1'),
('Medium Pink', '#FF69B4'),
('Dark Pink', '#FF1493'),
('Peachy Pink', '#FF9A8A'),
('Coral', '#FF7F50'),
('Soft Coral', '#F88379'),
('Bright Coral', '#FF6F61'),
('Beige', '#F5F5DC'),
('Warm Nude', '#D2B48C'),
('Toffee Cream', '#D2B48C'),
('Margaret', '#397F70'),
('Brigitte', '#D9A59A'),
('Mauve', '#E0B0FF'),
('Soft Mauve', '#D8BFD8'),
('Fuchsia', '#FF00FF'),
('Lavender', '#D3D3FF'),
('Purple', '#800080'),
('Peach', '#FFD3AC'),
('Rose', '#FF007F'),
('Lime', '#00FF00'),
('Cinnamon Spice', '#D2691E'),
('Deep Berry', '#702963'),
('Bright Cherry', '#FF5A6C'),
('Cherry', '#DE3163'),
('Berry', '#A52A4E'),
('Dark Berry', '#7B3F61');

INSERT INTO lipstick_colors (lipstick_id, color_id) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 15),
(3, 16),
(4, 32),
(5, 17),
(6, 18),
(7, 33),
(8, 19),
(9, 20),
(9, 21),
(9, 31),
(10, 46),
(10, 47),
(11, 7),
(11, 8),
(12, 3),
(12, 4),
(13, 5),
(13, 6),
(14, 5),
(14, 6),
(15, 26),
(15, 27),
(16, 29),
(16, 30),
(17, 9),
(17, 2),
(18, 7),
(18, 8),
(19, 3),
(19, 4),
(20, 24),
(20, 6),
(21, 11),
(21, 10),
(22, 45),
(22, 44),
(23, 34),
(23, 35),
(24, 24),
(24, 6),
(25, 46),
(25, 43),
(26, 38),
(26, 10),
(27, 26),
(27, 28),
(28, 7),
(28, 8),
(29, 9),
(29, 2),
(30, 3),
(30, 4),
(31, 3),
(31, 4),
(32, 5),
(32, 6),
(33, 12),
(33, 24),
(33, 13),
(34, 14),
(34, 25),
(34, 42),
(35, 22),
(35, 23),
(36, 26),
(36, 39),
(37, 36),
(37, 37),
(38, 40),
(38, 41),
(39, 22),
(39, 23),
(39, 24);

UPDATE lipsticks
SET collection_id = 1
WHERE id IN (4, 5, 6, 7, 8);

UPDATE lipsticks
SET collection_id = 2
WHERE id IN (17, 18, 19, 20, 21);

UPDATE lipsticks
SET collection_id = 3
WHERE id IN (35, 36, 37, 38, 39);