import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {
    const burgerMenu = document.querySelector(".burger-menu");
    const navList = document.querySelector(".nav-list");

    burgerMenu.addEventListener("click", () => {
        navList.classList.toggle("active");
    });
});
// -------------------------
document.addEventListener("DOMContentLoaded", () => {
    // Находим все элементы, которые открывают меню
    const toggleIcons = document.querySelectorAll(".toggle-dropdown");
  
    toggleIcons.forEach(icon => {
      icon.addEventListener("click", (e) => {
        e.preventDefault(); // Предотвращаем переход по ссылке
        const parentItem = icon.closest(".nav-item"); // Находим родительский элемент
  
        // Закрываем все остальные открытые меню
        document.querySelectorAll(".nav-item").forEach(item => {
          if (item !== parentItem) {
            item.classList.remove("active");
          }
        });
  
        // Переключаем класс active для текущего меню
        parentItem.classList.toggle("active");
      });
    });
  });
  


