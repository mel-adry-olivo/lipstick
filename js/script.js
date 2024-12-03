'use strict';

// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', function () {
  const addEventOnElem = function (elem, type, callback) {
    if (elem instanceof NodeList) {
      elem.forEach((element) => {
        element.addEventListener(type, callback);
      });
    } else {
      elem.addEventListener(type, callback);
    }
  };

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
