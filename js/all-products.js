document.addEventListener('DOMContentLoaded', function () {
  const colorSwatchContainers = document.querySelectorAll('.color-swatch-container');

  colorSwatchContainers.forEach((container) => {
    container.addEventListener('mouseenter', function () {
      const tooltip = container.querySelector('.color-tooltip');
      tooltip.style.display = 'block';
    });

    container.addEventListener('mouseleave', function () {
      const tooltip = container.querySelector('.color-tooltip');
      tooltip.style.display = 'none';
    });
  });
});
