// Sorting Functionality
document.addEventListener("DOMContentLoaded", function () {
  const sortBySelect = document.querySelector(".sort-by select");
  const productLists = document.querySelectorAll(".has-scrollbar"); // Select all product lists

  sortBySelect.addEventListener("change", function () {
    const sortValue = sortBySelect.value;

    // Create an array to hold all product elements
    let products = [];

    // Loop through each product list and collect products
    productLists.forEach((list) => {
      const items = Array.from(list.children);
      products = products.concat(items); // Combine products into one array
    });

    // Sort the products based on the selected criteria
    products.sort((a, b) => {
      const priceA = parseFloat(
        a.querySelector(".span").textContent.replace("$", "")
      );
      const priceB = parseFloat(
        b.querySelector(".span").textContent.replace("$", "")
      );
      const nameA = a.querySelector(".card-title").textContent.toLowerCase();
      const nameB = b.querySelector(".card-title").textContent.toLowerCase();

      switch (sortValue) {
        case "price-asc":
          return priceA - priceB;
        case "price-desc":
          return priceB - priceA;
        case "name-asc":
          return nameA.localeCompare(nameB);
        case "name-desc":
          return nameB.localeCompare(nameA);
        case "oldest":
          return 0; // Implement your logic for oldest if applicable
        case "newest":
          return 0; // Implement your logic for newest if applicable
        default:
          return 0; // No sorting
      }
    });

    // Clear existing products from the lists
    productLists.forEach((list) => {
      list.innerHTML = "";
    });

    // Append sorted products back to the lists
    // Distributing products back to the lists
    const productsPerList = Math.ceil(products.length / productLists.length); // Calculate how many products per list
    products.forEach((product, index) => {
      const targetListIndex = Math.floor(index / productsPerList); // Determine which list to append to
      if (targetListIndex < productLists.length) {
        productLists[targetListIndex].appendChild(product); // Append to the appropriate list
      }
    });
  });

  // Color swatch tooltips
  const colorSwatchContainers = document.querySelectorAll(
    ".color-swatch-container"
  );

  colorSwatchContainers.forEach((container) => {
    container.addEventListener("mouseenter", function () {
      const tooltip = container.querySelector(".color-tooltip");
      tooltip.style.display = "block";
    });

    container.addEventListener("mouseleave", function () {
      const tooltip = container.querySelector(".color-tooltip");
      tooltip.style.display = "none";
    });
  });
});
