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
// ---------------------------------------
document.addEventListener("DOMContentLoaded", () => {
  const sliderTrack = document.getElementById('slider-track');
  const slides = document.querySelectorAll('#slider-track > div');
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');

  let currentIndex = 0;

  // Функция для подсчета ширины слайдов и видимой области
  function calculateSizes() {
      const containerWidth = sliderTrack.parentElement.offsetWidth; // Ширина видимой области
      let slidesPerView = 4; // Количество карточек по умолчанию

      // Адаптивное количество карточек
      if (containerWidth < 1024) slidesPerView = 3;
      if (containerWidth < 768) slidesPerView = 2;
      if (containerWidth < 640) slidesPerView = 1;

      const slideWidth = containerWidth / slidesPerView; // Ширина одной карточки

      slides.forEach(slide => {
          slide.style.minWidth = `${slideWidth}px`; // Устанавливаем ширину карточек
      });

      return { slideWidth, slidesPerView };
  }

  // Функция обновления позиции слайдера
  function updateSliderPosition(slideWidth, slidesPerView) {
      const maxIndex = Math.max(slides.length - slidesPerView, 0); // Максимальный индекс
      currentIndex = Math.min(Math.max(currentIndex, 0), maxIndex); // Ограничиваем индекс
      sliderTrack.style.transform = `translateX(-${currentIndex * slideWidth}px)`; // Смещение трека
  }

  // Обработчики для кнопок
  prevBtn.addEventListener('click', () => {
      currentIndex--;
      const { slideWidth, slidesPerView } = calculateSizes();
      updateSliderPosition(slideWidth, slidesPerView);
  });

  nextBtn.addEventListener('click', () => {
      currentIndex++;
      const { slideWidth, slidesPerView } = calculateSizes();
      updateSliderPosition(slideWidth, slidesPerView);
  });

  // Обновление размеров и позиции при изменении размера окна
  window.addEventListener('resize', () => {
      const { slideWidth, slidesPerView } = calculateSizes();
      updateSliderPosition(slideWidth, slidesPerView);
  });

  // Начальная установка
  const { slideWidth, slidesPerView } = calculateSizes();
  updateSliderPosition(slideWidth, slidesPerView);
});

  
  


