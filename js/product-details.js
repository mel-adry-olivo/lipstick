const products = [
  {
    id: 1,
    name: "NARS Velvet Touch Lipstick",
    image: "images/matte/NARS Velvet Touch.jpg",
    description:
      "A luxurious matte lipstick that offers a rich, velvety finish, perfect for long-lasting wear.",
    price: "300.00",
    originalPrice: "400.00",
    colors: [
      { name: "Violet", colorCode: "#570549" },
      { name: "Dark Red", colorCode: "#b22222" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Very pigmented and smooth!",
      },
      {
        username: "Artemis",
        rating: 5,
        text: "Absolutely love this lipstick!",
      },
    ],
    reviewCount: 4500,
    relatedProducts: [2, 3, 4, 5, 6],
  },
  {
    id: 2,
    name: "Maybelline Timeless Temptation Lipstick",
    image: "images/matte/Maybelline Timeless Temptation.jpg",
    description:
      "A classic red lipstick with a matte finish, perfect for everyday wear.",
    price: "200.00",
    originalPrice: "250.00",
    colors: [
      { name: "Cherry Red", colorCode: "#ff4444" },
      { name: "Crimson Red", colorCode: "#8b0000" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 3000,
    relatedProducts: [7, 8, 9, 10, 11],
  },
  {
    id: 3,
    name: "NARS Urban Chic Lipstick",
    image: "images/matte/NARS Urban Chic.jpg",
    description:
      "A bold red lipstick with a matte finish, perfect for making a statement.",
    price: "300.00",
    originalPrice: "350.00",
    discount: "10%",
    colors: [
      { name: "Ruby Red", colorCode: "#c8102e" },
      { name: "Crimson", colorCode: "#dc143c" },
    ],
    rating: 5,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 4000,
    relatedProducts: [12, 13, 14, 15],
  },
  {
    id: 4,
    name: "YSL Bold Ambition Lipstick",
    image: "images/matte/YSL Bold Ambition.jpg",
    description:
      "A luxurious matte lipstick that offers a rich, velvety finish, perfect for long-lasting wear.",
    price: "500.00",
    originalPrice: "600.00",
    discount: "15%",
    colors: [
      { name: "Matte Red", colorCode: "#b22222" },
      { name: "Soft Red", colorCode: "#cd5c5c" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Very pigmented and smooth!",
      },
      {
        username: "Artemis",
        rating: 5,
        text: "Absolutely love this lipstick!",
      },
    ],
    reviewCount: 2200,
    relatedProducts: [1, 2, 3, 14, 15],
  },
  {
    id: 5,
    name: "MAC Chic Statement Lipstick",
    image: "images/matte/MAC Chic Statement.jpg",
    description:
      "A classic red lipstick with a matte finish, perfect for everyday wear.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Purple", colorCode: "#dd25b5" },
      { name: "Bright Red", colorCode: "#d91e18" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 1700,
    relatedProducts: [1, 2, 3, 14, 15],
  },
  {
    id: 6,
    name: "Maybelline Classic Charm Lipstick",
    image: "images/matte/Maybelline Classic Charm.jpg",
    description:
      "A classic red lipstick with a matte finish, perfect for everyday wear.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Coral", colorCode: "#ff7f50" },
      { name: "Bright Coral", colorCode: "#ff4500" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 1200,
    relatedProducts: [1, 3, 1, 2, 3, 14, 15],
  },
  {
    id: 7,
    name: "MAC Daring Diva Lipstick",
    image: "images/matte/MAC Daring Diva.jpg",
    description:
      "A bold red lipstick with a matte finish, perfect for making a statement.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Classic Red", colorCode: "#e63946" },
      { name: "Deep Red", colorCode: "#d00000" },
    ],
    rating: 5,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 3000,
    relatedProducts: [6, 7, 8, 9, 10],
  },
  {
    id: 8,
    name: "Avon Fierce Confidence Lipstick",
    image: "images/matte/Avon Fierce Confidence.jpg",
    description:
      "A luxurious matte lipstick that offers a rich, velvety finish, perfect for long-lasting wear.",
    price: "350.00",
    originalPrice: "400.00",
    discount: "10%",
    colors: [
      { name: "Berry", colorCode: "#9b59b6" },
      { name: "Dark Berry", colorCode: "#8e44ad" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Very pigmented and smooth!",
      },
      {
        username: "Artemis",
        rating: 5,
        text: "Absolutely love this lipstick!",
      },
    ],
    reviewCount: 850,
    relatedProducts: [1, 2, 3, 4, 5],
  },
  {
    id: 9,
    name: "Avon Magnetic Appeal Lipstick",
    image: "images/matte/Avon Magnetic Appeal.jpg",
    description:
      "A classic red lipstick with a matte finish, perfect for everyday wear.",
    price: "100.00",
    originalPrice: "150.00",
    discount: "20%",
    colors: [
      { name: "Beige", colorCode: "#d8c7a6" },
      { name: "Warm Nude", colorCode: "#e4b169" },
    ],
    rating: 4.5,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 1450,
    relatedProducts: [1, 2, 3, 4, 5],
  },
  {
    id: 10,
    name: "MAC Noir Romance Lipstick",
    image: "images/matte/Mac Noir Romance.jpg",
    description:
      "A bold red lipstick with a matte finish, perfect for making a statement.",
    price: "700.00",
    originalPrice: "800.00",
    discount: "10%",
    colors: [
      { name: "Mauve", colorCode: "#e091b8" },
      { name: "Soft Mauve", colorCode: "#d597c9" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 1500,
    relatedProducts: [1, 2, 3, 4, 5],
  },
  {
    id: 11,
    name: "MAC Rebel Spirit Lipstick",
    image: "images/matte/Mac Rebel Spirit.jpg",
    description:
      "A luxurious matte lipstick that offers a rich, velvety finish, perfect for long-lasting wear.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Berry", colorCode: "#6f2c4b" },
      { name: "Deep Berry", colorCode: "#af4b63" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Very pigmented and smooth!",
      },
      {
        username: "Artemis",
        rating: 5,
        text: "Absolutely love this lipstick!",
      },
    ],
    reviewCount: 2000,
    relatedProducts: [2, 3, 13, 14, 15],
  },
  {
    id: 12,
    name: "NARS Sassy Seduction Lipstick",
    image: "images/matte/NARS Sassy Seduction.jpg",
    description:
      "A classic red lipstick with a matte finish, perfect for everyday wear.",
    price: "450.00",
    originalPrice: "500.00",
    discount: "10%",
    colors: [
      { name: "Nude", colorCode: "#f5d09b" },
      { name: "Soft Nude", colorCode: "#e6b19a" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 1300,
    relatedProducts: [1, 3, 5, 6, 7],
  },
  {
    id: 13,
    name: "NARS Ultra Matte Lipstick",
    image: "images/matte/NARS Ultra Matte Lipstick.jpg",
    description:
      "A luxurious matte lipstick that offers a rich, velvety finish, perfect for long-lasting wear.",
    price: "550.00",
    originalPrice: "600.00",
    discount: "10%",
    colors: [
      { name: "Plum", colorCode: "#5d3b57" },
      { name: "Deep Plum", colorCode: "#a84b88" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Very pigmented and smooth!",
      },
      {
        username: "Artemis",
        rating: 5,
        text: "Absolutely love this lipstick!",
      },
    ],
    reviewCount: 2500,
    relatedProducts: [2, 3, 8, 9, 10],
  },
  {
    id: 14,
    name: "MAC Lipstick",
    image: "images/matte/Mac Lipstick.jpg",
    description:
      "A classic red lipstick with a matte finish, perfect for everyday wear.",
    price: "600.00",
    originalPrice: "650.00",
    discount: "10%",
    colors: [
      { name: "Cherry", colorCode: "#b20d22" },
      { name: "Bright Cherry", colorCode: "#f49c9b" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 1600,
    relatedProducts: [1, 3, 8, 9, 10],
  },
  {
    id: 15,
    name: "YSL Coral Kiss Lipstick",
    image: "images/matte/YSL Coral Kiss.jpg",
    description:
      "A luxurious matte lipstick that offers a rich, velvety finish, perfect for long-lasting wear.",
    price: "500.00",
    originalPrice: "550.00",
    discount: "10%",
    colors: [
      { name: "Coral", colorCode: "#f65a94" },
      { name: "Soft Coral", colorCode: "#f9d8b4" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Very pigmented and smooth!",
      },
      {
        username: "Artemis",
        rating: 5,
        text: "Absolutely love this lipstick!",
      },
    ],
    reviewCount: 1800,
    relatedProducts: [11, 12, 13, 14, 15],
  },
  {
    id: 16,
    name: "YSL Lush Satin Lipstick",
    image: "images/Satin/YSL Lush Satin.jpg",
    description:
      "A luxurious satin lipstick that offers a rich, velvety finish, perfect for long-lasting wear.",
    price: "300.00",
    originalPrice: "400.00",
    discount: "20%",
    colors: [
      { name: "Pink", colorCode: "#ff69b4" },
      { name: "Red", colorCode: "#da0d0d" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Very pigmented and smooth!",
      },
      {
        username: "Artemis",
        rating: 5,
        text: "Absolutely love this lipstick!",
      },
    ],
    reviewCount: 4500,
    relatedProducts: [17, 18, 19, 20, 21],
  },
  {
    id: 17,
    name: "Dior Silken Spice Lipstick",
    image: "images/Satin/Dior Silken Spice.jpg",
    description:
      "A classic red lipstick with a satin finish, perfect for everyday wear.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Cherry Red", colorCode: "#ff4444" },
      { name: "Crimson Red", colorCode: "#8b0000" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 3000,
    relatedProducts: [16, 18, 28, 29, 30],
  },
  {
    id: 18,
    name: "Maybelline Crème Kiss Lipstick",
    image: "images/Satin/Maybelline Crème Kiss.jpg",
    description:
      "A bold red lipstick with a satin finish, perfect for making a statement.",
    price: "300.00",
    originalPrice: "350.00",
    discount: "10%",
    colors: [
      { name: "Ruby Red", colorCode: "#c8102e" },
      { name: "Crimson", colorCode: "#dc143c" },
    ],
    rating: 5,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 4000,
    relatedProducts: [16, 17, 21, 22, 23],
  },
  {
    id: 19,
    name: "Avon Alluring Shine Lipstick",
    image: "images/Satin/Avon Alluring Shine.jpg",
    description:
      "A luxurious satin lipstick that offers a rich, velvety finish, perfect for long-lasting wear.",
    price: "500.00",
    originalPrice: "600.00",
    discount: "15%",
    colors: [
      { name: "Matte Red", colorCode: "#b22222" },
      { name: "Soft Red", colorCode: "#cd5c5c" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Very pigmented and smooth!",
      },
      {
        username: "Artemis",
        rating: 5,
        text: "Absolutely love this lipstick!",
      },
    ],
    reviewCount: 2200,
    relatedProducts: [17, 18, 21, 22, 23],
  },
  {
    id: 20,
    name: "Avon Divine Smooth Lipstick",
    image: "images/Satin/Avon Divine Smooth.jpg",
    description:
      "A classic red lipstick with a satin finish, perfect for everyday wear.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Purple", colorCode: "#dd25b5" },
      { name: "Bright Red", colorCode: "#d91e18" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 1700,
    relatedProducts: [16, 18, 21, 22, 23],
  },
  {
    id: 21,
    name: "Avon Dreamy Delight Lipstick",
    image: "images/Satin/Avon Dreamy Delight.jpg",
    description:
      "A classic red lipstick with a satin finish, perfect for everyday wear.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Coral", colorCode: "#ff7f50" },
      { name: "Bright Coral", colorCode: "#ff4500" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 1200,
    relatedProducts: [16, 18, 19, 20, 21],
  },
  {
    id: 22,
    name: "MAC Enchanted Elegance Lipstick",
    image: "images/Satin/MAC Enchanted Elegance.jpg",
    description:
      "A bold red lipstick with a satin finish, perfect for making a statement.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Classic Red", colorCode: "#e63946" },
      { name: "Deep Red", colorCode: "#d00000" },
    ],
    rating: 5,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 3000,
    relatedProducts: [16, 17, 22, 23, 24],
  },
  {
    id: 23,
    name: "NARS Glamour Kiss Lipstick",
    image: "images/Satin/NARS Glamour Kiss.jpg",
    description:
      "A luxurious satin lipstick that offers a rich, velvety finish, perfect for long-lasting wear.",
    price: "350.00",
    originalPrice: "400.00",
    discount: "10%",
    colors: [
      { name: "Brown", colorCode: "#ac5422ab" },
      { name: "Dark Berry", colorCode: "#8e44ad" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Very pigmented and smooth!",
      },
      {
        username: "Artemis",
        rating: 5,
        text: "Absolutely love this lipstick!",
      },
    ],
    reviewCount: 850,
    relatedProducts: [17, 18, 22, 23, 24],
  },
  {
    id: 24,
    name: "NARS Kiss of Satin Lipstick",
    image: "images/Satin/NARS Kiss of Satin.jpg",
    description:
      "A classic red lipstick with a satin finish, perfect for everyday wear.",
    price: "100.00",
    originalPrice: "150.00",
    discount: "20%",
    colors: [
      { name: "Beige", colorCode: "#d8c7a6" },
      { name: "Warm Nude", colorCode: "#e4b169" },
    ],
    rating: 4.5,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 1450,
    relatedProducts: [16, 18, 22, 23, 24],
  },
  {
    id: 25,
    name: "YSL Luxurious Luster Lipstick",
    image: "images/Satin/YSL Luxurious Luster.jpg",
    description:
      "A bold red lipstick with a satin finish, perfect for making a statement.",
    price: "700.00",
    originalPrice: "800.00",
    discount: "10%",
    colors: [
      { name: "Dark Red", colorCode: "#d61010" },
      { name: "Soft Mauve", colorCode: "#d597c9" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 1500,
    relatedProducts: [16, 17, 25, 26, 27],
  },
  {
    id: 26,
    name: "Dior Polished Perfection Lipstick",
    image: "images/Satin/Dior Polished Perfection.jpg",
    description:
      "A luxurious satin lipstick that offers a rich, velvety finish, perfect for long-lasting wear.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Berry", colorCode: "#6f2c4b" },
      { name: "Deep Berry", colorCode: "#af4b63" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Very pigmented and smooth!",
      },
      {
        username: "Artemis",
        rating: 5,
        text: "Absolutely love this lipstick!",
      },
    ],
    reviewCount: 2000,
    relatedProducts: [17, 18, 25, 26, 27],
  },
  {
    id: 27,
    name: "MAC Radiant Glow Lipstick",
    image: "images/Satin/MAC Radiant Glow.jpg",
    description:
      "A classic red lipstick with a satin finish, perfect for everyday wear.",
    price: "450.00",
    originalPrice: "500.00",
    discount: "10%",
    colors: [
      { name: "Nude", colorCode: "#f5d09b" },
      { name: "Soft Nude", colorCode: "#e6b19a" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 1300,
    relatedProducts: [16, 18, 28, 29, 30],
  },
  {
    id: 28,
    name: "Maybelline Satin Secrets Lipstick",
    image: "images/Satin/Maybelline Satin Secrets.jpg",
    description:
      "A luxurious satin lipstick that offers a rich, velvety finish, perfect for long-lasting wear.",
    price: "550.00",
    originalPrice: "600.00",
    discount: "10%",
    colors: [
      { name: "Plum", colorCode: "#5d3b57" },
      { name: "Deep Plum", colorCode: "#a84b88" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Very pigmented and smooth!",
      },
      {
        username: "Artemis",
        rating: 5,
        text: "Absolutely love this lipstick!",
      },
    ],
    reviewCount: 2500,
    relatedProducts: [17, 18, 28, 29, 30],
  },
  {
    id: 29,
    name: "DIor Shimmering Velvet Lipstick",
    image: "images/Satin/DIor Shimmering Velvet.jpg",
    description:
      "A classic red lipstick with a satin finish, perfect for everyday wear.",
    price: "600.00",
    originalPrice: "650.00",
    discount: "10%",
    colors: [
      { name: "Cherry", colorCode: "#b20d22" },
      { name: "Bright Cherry", colorCode: "#f49c9b" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Such a classic shade!" },
      { username: "Rainier Malaga", rating: 4, text: "Love the texture!" },
    ],
    reviewCount: 1600,
    relatedProducts: [16, 18, 28, 29, 30],
  },
  {
    id: 30,
    name: "Dior Silken Spice Lipstick",
    image: "images/Satin/Dior Silken Spice.jpg",
    description:
      "A luxurious satin lipstick that offers a rich, velvety finish, perfect for long-lasting wear.",
    price: "500.00",
    originalPrice: "550.00",
    discount: "10%",
    colors: [
      { name: "Coral", colorCode: "#f65a94" },
      { name: "Soft Coral", colorCode: "#f9d8b4" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Very pigmented and smooth!",
      },
      {
        username: "Artemis",
        rating: 5,
        text: "Absolutely love this lipstick!",
      },
    ],
    reviewCount: 1800,
    relatedProducts: [17, 18, 28, 29, 30],
  },
  {
    id: 31,
    name: "MAC Crystal Clear Lipgloss",
    image: "images/lipgloss/MAC Crystal Clear.jpg",
    description:
      "A high-shine lip gloss that provides a glossy finish with a hint of color.",
    price: "300.00",
    originalPrice: "400.00",
    discount: "20%",
    colors: [
      { name: "Pink Sparkle", colorCode: "#ff69b4" },
      { name: "Orange Glow", colorCode: "#ffa07a" },
      { name: "Fuchsia Frenzy", colorCode: "#c71585" },
    ],
    rating: 5,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Great shine and color!" },
      { username: "Artemis", rating: 5, text: "Love the sparkle!" },
    ],
    reviewCount: 4500,
    relatedProducts: [32, 33, 34, 35, 36],
  },
  {
    id: 32,
    name: "Maybelline Dreamy Gloss",
    image: "images/lipgloss/Maybelline Dreamy Gloss.jpg",
    description:
      "A soft and dreamy gloss that glides on smoothly for a luscious finish.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Burgundy Blush", colorCode: "#8f0a1a" },
      { name: "Blueberry Blast", colorCode: "#ff69b4" },
      { name: "Indigo Dream", colorCode: "#4b0082" },
      { name: "Purple Passion", colorCode: "#7a288a" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Smooth and not sticky!" },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3000,
    relatedProducts: [31, 33, 34, 35, 36],
  },
  {
    id: 33,
    name: "YSL Effortless Shine Lipgloss",
    image: "images/lipgloss/YSL Effortless Shine.jpg",
    description:
      "A luxurious gloss that provides a mirror-like shine with a touch of color.",
    price: "300.00",
    originalPrice: "350.00",
    discount: "10%",
    colors: [
      { name: "Green Goddess", colorCode: "#32cd32" },
      { name: "Yellow Sunshine", colorCode: "#ffff00" },
      { name: "Pastel Pink", colorCode: "#ff99cc" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Absolutely stunning shine!",
      },
      { username: "Artemis", rating: 5, text: "My go-to gloss!" },
    ],
    reviewCount: 4000,
    relatedProducts: [31, 32, 43, 44, 45],
  },
  {
    id: 34,
    name: "YSL Flirty Gloss",
    image: "images/lipgloss/YSL Flirty Gloss.jpg",
    description:
      "A playful gloss that adds a pop of color and shine to your lips.",
    price: "500.00",
    originalPrice: "600.00",
    discount: "15%",
    colors: [
      { name: "Matte Red", colorCode: "#b22222" },
      { name: "Soft Red", colorCode: "#cd5c5c" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Perfect for a flirty look!",
      },
      { username: "Artemis", rating: 4, text: "Great color payoff!" },
    ],
    reviewCount: 2200,
    relatedProducts: [32, 33, 43, 44, 45],
  },
  {
    id: 35,
    name: "DIOR Glistening Glam Lipgloss",
    image: "images/lipgloss/DIOR Glistening Glam.jpg",
    description: "A sparkling gloss that adds glamour and shine to your lips.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Shimmer Red", colorCode: "#dd25b5" },
      { name: "Bright Red", colorCode: "#d91e18" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Gorgeous shine and color!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for a night out!" },
    ],
    reviewCount: 1700,
    relatedProducts: [31, 33, 43, 44, 45],
  },
  {
    id: 36,
    name: "YSL Glossy Kiss Lipgloss",
    image: "images/lipgloss/YSL Glossy Kiss.jpg",
    description:
      "A luscious gloss that provides a glossy finish with a hint of color.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Coral", colorCode: "#ff7f50" },
      { name: "Bright Coral", colorCode: "#ff4500" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Smooth and not sticky!" },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1200,
    relatedProducts: [31, 33, 38, 39, 40],
  },
  {
    id: 37,
    name: "DIOR Glow Getter Lipgloss",
    image: "images/lipgloss/DIOR Glow Getter.jpg",
    description: "A radiant gloss that adds a healthy glow to your lips.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Classic Red", colorCode: "#e63946" },
      { name: "Deep Red", colorCode: "#d00000" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Absolutely stunning shine!",
      },
      { username: "Artemis", rating: 5, text: "My go-to gloss!" },
    ],
    reviewCount: 3000,
    relatedProducts: [31, 32, 38, 39, 40],
  },
  {
    id: 38,
    name: "Avon Irresistible Gloss",
    image: "images/lipgloss/Avon Irresistible Gloss.jpg",
    description:
      "A luscious gloss that provides a glossy finish with a hint of color.",
    price: "350.00",
    originalPrice: "400.00",
    discount: "10%",
    colors: [
      { name: "Tangerine Dream", colorCode: "#e6a75a" },
      { name: "Amber Glow", colorCode: "#dd8cc2c5" },
      { name: "Fuchsia Frenzy", colorCode: "#c71585" },
      { name: "Purple Passion", colorCode: "#7a288a" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Great shine and color!" },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 850,
    relatedProducts: [32, 33, 43, 44, 45],
  },
  {
    id: 39,
    name: "MAC Juicy Plump Lipgloss",
    image: "images/lipgloss/MAC Juicy Plump.jpg",
    description:
      "A hydrating gloss that provides a luscious finish with a hint of color.",
    price: "100.00",
    originalPrice: "150.00",
    discount: "20%",
    colors: [
      { name: "Beige", colorCode: "#d8c7a6" },
      { name: "Warm Nude", colorCode: "#e4b169" },
    ],
    rating: 4.5,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Great shine and color!" },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1450,
    relatedProducts: [31, 33, 43, 44, 45],
  },
  {
    id: 40,
    name: "YSL Gloss Luxury Lipgloss",
    image: "images/lipgloss/YSL Gloss Luxury.jpg",
    description:
      "A luxurious gloss that provides a mirror-like shine with a touch of color.",
    price: "700.00",
    originalPrice: "800.00",
    discount: "10%",
    colors: [
      { name: "Orange Goddess", colorCode: "#cd8a32" },
      { name: "Red Sunshine", colorCode: "#b62727" },
      { name: "Pastel Pink", colorCode: "#ff99cc" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Absolutely stunning shine!",
      },
      { username: "Artemis", rating: 5, text: "My go-to gloss!" },
    ],
    reviewCount: 1500,
    relatedProducts: [31, 32, 43, 44, 45],
  },
  {
    id: 41,
    name: "Maybelline Luscious Shine Lipgloss",
    image: "images/lipgloss/Maybelline Luscious Shine.jpg",
    description:
      "A luscious gloss that provides a glossy finish with a hint of color.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Berry", colorCode: "#6f2c4b" },
      { name: "Deep Berry", colorCode: "#af4b63" },
    ],
    rating: 5,
    reviews: [
      { username: "Rainier Malaga", rating: 5, text: "Great shine and color!" },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2000,
    relatedProducts: [32, 33, 36, 37, 38],
  },
  {
    id: 42,
    name: "Avon Shimmering Delight Lipgloss",
    image: "images/lipgloss/Avon Shimmering Delight.jpg",
    description:
      "A shimmering gloss that adds a touch of glamour to your lips.",
    price: "450.00",
    originalPrice: "500.00",
    discount: "10%",
    colors: [
      { name: "Nude", colorCode: "#f5d09b" },
      { name: "Soft Nude", colorCode: "#e6b19a" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Great shine and color!" },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1300,
    relatedProducts: [31, 33, 36, 37, 38],
  },
  {
    id: 43,
    name: "DIOR Addict Radiant Luster Lipgloss",
    image: "images/lipgloss/DIOR Addict Radiant Luster.jpg",
    description: "A radiant gloss that adds a healthy glow to your lips.",
    price: "550.00",
    originalPrice: "600.00",
    discount: "10%",
    colors: [
      { name: "Plum", colorCode: "#5d3b57" },
      { name: "Deep Plum", colorCode: "#a84b88" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Absolutely stunning shine!",
      },
      { username: "Artemis", rating: 5, text: "My go-to gloss!" },
    ],
    reviewCount: 2500,
    relatedProducts: [31, 32, 36, 37, 38],
  },
  {
    id: 44,
    name: "MAC Radiate Joy Lipgloss",
    image: "images/lipgloss/MAC Radiate Joy.jpg",
    description:
      "A hydrating gloss that provides a luscious finish with a hint of color.",
    price: "600.00",
    originalPrice: "700.00",
    discount: "10%",
    colors: [
      { name: "Cherry", colorCode: "#b20d22" },
      { name: "Bright Cherry", colorCode: "#f49c9b" },
    ],
    rating: 4,
    reviews: [
      { username: "Rainier Malaga", rating: 4, text: "Great shine and color!" },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1600,
    relatedProducts: [31, 33, 36, 37, 38],
  },
  {
    id: 45,
    name: "Maybelline Sweet Seduction Lipgloss",
    image: "images/lipgloss/Maybelline Sweet Seduction.jpg",
    description: "A sweet gloss that adds a touch of glamour to your lips.",
    price: "500.00",
    originalPrice: "550.00",
    discount: "10%",
    colors: [
      { name: "Coral", colorCode: "#f65a 94" },
      { name: "Soft Coral", colorCode: "#f9d8b4" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Absolutely stunning shine!",
      },
      { username: "Artemis", rating: 5, text: "My go-to gloss!" },
    ],
    reviewCount: 1800,
    relatedProducts: [32, 33, 40, 41, 42],
  },
  {
    id: 46,
    name: "Avon Whispering Rose Lipstain",
    image: "images/lipstain/Avon Whispering Rose.jpg",
    description:
      "A long-lasting lip stain that provides a natural-looking flush of color.",
    price: "300.00",
    originalPrice: "400.00",
    discount: "20%",
    colors: [
      { name: "Ruby Red", colorCode: "#e0115f" },
      { name: "Pink Petal", colorCode: "#ff69b4" },
      { name: "Fuchsia Frenzy", colorCode: "#c71585" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4500,
    relatedProducts: [47, 48, 58, 59, 60],
  },
  {
    id: 47,
    name: "Maybelline Whispering Petals Lipstain",
    image: "images/lipstain/Maybelline Whispering Petals.jpg",
    description:
      "A soft and natural-looking lip stain that provides a subtle wash of color.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Crimson Red", colorCode: "#ff0033" },
      { name: "Pastel Pink", colorCode: "#ff99cc" },
      { name: "Soft Peach", colorCode: "#c0c0c0" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3000,
    relatedProducts: [46, 48, 56, 57, 58],
  },
  {
    id: 48,
    name: "Maybelline Sunkissed Glow Lipstain",
    image: "images/lipstain/Maybelline Sunkissed Glow.jpg",
    description:
      "A vibrant and long-lasting lip stain that provides a sun-kissed glow.",
    price: "300.00",
    originalPrice: "350.00",
    discount: "10%",
    colors: [
      { name: "Burgundy Blush", colorCode: "#8f0a1a" },
      { name: "Blueberry Blast", colorCode: "#6495ed" },
      { name: "Indigo Dream", colorCode: "#4b0082" },
      { name: "Purple Passion", colorCode: "#7a288a" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4000,
    relatedProducts: [46, 47, 51, 52, 53],
  },
  {
    id: 49,
    name: "Avon Subtle Charm Lipstain",
    image: "images/lipstain/Avon Subtle Charm.jpg",
    description:
      "A soft and natural-looking lip stain that provides a subtle wash of color.",
    price: "500.00",
    originalPrice: "600.00",
    discount: "15%",
    colors: [
      { name: "Matte Red", colorCode: "#b22222" },
      { name: "Soft Red", colorCode: "#cd5c5c" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2200,
    relatedProducts: [47, 48, 51, 52, 53],
  },
  {
    id: 50,
    name: "Dior Stained Romance Lipstain",
    image: "images/lipstain/Dior Stained Romance.jpg",
    description:
      "A long-lasting lip stain that provides a romantic and feminine touch.",
    price: "400.00",
    originalPrice: "450. 00",
    discount: "10%",
    colors: [
      { name: "Shimmer Red", colorCode: "#dd25b5" },
      { name: "Bright Red", colorCode: "#d91e18" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1700,
    relatedProducts: [46, 48, 54, 55, 56],
  },
  {
    id: 51,
    name: "YSL Soft Stain Lipstain",
    image: "images/lipstain/YSL Soft Stain.jpg",
    description:
      "A soft and natural-looking lip stain that provides a subtle wash of color.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Tangerine Dream", colorCode: "#ff8c00" },
      { name: "Maroon Glow", colorCode: "#63040c" },
      { name: "Fuchsia Frenzy", colorCode: "#c71585" },
      { name: "Purple Passion", colorCode: "#7a288a" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1200,
    relatedProducts: [46, 47, 48, 49, 50],
  },
  {
    id: 52,
    name: "YSL Petal Soft Lipstain",
    image: "images/lipstain/YSL Petal Soft.jpg",
    description:
      "A soft and natural-looking lip stain that provides a subtle wash of color.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Classic Red", colorCode: "#e63946" },
      { name: "Deep Red", colorCode: "#d00000" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3000,
    relatedProducts: [46, 47, 52, 53, 54],
  },
  {
    id: 53,
    name: "Dior Natural Flush Lipstain",
    image: "images/lipstain/Dior Natural Flush.jpg",
    description:
      "A natural-looking lip stain that provides a healthy and flushed appearance.",
    price: "350.00",
    originalPrice: "400.00",
    discount: "10%",
    colors: [
      { name: "Indigo Dream", colorCode: "#4b0082" },
      { name: "Blueberry Blast", colorCode: "#6495ed" },
      { name: "Burgundy Blush", colorCode: "#8f0a1a" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 850,
    relatedProducts: [47, 48, 52, 53, 54],
  },
  {
    id: 54,
    name: "NARS Lasting Impression Lipstain",
    image: "images/lipstain/NARS Lasting Impression.jpg",
    description:
      "A long-lasting lip stain that provides a vibrant and lasting color.",
    price: "100.00",
    originalPrice: "150.00",
    discount: "20%",
    colors: [
      { name: "Pink Sparkle", colorCode: "#ff69b4" },
      { name: "Orange Glow", colorCode: "#ffa07a" },
      { name: "Fuchsia Frenzy", colorCode: "#c71585" },
      { name: "Purple Passion", colorCode: "#7a288a" },
    ],
    rating: 4.5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1450,
    relatedProducts: [46, 48, 52, 53, 54],
  },
  {
    id: 55,
    name: "Maybelline Kissed by Nature Lipstain",
    image: "images/lipstain/Maybelline Kissed by Nature.jpg",
    description:
      "A natural-looking lip stain that provides a healthy and flushed appearance.",
    price: "700.00",
    originalPrice: "800.00",
    discount: "10%",
    colors: [
      { name: "Tangerine Dream", colorCode: "#ff8c00" },
      { name: "Amber Glow", colorCode: "#ffd700" },
      { name: "Fuchsia Frenzy", colorCode: "#c71585" },
      { name: "Purple Passion", colorCode: "#7a288a" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1500,
    relatedProducts: [46, 47, 56, 57, 58],
  },
  {
    id: 56,
    name: "Avon Gentle Kiss Lipstain",
    image: "images/lipstain/Avon Gentle Kiss.jpg",
    description:
      "A soft and natural-looking lip stain that provides a subtle wash of color.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Berry", colorCode: "#6f2c4b" },
      { name: "Deep Berry", colorCode: "#af4b63" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2000,
    relatedProducts: [46, 47, 56, 57, 58],
  },
  {
    id: 57,
    name: "Dior Effortless Elegance Lipstain",
    image: "images/lipstain/Dior Effortless Elegance.jpg",
    description:
      "A long-lasting lip stain that provides a elegant and sophisticated look.",
    price: "450.00",
    originalPrice: "500.00",
    discount: "10%",
    colors: [
      { name: "Indigo Dream", colorCode: "#4b0082" },
      { name: "Blueberry Blast", colorCode: "#6495ed" },
      { name: "Burgundy Blush", colorCode: "#8f0a1a" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1300,
    relatedProducts: [46, 48, 50, 51, 52],
  },
  {
    id: 58,
    name: "Maybelline Blushing Beauty Lipstain",
    image: "images/lipstain/Maybelline Blushing Beauty.jpg",
    description:
      "A natural-looking lip stain that provides a healthy and flushed appearance.",
    price: "550.00",
    originalPrice: "600.00",
    discount: "10%",
    colors: [
      { name: "Plum", colorCode: "#5d3b57" },
      { name: "Deep Plum", colorCode: "#a84b88" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2500,
    relatedProducts: [46, 47, 50, 51, 52],
  },
  {
    id: 59,
    name: "NARS Blooming Bliss Lipstain",
    image: "images/lipstain/NARS Blooming Bliss.jpg",
    description:
      "A long-lasting lip stain that provides a vibrant and lasting color.",
    price: "600.00",
    originalPrice: "700.00",
    discount: "10%",
    colors: [
      { name: "Cherry", colorCode: "#b20d22" },
      { name: "Bright Cherry", colorCode: "#f49c9b" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1600,
    relatedProducts: [46, 48, 53, 54, 55],
  },
  {
    id: 60,
    name: "Avon Barely There Lipstain",
    image: "images/lipstain/Avon Barely There.jpg",
    description:
      "A soft and natural-looking lip stain that provides a subtle wash of color.",
    price: "500.00",
    originalPrice: "550.00",
    discount: "10%",
    colors: [
      { name: "Coral", colorCode: "#f65a94" },
      { name: "Soft Coral", colorCode: "#f9d8b4" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1800,
    relatedProducts: [46, 47, 53, 54, 55],
  },
  {
    id: 61,
    name: "NARS Dewy Kiss Liptint",
    image: "images/liptint/NARS Dewy Kiss.jpg",
    description:
      "A hydrating liptint that provides a natural-looking flush of color.",
    price: "300.00",
    originalPrice: "400.00",
    discount: "20%",
    colors: [
      { name: "Ruby Red", colorCode: "#ff0033" },
      { name: "Pink Petal", colorCode: "#ff69b4" },
      { name: "Crimson Red", colorCode: "#e0115f" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4500,
    relatedProducts: [62, 63, 73, 74, 75],
  },
  {
    id: 62,
    name: "NARS Effortless Tint",
    image: "images/liptint/NARS Effortless Tint.jpg",
    description:
      "A soft and natural-looking liptint that provides a subtle wash of color.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Pastel Pink", colorCode: "#ff99cc" },
      { name: "Red Dream", colorCode: "#a73333" },
      { name: "Fuchsia Frenzy", colorCode: "#c71585" },
      { name: "Pink Sparkle", colorCode: "#ff69b4" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3000,
    relatedProducts: [61, 63, 66, 67, 68],
  },
  {
    id: 63,
    name: "Avon Simple Pretty Liptint",
    image: "images/liptint/Avon Simple Pretty.jpg",
    description:
      "A natural-looking liptint that provides a healthy and flushed appearance.",
    price: "300.00",
    originalPrice: "350.00",
    discount: "10%",
    colors: [
      { name: "Ruby Red", colorCode: "#c8102e" },
      { name: "Crimson", colorCode: "#dc143c" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4000,
    relatedProducts: [61, 62, 71, 72, 73],
  },
  {
    id: 64,
    name: "YSL Gentle Color Liptint",
    image: "images/liptint/YSL Gentle Color.jpg",
    description:
      "A soft and natural-looking liptint that provides a subtle wash of color.",
    price: "500.00",
    originalPrice: "600.00",
    discount: "15%",
    colors: [
      { name: "Matte Red", colorCode: "#b22222" },
      { name: "Soft Red", colorCode: "#cd5c5c" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2200,
    relatedProducts: [62, 63, 71, 72, 73],
  },
  {
    id: 65,
    name: "YSL Lightly Tinted",
    image: "images/liptint/YSL Lightly Tinted.jpg",
    description:
      "A long-lasting liptint that provides a natural-looking flush of color.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Ruby Red", colorCode: "#ff0033" },
      { name: "Pastel Pink", colorCode: "#ff99cc" },
      { name: "Soft Peach", colorCode: "#c0c0c0" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1700,
    relatedProducts: [61, 63, 65, 66, 67],
  },
  {
    id: 66,
    name: "Mac Natural Glow Liptint",
    image: "images/liptint/Mac Natural Glow.jpg",
    description:
      "A natural-looking liptint that provides a healthy and flushed appearance.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Ruby Red", colorCode: "#ff0033" },
      { name: "Pink Petal", colorCode: "#ff69b4" },
      { name: "Crimson Red", colorCode: "#e0115f" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1200,
    relatedProducts: [61, 62],
  },
  {
    id: 67,
    name: "Maybelline Petal Push Liptint",
    image: "images/liptint/Maybelline Petal Push.jpg",
    description:
      "A long-lasting liptint that provides a natural-looking flush of color.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Classic Red", colorCode: "#e63946" },
      { name: "Deep Red", colorCode: "#d00000" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3000,
    relatedProducts: [62, 63, 65, 66, 67],
  },
  {
    id: 68,
    name: "Maybelline Radiant Blush Liptint",
    image: "images/liptint/Maybelline Radiant Blush.jpg",
    description:
      "A natural-looking liptint that provides a healthy and flushed appearance.",
    price: "350.00",
    originalPrice: "400.00",
    discount: "10%",
    colors: [
      { name: "Ruby Red", colorCode: "#ff0033" },
      { name: "Pastel Pink", colorCode: "#ff99cc" },
      { name: "Soft Peach", colorCode: "#c0c0c0" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 850,
    relatedProducts: [62, 63, 68, 69, 70],
  },
  {
    id: 69,
    name: "Dior Silken Sheen Liptint",
    image: "images/liptint/Dior Silken Sheen.jpg",
    description:
      "A long-lasting liptint that provides a natural-looking flush of color.",
    price: "100.00",
    originalPrice: "150.00",
    discount: "20%",
    colors: [
      { name: "Ruby Red", colorCode: "#ff0033" },
      { name: "Pastel Pink", colorCode: "#ff99cc" },
      { name: "Maroon", colorCode: "#aa1414" },
    ],
    rating: 4.5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1450,
    relatedProducts: [61, 62, 68, 69, 70],
  },
  {
    id: 70,
    name: "Dior Soft Tint",
    image: "images/liptint/Dior Soft Tint.jpg",
    description:
      "A soft and natural-looking liptint that provides a subtle wash of color.",
    price: "700.00",
    originalPrice: "800.00",
    discount: "10%",
    colors: [
      { name: "Pink Sparkle", colorCode: "#ff69 b4" },
      { name: "Orange Glow", colorCode: "#ffa07a" },
      { name: "Fuchsia Frenzy", colorCode: "#c71585" },
      { name: "Pastel Pink", colorCode: "#ff99cc" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1500,
    relatedProducts: [62, 63, 68, 69, 70],
  },
  {
    id: 71,
    name: "Dior Sweet Tint",
    image: "images/liptint/Dior Sweet Tint.jpg",
    description:
      "A long-lasting liptint that provides a natural-looking flush of color.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Ruby Red", colorCode: "#ff0033" },
      { name: "Pink Petal", colorCode: "#ff69b4" },
      { name: "Crimson Red", colorCode: "#e0115f" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2000,
    relatedProducts: [61, 62, 66, 67, 68],
  },
  {
    id: 72,
    name: "Avon Tint Whisper",
    image: "images/liptint/Avon Tint Whisper.jpg",
    description:
      "A soft and natural-looking liptint that provides a subtle wash of color.",
    price: "450.00",
    originalPrice: "500.00",
    discount: "10%",
    colors: [
      { name: "Ruby Red", colorCode: "#ff0033" },
      { name: "Pastel Pink", colorCode: "#ff99cc" },
      { name: "Soft Peach", colorCode: "#c0c0c0" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1300,
    relatedProducts: [61, 62, 66, 67, 68],
  },
  {
    id: 73,
    name: "Avon Tinted Kiss",
    image: "images/liptint/Avon Tinted Kiss.jpg",
    description:
      "A natural-looking liptint that provides a healthy and flushed appearance.",
    price: "550.00",
    originalPrice: "600.00",
    discount: "10%",
    colors: [
      { name: "Cherry Blossom", colorCode: "#ff3366" },
      { name: "Crimson Kiss", colorCode: "#cc0057" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2500,
    relatedProducts: [62, 63, 69, 70, 71],
  },
  {
    id: 74,
    name: "Nars Wine Liptint",
    image: "images/liptint/Nars Wine Liptint.jpg",
    description:
      "A long-lasting liptint that provides a natural-looking flush of color.",
    price: "600.00",
    originalPrice: "700.00",
    discount: "10%",
    colors: [
      { name: "Cherry", colorCode: "#b20d22" },
      { name: "Bright Cherry", colorCode: "#f49c9b" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1600,
    relatedProducts: [61, 62],
  },
  {
    id: 75,
    name: "Mac Lux Liptint",
    image: "images/liptint/Mac Lux.jpg",
    description:
      "A long-lasting liptint that provides a natural-looking flush of color.",
    price: "500.00",
    originalPrice: "550.00",
    discount: "10%",
    colors: [
      { name: "Rosy Glow", colorCode: "#ff6699" },
      { name: "Pink Punch", colorCode: "#ff3366" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1800,
    relatedProducts: [61, 62, 69, 70, 71],
  },
  {
    id: 76,
    name: "Maybelline Heavenly Texture Lipstick",
    image: "images/creamy/Maybelline Heavenly Texture.jpg",
    description:
      "A hydrating lipstick that provides a natural-looking flush of color.",
    price: "300.00",
    originalPrice: "400.00",
    discount: "20%",
    colors: [
      { name: "Cherry Cream", colorCode: "#e60023" },
      { name: "Brown", colorCode: "#b1773d" },
      { name: "Chestnut Cream", colorCode: "#a52a2a" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4500,
    relatedProducts: [77, 78, 88, 89, 90],
  },
  {
    id: 77,
    name: "Dreamy Cream Lipstick",
    image: "images/creamy/AVON Dreamy Cream.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Cherry Red", colorCode: "#ff4444" },
      { name: "Crimson Red", colorCode: "#8b0000" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3000,
    relatedProducts: [76, 78, 82, 83, 84],
  },
  {
    id: 78,
    name: "AVON Dreamy Smooth Lipstick",
    image: "images/creamy/AVON Dreamy Smooth.jpg",
    description:
      "A natural-looking lipstick that provides a healthy and flushed appearance.",
    price: "300.00",
    originalPrice: "350.00",
    discount: "10%",
    colors: [
      { name: "Ruby Red", colorCode: "#c8102e" },
      { name: "Crimson", colorCode: "#dc143c" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4000,
    relatedProducts: [76, 77, 84, 85, 86],
  },
  {
    id: 79,
    name: "YSL Cream Lipstick",
    image: "images/creamy/YSL Cream Lipstick.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "500.00",
    originalPrice: "600.00",
    discount: "15%",
    colors: [
      { name: "Matte Red", colorCode: "#b22222" },
      { name: "Soft Red", colorCode: "#cd5c5c" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2200,
    relatedProducts: [77, 78, 79, 80, 81],
  },
  {
    id: 80,
    name: "NARS Creamy Caress Lipstick",
    image: "images/creamy/NARS Creamy Caress.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Coral Blush", colorCode: "#b62046" },
      { name: "Berry Pop", colorCode: "#ff1744" },
      { name: "Cocoa Bliss", colorCode: "#8b4513" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear !" },
    ],
    reviewCount: 1700,
    relatedProducts: [76, 78, 88, 89, 90],
  },
  {
    id: 81,
    name: "DIOR Creamy Delight Lipstick",
    image: "images/creamy/DIOR Creamy Delight.jpg",
    description:
      "A natural-looking lipstick that provides a healthy and flushed appearance.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Scarlet Crush", colorCode: "#ff1f4c" },
      { name: "Peachy Pink", colorCode: "#ff80ab" },
      { name: "Cinnamon Spice", colorCode: "#a0522d" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1200,
    relatedProducts: [77, 78, 83, 84, 85],
  },
  {
    id: 82,
    name: "AVON Creamy Indulgence Lipstick",
    image: "images/creamy/AVON Creamy Indulgence.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Rosy Rouge", colorCode: "#ff5a5f" },
      { name: "Fuchsia Crush", colorCode: "#ff007f" },
      { name: "Toffee Cream", colorCode: "#cd853f" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3000,
    relatedProducts: [76, 78, 88, 89, 90],
  },
  {
    id: 83,
    name: "AVON Divine Comfort Lipstick",
    image: "images/creamy/AVON Divine Comfort.jpg",
    description:
      "A natural-looking lipstick that provides a healthy and flushed appearance.",
    price: "350.00",
    originalPrice: "400.00",
    discount: "10%",
    colors: [
      { name: "Berry", colorCode: "#9b59b6" },
      { name: "Dark Berry", colorCode: "#8e44ad" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 850,
    relatedProducts: [77, 78, 88, 89, 90],
  },
  {
    id: 84,
    name: "Maybelline Luxurious Velvet Lipstick",
    image: "images/creamy/Maybelline Luxurious Velvet.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "100.00",
    originalPrice: "150.00",
    discount: "20%",
    colors: [
      { name: "Rose Blossom", colorCode: "#e60073" },
      { name: "Petal Pink", colorCode: "#ff80aa" },
      { name: "Hazelnut Cream", colorCode: "#8b4513" },
    ],
    rating: 4.5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1450,
    relatedProducts: [76, 78, 84, 85, 86],
  },
  {
    id: 85,
    name: "YSL Rich Embrace Lipstick",
    image: "images/creamy/YSL Rich Embrace.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "700.00",
    originalPrice: "800.00",
    discount: "10%",
    colors: [
      { name: "Mauve", colorCode: "#e091b8" },
      { name: "Soft Mauve", colorCode: "#d597c9" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1500,
    relatedProducts: [77, 78, 84, 85, 86],
  },
  {
    id: 86,
    name: "MAC Silken Richness Lipstick",
    image: "images/creamy/MAC Silken Richness.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Berry", colorCode: "#6f2c4b" },
      { name: "Deep Berry", colorCode: "#af4b63" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2000,
    relatedProducts: [76, 78, 84, 85, 86],
  },
  {
    id: 87,
    name: "MAC Silky Smooth Lipstick",
    image: "images/creamy/MAC Silky Smooth.jpg",
    description:
      "A natural-looking lipstick that provides a healthy and flushed appearance.",
    price: "450.00",
    originalPrice: "500.00",
    discount: "10%",
    colors: [
      { name: "Nude", colorCode: "#f5d09b" },
      { name: "Soft Nude", colorCode: "#e6b19a" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1300,
    relatedProducts: [77, 78, 88, 89, 90],
  },
  {
    id: 88,
    name: "YSL Smooth Operator Lipstick",
    image: "images/creamy/YSL Smooth Operator.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "550.00",
    originalPrice: "600.00",
    discount: "10%",
    colors: [
      { name: "Plum", colorCode: "#5d3b57" },
      { name: "Deep Plum", colorCode: "#a84b88" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2500,
    relatedProducts: [76, 78, 88, 89, 90],
  },
  {
    id: 89,
    name: "Maybelline Soft Cream",
    image: "images/creamy/Maybelline Soft Cream.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "600.00",
    originalPrice: "700.00",
    discount: "10%",
    colors: [
      { name: "Cherry", colorCode: "#b20d22" },
      { name: "Bright Cherry", colorCode: "#f49c9b" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1600,
    relatedProducts: [77, 78, 82, 83, 84],
  },
  {
    id: 90,
    name: "YSL Velvet Kisses Lipstick",
    image: "images/creamy/YSL Velvet Kisses.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "500.00",
    originalPrice: "550.00",
    discount: "10%",
    colors: [
      { name: "Coral", colorCode: "#f65a94" },
      { name: "Soft Coral", colorCode: "#f9d8b4" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1800,
    relatedProducts: [76, 78, 82, 83, 84],
  },
  {
    id: 91,
    name: "Maybelline Barely There Bliss Lipstick",
    image: "images/sheer/Maybelline Barely There Bliss.jpg",
    description:
      "A hydrating lipstick that provides a natural-looking flush of color.",
    price: "300.00",
    originalPrice: "400.00",
    discount: "20%",
    colors: [
      { name: "Classic Red", colorCode: "#570549" },
      { name: "Dark Red", colorCode: "#b22222" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4500,
    relatedProducts: [92, 93, 103, 104, 105],
  },
  {
    id: 92,
    name: "Dior Princess Lipstick",
    image: "images/sheer/Dior Princess Lipsticks.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Cherry Red", colorCode: "#ff4444" },
      { name: "Crimson Red", colorCode: "#8b0000" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3000,
    relatedProducts: [91, 93, 103, 104, 105],
  },
  {
    id: 93,
    name: "Maybelline Delicate Dream Lipstick",
    image: "images/sheer/Maybelline Delicate Dream.jpg",
    description:
      "A natural-looking lipstick that provides a healthy and flushed appearance.",
    price: "300.00",
    originalPrice: "350.00",
    discount: "10%",
    colors: [
      { name: "Ruby Red", colorCode: "#c8102e" },
      { name: "Crimson", colorCode: "#dc143c" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4000,
    relatedProducts: [91, 92, 100, 101, 102],
  },
  {
    id: 94,
    name: "Mac Flirty Sheen Lipstick",
    image: "images/sheer/Mac Flirty Sheen.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "500.00",
    originalPrice: "600.00",
    discount: "15%",
    colors: [
      { name: "Matte Red", colorCode: "#b22222" },
      { name: "Soft Red", colorCode: "#cd5c5c" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2200,
    relatedProducts: [92, 93, 100, 101, 102],
  },
  {
    id: 95,
    name: "Avon Floating Petals Lipstick",
    image: "images/sheer/Avon Floating Petals.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Shimmer Red", colorCode: "#dd25b5" },
      { name: "Bright Red", colorCode: "#d91e18" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1700,
    relatedProducts: [91, 93, 94, 95, 96],
  },
  {
    id: 96,
    name: "Avon Gentle Touch Lipstick",
    image: "images/sheer/Avon Gentle Touch.jpg",
    description:
      "A natural-looking lipstick that provides a healthy and flushed appearance.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Coral", colorCode: "#ff7f50" },
      { name: "Bright Coral", colorCode: "#ff4500" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1200,
    relatedProducts: [92, 93, 94, 95, 96],
  },
  {
    id: 97,
    name: "NARS Light Embrace Lipstick",
    image: "images/sheer/NARS Light Embrace.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Classic Red", colorCode: "#e63946" },
      { name: "Deep Red", colorCode: "#d00000" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3000,
    relatedProducts: [91, 93, 98, 99, 100],
  },
  {
    id: 98,
    name: "Dior Lip Sheer Lipstick",
    image: "images/sheer/Dior Lip Sheer.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "350.00",
    originalPrice: "400.00",
    discount: "10%",
    colors: [
      { name: "Berry", colorCode: "#f79656" },
      { name: "Dark Berry", colorCode: "#8e44ad" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 850,
    relatedProducts: [92, 93, 101, 102, 103],
  },
  {
    id: 99,
    name: "YSL Natural Glow Lipstick",
    image: "images/sheer/YSL Natural Glow.jpg",
    description:
      "A natural-looking lipstick that provides a healthy and flushed appearance.",
    price: "100.00",
    originalPrice: "150.00",
    discount: "20%",
    colors: [
      { name: "Beige", colorCode: "#d8c7a6" },
      { name: "Warm Nude", colorCode: "#e4b169" },
    ],
    rating: 4.5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1450,
    relatedProducts: [91, 93, 99, 100, 101],
  },
  {
    id: 100,
    name: "Avon Radiant Sheen Lipstick",
    image: "images/sheer/Avon Radiant Sheen.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "700.00",
    originalPrice: "800.00",
    discount: "10%",
    colors: [
      { name: "Mauve", colorCode: "#e091b8" },
      { name: "Soft Mauve", colorCode: "#d597c9" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1500,
    relatedProducts: [92, 93, 99, 100, 101],
  },
  {
    id: 101,
    name: "MAC Sheer Whisper Lipstick",
    image: "images/sheer/MAC Sheer Whisper.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "400.00",
    originalPrice: " 450.00",
    discount: "10%",
    colors: [
      { name: "Berry", colorCode: "#6f2c4b" },
      { name: "Deep Berry", colorCode: "#af4b63" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2000,
    relatedProducts: [91, 93, 99, 100, 101],
  },
  {
    id: 102,
    name: "Dior Soft Glow Lipstick",
    image: "images/sheer/Dior Soft Glow.jpg",
    description:
      "A natural-looking lipstick that provides a healthy and flushed appearance.",
    price: "450.00",
    originalPrice: "500.00",
    discount: "10%",
    colors: [
      { name: "Nude", colorCode: "#f5d09b" },
      { name: "Soft Nude", colorCode: "#e6b19a" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1300,
    relatedProducts: [92, 93, 97, 98, 99],
  },
  {
    id: 103,
    name: "Dior Subtle Radiance Lipstick",
    image: "images/sheer/Dior Subtle Radiance.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "550.00",
    originalPrice: "600.00",
    discount: "10%",
    colors: [
      { name: "Plum", colorCode: "#5d3b57" },
      { name: "Deep Plum", colorCode: "#a84b88" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2500,
    relatedProducts: [91, 93, 101, 102, 103],
  },
  {
    id: 104,
    name: "YSL Tender Sheer Lipstick",
    image: "images/sheer/YSL Tender Sheer.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "600.00",
    originalPrice: "700.00",
    discount: "10%",
    colors: [
      { name: "Cherry", colorCode: "#b20d22" },
      { name: "Bright Cherry", colorCode: "#f49c9b" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1600,
    relatedProducts: [92, 93, 96, 97, 98],
  },
  {
    id: 105,
    name: "Maybelline Whispering Light Lipstick",
    image: "images/sheer/Maybelline Whispering Light.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "500.00",
    originalPrice: "550.00",
    discount: "10%",
    colors: [
      { name: "Coral", colorCode: "#f65a94" },
      { name: "Soft Coral", colorCode: "#f9d8b4" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1800,
    relatedProducts: [91, 93, 101, 102, 103],
  },
  {
    id: 106,
    name: "Avon Bold Crayon",
    image: "images/lipcrayon/Avon Bold Crayon.jpg",
    description:
      "A hydrating lip crayon that provides a natural-looking flush of color.",
    price: "150.00",
    originalPrice: "300.00",
    discount: "50%",
    colors: [
      { name: "Fiery Scarlet", colorCode: "#d50000" },
      { name: "Rosy Blush", colorCode: "#e57373" },
      { name: "Brick Red", colorCode: "#8b0000" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4500,
    relatedProducts: [107, 108, 118, 119, 120],
  },
  {
    id: 107,
    name: "NARS Chic Scribble",
    image: "images/lipcrayon/NARS Chic Scribble.jpg",
    description:
      "A soft and natural-looking lip crayon that provides a subtle wash of color.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Violet", colorCode: "#a71386" },
      { name: "Pastel Pink", colorCode: "#ff9999" },
      { name: "Cocoa Crush", colorCode: "#a52a2a" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3000,
    relatedProducts: [106, 108, 110, 111, 112],
  },
  {
    id: 108,
    name: "Maybelline Color Pop",
    image: "images/lipcrayon/Maybelline Color Pop.jpg",
    description:
      "A natural-looking lip crayon that provides a healthy and flushed appearance.",
    price: "300.00",
    originalPrice: "350.00",
    discount: "10%",
    colors: [
      { name: "Ruby Red", colorCode: "#c8102e" },
      { name: "Crimson", colorCode: "#dc143c" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4000,
    relatedProducts: [106, 107, 113, 114, 115],
  },
  {
    id: 109,
    name: "Dior Colorful Charm",
    image: "images/lipcrayon/Dior Colorful Charm.jpg",
    description:
      "A soft and natural-looking lip crayon that provides a subtle wash of color.",
    price: "500.00",
    originalPrice: "600.00",
    discount: "15%",
    colors: [
      { name: "Matte Red", colorCode: "#b22222" },
      { name: "Soft Red", colorCode: "#cd5c5c" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2200,
    relatedProducts: [107, 108, 110, 111, 112],
  },
  {
    id: 110,
    name: "Maybelline Crayon Chic",
    image: "images/lipcrayon/Maybelline Crayon Chic.jpg",
    description:
      "A long-lasting lip crayon that provides a natural-looking flush of color.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Shimmer Red", colorCode: "#dd25b5" },
      { name: "Bright Red", colorCode: "#d91e18" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1700,
    relatedProducts: [106, 108, 113, 114, 115],
  },
  {
    id: 111,
    name: "DIOR Crayon Crush",
    image: "images/lipcrayon/DIOR Crayon Crush.jpg",
    description:
      "A natural-looking lip crayon that provides a healthy and flushed appearance.",
    price: "200.00",
    originalPrice: "250.00",
    discount: "10%",
    colors: [
      { name: "Vermilion", colorCode: "#ff1c00" },
      { name: "Deep Pink", colorCode: "#ff1493" },
      { name: "Mahogany Red", colorCode: "#b22222" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1200,
    relatedProducts: [107, 108, 113, 114, 115],
  },
  {
    id: 112,
    name: "YSL Crayon Kiss",
    image: "images/lipcrayon/YSL Crayon Kiss.jpg",
    description:
      "A long-lasting lip crayon that provides a natural-looking flush of color.",
    price: "400.00",
    originalPrice: "450.00",
    discount: "10%",
    colors: [
      { name: "Classic Red", colorCode: "#e63946" },
      { name: "Deep Red", colorCode: "#d00000" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3000,
    relatedProducts: [106, 108, 112, 113, 114],
  },
  {
    id: 113,
    name: "NARS Creative Kiss",
    image: "images/lipcrayon/NARS Creative Kiss.jpg",
    description:
      "A soft and natural-looking lip crayon that provides a subtle wash of color.",
    price: "350.00",
    originalPrice: "400.00",
    discount: "10%",
    colors: [
      { name: "Crimson Crush", colorCode: "#dc143c" },
      { name: "Coral Charm", colorCode: "#ff6f61" },
      { name: "Wine Red", colorCode: "#8b3a3a" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 850,
    relatedProducts: [107, 108, 113, 114, 115],
  },
  {
    id: 114,
    name: "MAC Doodle Dream",
    image: "images/lipcrayon/MAC Doodle Dream.jpg",
    description:
      "A natural-looking lip crayon that provides a healthy and flushed appearance.",
    price: "100.00",
    originalPrice: "150.00",
    discount: "20%",
    colors: [
      { name: "Blush Cream", colorCode: "#ff6f91" },
      { name: "Wild Berry", colorCode: "#ff1744" },
      { name: "Espresso Cream", colorCode: "#8b4513" },
    ],
    rating: 4.5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1450,
    relatedProducts: [106, 108, 109, 110, 111],
  },
  {
    id: 115,
    name: "Maybelline Easy Glam",
    image: "images/lipcrayon/Maybelline Easy Glam.jpg",
    description:
      "A long-lasting lip crayon that provides a natural-looking flush of color.",
    price: "700.00",
    originalPrice: "800.00",
    discount: "10%",
    colors: [
      { name: "Mauve", colorCode: "#ff6f91" },
      { name: "Soft Mauve", colorCode: "#d597c9" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1500,
    relatedProducts: [107, 108, 112, 113, 114],
  },
  {
    id: 116,
    name: "Avon Fun Pop",
    image: "images/lipcrayon/Avon Fun Pop.jpg",
    description:
      "A long-lasting lip crayon that provides a natural-looking flush of color.",
    price: "400.00",
    originalPrice: " 450.00",
    discount: "10%",
    colors: [
      { name: "Fierce Red", colorCode: "#b22222" },
      { name: "Blush Glow", colorCode: "#ff6666" },
      { name: "Copper Crush", colorCode: "#d2691e" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2000,
    relatedProducts: [106, 108, 115, 116, 117],
  },
  {
    id: 117,
    name: "MAC Playful Strokes",
    image: "images/lipcrayon/MAC Playful Strokes.jpg",
    description:
      "A natural-looking lip crayon that provides a healthy and flushed appearance.",
    price: "450.00",
    originalPrice: "500.00",
    discount: "10%",
    colors: [
      { name: "Classic Red", colorCode: "#ff0000" },
      { name: "Sweet Peony", colorCode: "#ff69b4" },
      { name: "Terracotta", colorCode: "#a0522d" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1300,
    relatedProducts: [107, 108, 110, 111, 112],
  },
  {
    id: 118,
    name: "Avon Poppy Passion",
    image: "images/lipcrayon/Avon Poppy Passion.jpg",
    description:
      "A long-lasting lip crayon that provides a natural-looking flush of color.",
    price: "550.00",
    originalPrice: "600.00",
    discount: "10%",
    colors: [
      { name: "Candy Apple Red", colorCode: "#ff3030" },
      { name: "Bubblegum Pink", colorCode: "#ff6eb4" },
      { name: "Rich Mocha", colorCode: "#8b4513" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2500,
    relatedProducts: [106, 108, 114, 115, 116],
  },
  {
    id: 119,
    name: "NARS pop lip",
    image: "images/lipcrayon/NARS pop lip.jpg",
    description:
      "A soft and natural-looking lip crayon that provides a subtle wash of color.",
    price: "600.00",
    originalPrice: "700.00",
    discount: "10%",
    colors: [
      { name: "Scarlet Flame", colorCode: "#dc143c" },
      { name: "Pink Sorbet", colorCode: "#ff8cb4" },
      { name: "Spiced Maple", colorCode: "#a0522d" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1600,
    relatedProducts: [107, 108, 114, 115, 116],
  },
  {
    id: 120,
    name: "Scribbled Delight",
    image: "images/lipcrayon/NARS Scribbled Delight.jpg",
    description:
      "A long-lasting lip crayon that provides a natural-looking flush of color.",
    price: "500.00",
    originalPrice: "550.00",
    discount: "10 %",
    colors: [
      { name: "Ruby Rush", colorCode: "#b22222" },
      { name: "Fuchsia Fever", colorCode: "#ff1493" },
      { name: "Copper Glow", colorCode: "#b87333" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1800,
    relatedProducts: [106, 108, 117, 118, 119],
  },
  {
    id: 121,
    name: "Rouge Pur Couture The Bold",
    image: "images/collections/Rouge Pur Couture The Bold.jpg",
    description:
      "A hydrating lipstick that provides a natural-looking flush of color.",
    price: "1000.00",
    originalPrice: "1200.00",
    discount: "10%",
    colors: [
      { name: "Classic Red", colorCode: "#ff0000" },
      { name: "Dark Red", colorCode: "#b22222" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4500,
    relatedProducts: [122, 123, 124, 125],
  },
  {
    id: 122,
    name: "Rouge Pur Couture Night Edition",
    image: "images/collections/Rouge Pur Couture Night Edition.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "1500.00",
    originalPrice: "1800.00",
    discount: "10%",
    colors: [
      { name: "Cherry Red", colorCode: "#ff4444" },
      { name: "Crimson Red", colorCode: "#8b0000" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3000,
    relatedProducts: [121, 123, 124, 125],
  },
  {
    id: 123,
    name: "Rouge Pur Couture Satin",
    image: "images/collections/Rouge Pur Couture Satin.jpg",
    description:
      "A natural-looking lipstick that provides a healthy and flushed appearance.",
    price: "1499.00",
    originalPrice: "1700.00",
    discount: "10%",
    colors: [
      { name: "Ruby Red", colorCode: "#c8102e" },
      { name: "Crimson", colorCode: "#dc143c" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4000,
    relatedProducts: [121, , 122, 124, 125],
  },
  {
    id: 124,
    name: "Rouge Sur Mesure",
    image: "images/collections/Rouge Sur Mesure.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "1900.00",
    originalPrice: "2200.00",
    discount: "10%",
    colors: [
      { name: "Matte Red", colorCode: "#b22222" },
      { name: "Soft Red", colorCode: "#cd5c5c" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2200,
    relatedProducts: [121, 122, 123, 125],
  },
  {
    id: 125,
    name: "Tatouage Couture",
    image: "images/collections/Tatouage Couture.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "1900.00",
    originalPrice: "2200.00",
    discount: "10%",
    colors: [
      { name: "Shimmer Red", colorCode: "#ff6347" },
      { name: "Bright Red", colorCode: "#d91e18" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 1700,
    relatedProducts: [121, 122, 123, 124],
  },
  {
    id: 126,
    name: "Rouge Dior Forever Liquid",
    image: "images/collections/Rouge Dior Forever Liquid.jpg",
    description:
      "A hydrating lipstick that provides a natural-looking flush of color.",
    price: "1900.00",
    originalPrice: "2200.00",
    discount: "10%",
    colors: [
      { name: "Light Pink", colorCode: "#ffcccc" },
      { name: "Medium Pink", colorCode: "#ff66b3" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 5170,
    relatedProducts: [127, 128, 129, 130],
  },
  {
    id: 127,
    name: "Rouge Dior Couture Color",
    image: "images/collections/Rouge Dior Couture Color.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "1900.00",
    originalPrice: "2200.00",
    discount: "10%",
    colors: [
      { name: "Coral", colorCode: "#ff9966" },
      { name: "Peach", colorCode: "#ffcc66" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3200,
    relatedProducts: [126, 128, 129, 130],
  },
  {
    id: 128,
    name: "Rouge Dior Ultra Care",
    image: "images/collections/Rouge Dior Ultra Care.jpg",
    description:
      "A natural-looking lipstick that provides a healthy and flushed appearance.",
    price: "1900.00",
    originalPrice: "2200.00",
    discount: "10%",
    colors: [
      { name: "Fuchsia", colorCode: "#cc3366" },
      { name: "Lavender", colorCode: "#9966ff" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4100,
    relatedProducts: [126, 127, 129, 130],
  },
  {
    id: 129,
    name: "Rouge Dior Nude Look",
    image: "images/collections/Rouge Dior Nude Look.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "1900.00",
    originalPrice: "2200.00",
    discount: "10%",
    colors: [
      { name: "Rose", colorCode: "#ff6699" },
      { name: "Lime", colorCode: "#ccff66" },
    ],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2900,
    relatedProducts: [126, 127, 128, 130],
  },
  {
    id: 130,
    name: "Nourishing Body Butter",
    image: "images/collections/Rouge Dior Metallics.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "1900.00",
    originalPrice: "2200.00",
    discount: "10%",
    colors: [
      { name: "Light Pink", colorCode: "#ffcccc" },
      { name: "Medium Pink", colorCode: "#ff66b3" },
      { name: "Dark Pink", colorCode: "#cc0066" },
      { name: "Peach", colorCode: "#ffcc99" },
      { name: "Yellow", colorCode: "#ffff99" },
    ],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4500,
    relatedProducts: [126, 127, 128, 129],
  },
  {
    id: 131,
    name: "Margaret",
    image: "images/collections/Margaret.jpg",
    description:
      "A hydrating lipstick that provides a natural-looking flush of color.",
    price: "1000.00",
    originalPrice: "1200.00",
    discount: "10%",
    colors: [],
    rating: 0,
    reviews: [],
    reviewCount: 0,
    relatedProducts: [132, 133, 134, 135],
  },
  {
    id: 132,
    name: "Anna",
    image: "images/collections/Anna.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "1900.00",
    originalPrice: "2200.00",
    discount: "10%",
    colors: [],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 3200,
    relatedProducts: [131, 133, 134, 135],
  },
  {
    id: 133,
    name: "Audrey",
    image: "images/collections/Audrey.jpg",
    description:
      "A natural-looking lipstick that provides a healthy and flushed appearance.",
    price: "1900.00",
    originalPrice: "2200.00",
    discount: "10%",
    colors: [],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4100,
    relatedProducts: [131, 132, 134, 135],
  },
  {
    id: 134,
    name: "Brigitte",
    image: "images/collections/Brigitte.jpg",
    description:
      "A soft and natural-looking lipstick that provides a subtle wash of color.",
    price: "1900.00",
    originalPrice: "2200.00",
    discount: "10%",
    colors: [],
    rating: 4,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 4,
        text: "Great color and formula!",
      },
      { username: "Artemis", rating: 4, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 2900,
    relatedProducts: [131, 132, 133, 135],
  },
  {
    id: 135,
    name: "Vivien",
    image: "images/collections/Vivien.jpg",
    description:
      "A long-lasting lipstick that provides a natural-looking flush of color.",
    price: "1900.00",
    originalPrice: "2200.00",
    discount: "10%",
    colors: [],
    rating: 5,
    reviews: [
      {
        username: "Rainier Malaga",
        rating: 5,
        text: "Love the color and formula!",
      },
      { username: "Artemis", rating: 5, text: "Perfect for everyday wear!" },
    ],
    reviewCount: 4500,
    relatedProducts: [131, 132, 133, 134],
  },
];

// Function to generate HTML for a single related product
function generateProductHTML(product) {
  return `
        <li class="scrollbar-item">
            <div class="shop-card">
                <div class="card-banner img-holder" style="--width: 540; --height: 720">
                    <img src="${
                      product.image
                    }" width="540" height="720" loading="lazy" alt="${
    product.name
  }" class="img-cover" />
                    <span class="badge" aria-label="${product.discount}">${
    product.discount ? `-${product.discount}` : ""
  }</span>
                    <div class="card-actions">
                        <button class="action-btn" aria-label="add to cart">
                            <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        </button>
                        <button class="action-btn" aria-label="add to wishlist">
                            <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                        </button>
                        <button class="action-btn" aria-label="reserve">
                            <ion-icon name="book-outline" aria-hidden="true"></ion-icon>
                        </button>
                    </div>
                </div>
                <div class="card-content">
                    <div class="price">
                        <del class="del">₱${product.originalPrice}</del>
                        <span class="span">₱${product.price}</span>
                    </div>
                    <h3><a href="product-detail.html?id=${
                      product.id
                    }" class="card-title">${product.name}</a></h3>
                    <div class="card-rating">
                        <div class="rating-wrapper" aria-label="${
                          product.rating
                        }-star rating">
                            ${'<ion-icon name="star" aria-hidden="true"></ion-icon>'.repeat(
                              product.rating
                            )}
                        </div>
                        <p class="rating-text">${product.reviewCount} review${
    product.reviewCount > 1 ? "s" : ""
  }</p>
                    </div>
                    <div class="color-shades">
                        <h4 class="color-title">Available Colors:</h4>
                        <div class="color-options">
                            ${product.colors
                              .map(
                                (color) => `
                                <div class="color-swatch-container">
                                    <span class="color-swatch" style="background-color: ${color.colorCode};" aria-label="${color.name}"></span>
                                    <span class="color-tooltip">${color.name}</span>
                                </div>
                            `
                              )
                              .join("")}
                        </div>
                    </div>
                </div>
            </div>
        </li>
    `;
}

let currentProductId; // Declare a variable to hold the current product ID

// Function to display product details
function displayProductDetails(productId) {
  const product = products.find((p) => p.id === productId);

  if (product) {
    currentProductId = productId; // Set current product ID for review submission
    document.getElementById("product-name").textContent = product.name;
    document.getElementById("product-image").src = product.image;
    document.getElementById("product-description").textContent =
      product.description || "No description available.";
    document.getElementById("product-price").textContent = `₱${product.price}`;
    document.getElementById("product-review-count").textContent = `${
      product.reviewCount
    } review${product.reviewCount > 1 ? "s" : ""}`; // Set review count

    // Populate available colors
    const colorOptionsContainer = document.getElementById("color-options");
    colorOptionsContainer.innerHTML = ""; // Clear existing colors
    product.colors.forEach((color) => {
      const swatchContainer = document.createElement("div");
      swatchContainer.classList.add("color-swatch-container");

      const swatch = document.createElement("span");
      swatch.classList.add("color-swatch");
      swatch.style.backgroundColor = color.colorCode;

      // Tooltip for color name
      const tooltip = document.createElement("span");
      tooltip.classList.add("color-tooltip");
      tooltip.textContent = color.name;

      // Show tooltip on hover
      swatchContainer.appendChild(swatch);
      swatchContainer.appendChild(tooltip);
      colorOptionsContainer.appendChild(swatchContainer);
    });

    // Populate reviews
    const reviewsContainer = document.getElementById("reviews-container");
    reviewsContainer.innerHTML = ""; // Clear existing reviews
    product.reviews.forEach((review) => {
      const reviewDiv = document.createElement("div");
      reviewDiv.classList.add("review-item");
      reviewDiv.innerHTML = `
                <div class="review-rating">${"★".repeat(review.rating)}</div>
                 <p><strong>${review.username}:</strong> ${review.text}</p>
            `;
      reviewsContainer.appendChild(reviewDiv);
    });

    // Populate related products
    const relatedProductsContainer = document.getElementById(
      "related-products-list"
    );
    relatedProductsContainer.innerHTML = ""; // Clear existing related products
    product.relatedProducts.forEach((relatedId) => {
      const relatedProduct = products.find((p) => p.id === relatedId);
      if (relatedProduct) {
        relatedProductsContainer.innerHTML +=
          generateProductHTML(relatedProduct);
      }
    });
  } else {
    console.error("Product not found");
  }
}

// Handle review submission
document
  .getElementById("review-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const rating = parseInt(document.getElementById("rating").value);
    const reviewText = document.getElementById("review-input").value;

    const newReview = { rating: rating, text: reviewText };
    const product = products.find((p) => p.id === currentProductId); // Use the current product ID

    if (product) {
      product.reviews.push(newReview); // Add the new review to the product
      product.reviewCount++; // Increment the review count
      displayProductDetails(currentProductId); // Refresh the displayed details
      document.getElementById("review-form").reset(); // Reset the form
    }
  });

// Initialize product details on page load
document.addEventListener("DOMContentLoaded", () => {
  const urlParams = new URLSearchParams(window.location.search);
  const productIdFromURL = parseInt(urlParams.get("id")) || 1; // Get product ID from URL, default to 1
  displayProductDetails(productIdFromURL);
});
