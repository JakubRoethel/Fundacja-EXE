export default function headerService() {
  const header = document.querySelector('header');

  function handleScroll() {
    const scrollPosition = window.scrollY;
    const headerOffset = header.offsetTop;

    if (scrollPosition > headerOffset) {
      header.classList.add('scroll');
    } else {
      header.classList.remove('scroll');
    }
  }

  window.addEventListener('scroll', handleScroll);

  const burger = document.querySelector(".header__toggle");
  const headerOverlay = document.querySelector(".navigation__overlay");
  const closeIcon = document.querySelector(".close-icon");
  const menuItems = document.querySelectorAll('.navigation__list li');
  const body = document.body;

  function toggleMenu() {
    header.classList.toggle("header--navigation-open");
    body.classList.toggle("noscroll");
  }

  function closeMenu() {
    header.classList.remove("header--navigation-open");
    body.classList.remove("noscroll");
  }

  function handleBurgerClick() {
    toggleMenu();
  }

  function handleOverlayClick() {
    closeMenu();
  }

  function handleCloseIconClick() {
    closeMenu();
  }

  function handleMenuItemClick() {
    closeMenu();
  }

  burger.addEventListener("click", handleBurgerClick);
  headerOverlay.addEventListener("click", handleOverlayClick);
  closeIcon.addEventListener("click", handleCloseIconClick);

  menuItems.forEach(item => {
    item.addEventListener('click', handleMenuItemClick);
  });
}
