import 'flowbite';

document.addEventListener("DOMContentLoaded", () => {
    const burgerMenu = document.querySelector(".burger-menu");
    const navList = document.querySelector(".nav-list");

    burgerMenu.addEventListener("click", () => {
        navList.classList.toggle("active");
    });
});
// -------------навбар------------
document.addEventListener("DOMContentLoaded", () => {
  
    const toggleIcons = document.querySelectorAll(".toggle-dropdown");
  
    toggleIcons.forEach(icon => {
      icon.addEventListener("click", (e) => {
        e.preventDefault(); 
        const parentItem = icon.closest(".nav-item"); 
  
        document.querySelectorAll(".nav-item").forEach(item => {
          if (item !== parentItem) {
            item.classList.remove("active");
          }
        });
  
        parentItem.classList.toggle("active");
      });
    });
  });
// -----------------слайдер----------------------
document.addEventListener("DOMContentLoaded", () => {
  const sliderTrack = document.getElementById('slider-track');
  const slides = document.querySelectorAll('#slider-track > div');
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');

  let currentIndex = 0;

  // Функция для подсчета ширины слайдов и видимой области
  function calculateSizes() {
      const containerWidth = sliderTrack.parentElement.offsetWidth; 
      let slidesPerView = 4; 

      // Адаптивное количество карточек
      if (containerWidth < 1024) slidesPerView = 3;
      if (containerWidth < 768) slidesPerView = 2;
      if (containerWidth < 640) slidesPerView = 1;

      const slideWidth = containerWidth / slidesPerView; 

      slides.forEach(slide => {
          slide.style.minWidth = `${slideWidth}px`; 
      });

      return { slideWidth, slidesPerView };
  }

  // Функция обновления позиции слайдера
  function updateSliderPosition(slideWidth, slidesPerView) {
      const maxIndex = Math.max(slides.length - slidesPerView, 0); 
      currentIndex = Math.min(Math.max(currentIndex, 0), maxIndex); 
      sliderTrack.style.transform = `translateX(-${currentIndex * slideWidth}px)`; 
  }

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

  window.addEventListener('resize', () => {
      const { slideWidth, slidesPerView } = calculateSizes();
      updateSliderPosition(slideWidth, slidesPerView);
  });

  
  const { slideWidth, slidesPerView } = calculateSizes();
  updateSliderPosition(slideWidth, slidesPerView);
});
// ------------------галерея-------------------------------------
document.getElementById("toggleButton").addEventListener("click", function () {
  const gallery = document.getElementById("gallery");
  const button = this;


  const fullHeight = gallery.scrollHeight + "px";

  if (gallery.style.maxHeight === "500px" || !gallery.style.maxHeight) {
      gallery.style.maxHeight = fullHeight; 
      button.textContent = "Show Less";
  } else {
      gallery.style.maxHeight = "500px"; 
      button.textContent = "Show More";
  }
});
// -------------------------------textarea---------------------------------
const textarea = document.getElementById("message");

textarea.addEventListener("input", function () {
    this.style.height = "auto"; 
    this.style.height = `${Math.min(this.scrollHeight, 100)}px`; 
});
// -------------------------------------------------------------------


  



