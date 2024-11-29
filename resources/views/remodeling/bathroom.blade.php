@extends('layouts.app')
@section('content')
    <div class="w-full bg-[url(/public/img/carpentry/home-page.jpg)]">
        <div class="flex flex-col text-center text-[var(--color)] py-40">
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Get your dream washroom</p>
            <p style="font-size: var(--title-start);" class=" font-semibold leading-[70px]">Bathroom remodeling</p>
            <p style="font-size: var(--base-text);" class="px-5 max-w-[700px] m-auto">Make your dream bathroom a reality with
                the help of our expert remodeling team. Just let us know what your vision is, and we’ll take care of the
                rest.</p>
        </div>
    </div>

    {{-- --------------------------------------------- --}}
    <div class="max-w-[1400px] m-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-20 p-10">

            <div class="flex flex-col justify-center text-center">
                <i style="font-size: 80px;" class="fa-regular fa-circle-check mb-5 text-[var(--accent-color)]"></i>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Custom designs</p>
                <div style="font-size:var(--comment)" class="">Our work is completely custom, so we can build anything
                    you’re dreaming up.</div>
            </div>
            <div class="flex flex-col justify-center text-center">
                <i style="font-size: 80px;" class="fa-regular fa-circle-check mb-5 text-[var(--accent-color)]"></i>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Hands-free work</p>
                <div style="font-size:var(--comment)" class="">Just let us know your vision and leave the rest to us.
                </div>
            </div>
            <div class="flex flex-col justify-center text-center">
                <i style="font-size: 80px;" class="fa-regular fa-circle-check mb-5 text-[var(--accent-color)]"></i>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Clean workspace</p>
                <div style="font-size:var(--comment)" class="">We’ll leave your home better than we found it with a
                    clean, organized result.</div>
            </div>
            <div class="flex flex-col justify-center text-center">
                <i style="font-size: 80px;" class="fa-regular fa-circle-check mb-5 text-[var(--accent-color)]"></i>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Licensed & insured team
                </p>
                <div style="font-size:var(--comment)" class="">Our team is fully licnensed and insured for your
                    safety.</div>
            </div>

        </div>
    </div>
    {{-- -------------------------------------------------------------------------- --}}
    <div class="max-w-[1400px] m-auto flex flex-wrap mt-10">
        <!-- Первое изображение -->
        <div class="lg:w-1/2 px-10 py-10 lg:order-2 order-1">
            <img src="{{ asset('img/bathroom/IMG_1842-scaled.jpeg') }}" alt="">
        </div>

        <!-- Первый блок с текстом -->
        <div class="lg:w-1/2 px-10 py-5 lg:order-1 order-2 flex flex-col items-center justify-center">
            <div>
                <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Make your idea a
                    reality</p>
                <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Custom bathroom
                    services</p>
                <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Every home is different and
                    needs specific modifications to make it your own. We can make your wildest dreams come true with
                    completely custom woodworking and bathroom. Whether you need a simple doorframe or custom piece, we can
                    help you out.</div>
            </div>
        </div>
    </div>
    {{-- --------------------------------------ICON---------------------------------------- --}}
    <div class="w-full">
        <div class="max-w-[1400px] m-auto py-20">
            <div class="mb-10">
                <p style="font-size: var(--context);" class="text-center font-semibold text-[var(--accent-color)]">
                    Comprehensive remodel</p>
                <p style="font-size: var(--title);" class="text-center font-semibold text-[var(--support-color)]">We work
                    with every aspect of your bathroom</p>
            </div>
            <div class="flex justify-center flex-wrap lg:gap-[100px] gap-[40px]">
                <div>
                    <img class="w-[140px] m-auto" src="{{ asset('img/bathroom/Plumbing-and-accessories.png') }}"
                        alt="">
                    <p style="font-size: var(--context);"
                        class="max-w-[150px] text-center font-semibold text-[var(--accent-color)]">Plumbing and accessories
                    </p>
                </div>
                <div>
                    <img class="w-[140px] m-auto" src="{{ asset('img/bathroom/Wall-coverings-and-paint.png') }}"
                        alt="">
                    <p style="font-size: var(--context);"
                        class="max-w-[150px] text-center font-semibold text-[var(--accent-color)]">Wall coverings and paint
                    </p>
                </div>
                <div>
                    <img class="w-[140px] m-auto" src="{{ asset('img/bathroom/Layout-changes.png') }}" alt="">
                    <p style="font-size: var(--context);"
                        class="max-w-[150px] text-center font-semibold text-[var(--accent-color)]">Layout changes</p>
                </div>
                <div>
                    <img class="w-[140px] m-auto" src="{{ asset('img/bathroom/Flooring-and-tile.png') }}" alt="">
                    <p style="font-size: var(--context);"
                        class="max-w-[150px] text-center font-semibold text-[var(--accent-color)]">Flooring and tile</p>
                </div>
                <div>
                    <img class="w-[140px] m-auto" src="{{ asset('img/bathroom/Showers-and-bath.png') }}" alt="">
                    <p style="font-size: var(--context);"
                        class="max-w-[150px] text-center font-semibold text-[var(--accent-color)]">Showers and bath</p>
                </div>
                <div>
                    <img class="w-[140px] m-auto" src="{{ asset('img/bathroom/Lighting.png') }}" alt="">
                    <p style="font-size: var(--context);"
                        class="max-w-[150px] text-center font-semibold text-[var(--accent-color)]">Lighting</p>
                </div>
            </div>
        </div>
    </div>

    @include('support.home')

    <div class="max-w-[1400px] m-auto flex flex-wrap mt-10">
        <div class="lg:w-1/2 px-10 py-5 order-3">
            <img src="{{ asset('img/bathroom/IMG_9091-scaled.jpeg') }}" alt="">
        </div>

        <!-- Второй блок с текстом -->
        <div class="lg:w-1/2 px-10 py-5 order-4 flex flex-col items-center justify-center">
            <div>
                <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Done exactly how you want</p>
                <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Build your dream bathroom with custom services</p>
                <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Get a beautiful, functional bathroom that ties into the overall style of your home. Our expert bathroom remodelers can make your vision a reality no matter your dream outcome. From simple changes to complete bathroom makeovers, we’re here to help.
                </div>
            </div>
        </div>
    </div>
{{-- -------------------------------------------MODAL GALLERY------------------------------------------ --}}

<div class="w-full bg-[--default-color]" id="modal-gallery">
    <div class="max-w-[1400px] m-auto py-10">
        <div class="text-center mb-5">
            <p style="font-size: var(--context);" class="text-[var(--accent-color)] font-semibold">Some of our work</p>
            <p style="font-size: var(--title);" class=" font-semibold">Before and after photos</p>
        </div>
        
        <div class="flex flex-wrap justify-center gap-10 p-5">
            <!-- Контейнеры с изображениями -->
            <div class="image-container w-[600px] h-[600px] relative cursor-pointer">
                <img class="w-full h-full object-cover" src="{{ asset('/img/bathroom/1.jpg') }}" alt="">
                <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-white bg-black bg-opacity-50">
                    <p>Triple Crown Blvd</p>
                    <p><i class="fa-solid fa-location-dot"></i> Knoxville, TN</p>
                </div>
            </div>
        
            <div class="image-container w-[600px] h-[600px] relative cursor-pointer">
                <img class="w-full h-full object-cover" src="{{ asset('/img/bathroom/2.jpg') }}" alt="">
                <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-white bg-black bg-opacity-50">
                    <p>Triple Crown Blvd</p>
                    <p><i class="fa-solid fa-location-dot"></i> Knoxville, TN</p>
                </div>
            </div>
        
            <div class="image-container w-[600px] h-[600px] relative cursor-pointer">
                <img class="w-full h-full object-cover" src="{{ asset('/img/bathroom/3.jpg') }}" alt="">
                <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-white bg-black bg-opacity-50">
                    <p>Triple Crown Blvd</p>
                    <p><i class="fa-solid fa-location-dot"></i> Knoxville, TN</p>
                </div>
            </div>
        
            <div class="image-container w-[600px] h-[600px] relative cursor-pointer">
                <img class="w-full h-full object-cover" src="{{ asset('/img/bathroom/4.jpg') }}" alt="">
                <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-white bg-black bg-opacity-50">
                    <p>Triple Crown Blvd</p>
                    <p><i class="fa-solid fa-location-dot"></i> Knoxville, TN</p>
                </div>
            </div>
        </div>
        
        <!-- Модальное окно для карусели -->
        <div id="modal" class="flex fixed top-0 left-0 w-full h-full bg-black bg-opacity-75 hidden justify-center items-center">
            <div class="relative w-[80%] h-[80%]">
                <!-- Кнопка закрытия -->
                <button class="absolute top-0 right-0 text-white text-xl z-20" onclick="closeModal()"><i class="fa-solid fa-xmark"></i></button>
                <div id="carousel" class="w-full h-full flex justify-center items-center relative">
                    <img id="modalImage" src="" alt="" class="object-contain max-w-full max-h-full">
                    <!-- Кнопки для карусели -->
                    <button onclick="prevImage()" class="absolute left-0 top-1/2 transform -translate-y-1/2 text-white text-3xl z-10"><i class="fa-solid fa-arrow-left"></i></button>
                    <button onclick="nextImage()" class="absolute right-0 top-1/2 transform -translate-y-1/2 text-white text-3xl z-10"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        
        
        

    </div>
</div>



@include('support.complex')  
  
<script>
      // Данные для каждой карусели (массив с изображениями для каждой группы)
const carouselData = [
  ["/img/bathroom/1.jpg", "/img/bathroom/2.jpg", "/img/bathroom/3.jpg"],
  ["/img/bathroom/4.jpg", "/img/bathroom/5.jpg", "/img/bathroom/6.jpg"],
  ["/img/bathroom/7.jpg", "/img/bathroom/8.jpg", "/img/bathroom/9.jpg"],
  ["/img/bathroom/10.jpg", "/img/bathroom/11.jpg", "/img/bathroom/12.jpg"]
];

// Переменные для отслеживания текущего изображения и карусели
let currentIndex = 0;
let currentCarousel = 0;

// Генерация динамического списка для каждого изображения
document.querySelectorAll('.image-container').forEach((container, index) => {
  container.onclick = () => openModal(index); // Привязываем к каждому контейнеру свой индекс
});

// Открыть модальное окно и начать карусель
function openModal(carouselIndex) {
  currentCarousel = carouselIndex;  // Устанавливаем текущую карусель
  currentIndex = 0; // Начинаем с первого изображения
  const modal = document.getElementById('modal');
  const modalImage = document.getElementById('modalImage');
  const carousel = carouselData[carouselIndex];
  
  // Загружаем первое изображение
  modalImage.src = carousel[currentIndex];
  modal.classList.remove('hidden'); // Показываем модальное окно
}

// Закрыть модальное окно
function closeModal() {
  const modal = document.getElementById('modal');
  modal.classList.add('hidden'); // Прячем модальное окно
}

// Перейти к следующему изображению
function nextImage() {
  const carousel = carouselData[currentCarousel];
  currentIndex = (currentIndex + 1) % carousel.length; // Переход к следующему изображению с цикличностью
  const modalImage = document.getElementById('modalImage');
  modalImage.src = carousel[currentIndex]; // Обновляем изображение
}

// Перейти к предыдущему изображению
function prevImage() {
  const carousel = carouselData[currentCarousel];
  currentIndex = (currentIndex - 1 + carousel.length) % carousel.length; // Переход к предыдущему изображению с цикличностью
  const modalImage = document.getElementById('modalImage');
  modalImage.src = carousel[currentIndex]; // Обновляем изображение
}

</script>
@endsection
