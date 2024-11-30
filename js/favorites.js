// JavaScript to toggle favorites
const favouritesIcon = document.getElementById('favourites-icon');
const favouritesOverlay = document.getElementById('favourites-overlay');
const closeFavouritesBtn = document.getElementById('close-favourites-btn');

// Open favourites when favourites icon is clicked
favouritesIcon.addEventListener('click', () => {
    favouritesOverlay.classList.add('active');
});

// Close favourites when close button is clicked
closeFavouritesBtn.addEventListener('click', () => {
    favouritesOverlay.classList.remove('active');
});