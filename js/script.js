'use strict';

// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', function () {
  // Get the Shop Now buttons by their IDs
  const shopNowButton1 = document.getElementById('shopNowButton1');
  const shopNowButton3 = document.getElementById('shopNowButton3');
  const shopNowButton4 = document.getElementById('shopNowButton4');

  // Check if the second shopNowButton1 exists
  if (shopNowButton1) {
    // Add click event listener to the second button
    shopNowButton1.addEventListener('click', function (event) {
      // Prevent the default anchor link behavior
      event.preventDefault();

      // Redirect to all-products.html
      window.location.href = 'all-products.html';
    });
  }

  if (shopNowButton3) {
    shopNowButton3.addEventListener('click', function (event) {
      event.preventDefault();
      window.location.href = 'collection.html'; // Redirect to collection.html
    });
  }

  if (shopNowButton4) {
    shopNowButton4.addEventListener('click', function (event) {
      event.preventDefault();
      window.location.href = 'all-products.html'; // Redirect to all-products.html
    });
  }

  // Function to add event on element
  const addEventOnElem = function (elem, type, callback) {
    if (elem instanceof NodeList) {
      elem.forEach((element) => {
        element.addEventListener(type, callback);
      });
    } else {
      elem.addEventListener(type, callback);
    }
  };

  // Navbar toggle
  const navTogglers = document.querySelectorAll('[data-nav-toggler]');
  const navbar = document.querySelector('[data-navbar]');
  const navbarLinks = document.querySelectorAll('[data-nav-link]');
  const overlay = document.querySelector('[data-overlay]');

  const toggleNavbar = function () {
    navbar.classList.toggle('active');
    overlay.classList.toggle('active');
  };

  addEventOnElem(navTogglers, 'click', toggleNavbar);

  const closeNavbar = function () {
    navbar.classList.remove('active');
    overlay.classList.remove('active');
  };

  addEventOnElem(navbarLinks, 'click', closeNavbar);

  // Header sticky & back top button active
  const header = document.querySelector('[data-header]');
  const backTopBtn = document.querySelector('[data-back-top-btn]');
  let lastScrollY = 0;

  const headerActive = function () {
    const currentScroll = window.scrollY;
    if (currentScroll > lastScrollY) {
      header?.classList.add('active');
      backTopBtn?.classList.add('active');
    } else {
      header?.classList.remove('active');
      backTopBtn?.classList.remove('active');
    }
  };

  addEventOnElem(window, 'scroll', headerActive);

  let lastScrolledPos = 0;

  const headerSticky = function () {
    if (lastScrolledPos >= window.scrollY) {
      header?.classList.remove('header-hide');
    } else {
      header?.classList.add('header-hide');
    }

    lastScrolledPos = window.scrollY;
  };

  addEventOnElem(window, 'scroll', headerSticky);

  // Scroll reveal effect
  const sections = document.querySelectorAll('[data-section]');

  const scrollReveal = function () {
    for (let i = 0; i < sections.length; i++) {
      if (sections[i].getBoundingClientRect().top < window.innerHeight / 2) {
        sections[i].classList.add('active');
      }
    }
  };

  scrollReveal();

  addEventOnElem(window, 'scroll', scrollReveal);
});
