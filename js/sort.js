document.addEventListener('change', (e) => {
  const listContainer = document.querySelector('.has-scrollbar');
  const items = Array.from(listContainer.querySelectorAll('.scrollbar-item'));

  function getPrice(item) {
    const priceText = item.querySelector('.price .span').textContent.trim();
    return parseFloat(priceText.replace(/[₱,]/g, ''));
  }

  function getName(item) {
    return item.querySelector('.card-title').textContent.trim().toLowerCase();
  }

  if (e.target.matches('.sort-by select')) {
    const selectedOption = e.target.value;
    console.log(selectedOption);

    switch (selectedOption) {
      case 'price-asc':
        items.sort((a, b) => getPrice(a) - getPrice(b));
        break;
      case 'price-desc':
        items.sort((a, b) => getPrice(b) - getPrice(a));
        break;
      case 'name-asc':
        items.sort((a, b) => getName(a).localeCompare(getName(b)));
        break;
      case 'name-desc':
        items.sort((a, b) => getName(b).localeCompare(getName(a)));
        break;
      default:
        return;
    }

    listContainer.innerHTML = '';
    items.forEach((item) => listContainer.appendChild(item));
  }
});
