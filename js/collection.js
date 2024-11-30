// collection.js

// Collection Section
const collectionCards = document.querySelectorAll(".collection-card");

collectionCards.forEach((card) => {
  card.addEventListener("mouseover", () => {
    card.classList.add("hover");
  });

  card.addEventListener("mouseout", () => {
    card.classList.remove("hover");
  });
});

// Products Section
const shopCards = document.querySelectorAll(".shop-card");

shopCards.forEach((card) => {
  card.addEventListener("mouseover", () => {
    card.classList.add("hover");
  });

  card.addEventListener("mouseout", () => {
    card.classList.remove("hover");
  });
});

// Add event listener to shop card buttons
const shopCardButtons = document.querySelectorAll(".shop-card .action-btn");

shopCardButtons.forEach((button) => {
  button.addEventListener("click", () => {
    // Add functionality here
  });
});
