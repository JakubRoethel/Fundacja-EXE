export default function hoverService() {
  // Pobieranie wszystkich elementów nawigacji
  const navItems = document.querySelectorAll('.slider-title-wrapper');
  
  // Pobieranie wszystkich zawartości
  const singleSlides = document.querySelectorAll('.single-slide');
  
  // Przypisanie klasy active dla pierwszego elementu nawigacji i pierwszej zawartości
  navItems[0].classList.add('active');
  singleSlides[0].classList.add('active-slide');

  // Iterowanie przez elementy nawigacji
  navItems.forEach((navItem, index) => {
    // Zmiana nasłuchiwacza z kliknięcia na najechanie myszką (hover)
    navItem.addEventListener('mouseover', () => {
      // Usunięcie klasy active ze wszystkich elementów nawigacji
      navItems.forEach((item) => {
        item.classList.remove('active');
      });

      // Dodanie klasy active do najechanego elementu nawigacji
      navItem.classList.add('active');

      // Usunięcie klasy active-slide ze wszystkich zawartości
      singleSlides.forEach((slide) => {
        slide.classList.remove('active-slide');
      });

      // Dodanie klasy active-slide do odpowiedniej zawartości zgodnie z indeksem
      singleSlides[index].classList.add('active-slide');
    });
  });


  const hoverItems = document.querySelectorAll('.slider-one .entry-summary');
  const contentWrappers = document.querySelectorAll('.slider-one .entry-summary .content-wrapper');
  
  hoverItems.forEach((hoverItem, index) => {
    const contentWrapper = contentWrappers[index];
  
    hoverItem.addEventListener('mouseover', () => {
      contentWrapper.classList.add('show');
    });
  
    hoverItem.addEventListener('mouseout', () => {
      contentWrapper.classList.remove('show');
    });
  });


}
