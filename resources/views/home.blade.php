@extends('layouts.app')
@section('content')
    <div class="bg-image" style="background-image: url({{ asset('img/bg-start.jpg') }});">
        <div class="section-container">
            <!-- Левый блок с текстом -->
            <div class="text-container">
                <p class="heading-primary">No job too big or small</p>
                <p class="heading-secondary">HANDYMAN & REMODELING SERVICES</p>
                <ul class="list-container">
                    <li class="list-item">
                        <i class="fa-solid fa-circle-check list-icon"></i> Upfront pricing
                    </li>
                    <li class="list-item">
                        <i class="fa-solid fa-circle-check list-icon"></i> Licensed, Bonded and Insured
                    </li>
                    <li class="list-item">
                        <i class="fa-solid fa-circle-check list-icon"></i> Trusted in Knoxville since 2016
                    </li>
                </ul>
                <div class="flex flex-wrap gap-5 my-10">
                    <button class="button-primary">Get your estimate</button>
                    <button class="button-secondary">View our service</button>
                </div>
            </div>

            <!-- Правый блок с изображением -->
            <div class="flex-1 flex justify-center">
                <img src="{{ asset('img/man.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="bg-[var(--support-color)] flex justify-center flex-col ">

        <!-- Блок с 4 фотографиями -->
        <div class="image-row">
            <img class="image-item" src="{{ asset('img/4.png') }}" alt="">
            <img class="image-item" src="{{ asset('img/3.png') }}" alt="">
            <img class="image-item" src="{{ asset('img/2.png') }}" alt="">
            <img class="image-item" src="{{ asset('img/1.png') }}" alt="">
        </div>
        <div class="m-auto text-center text-[var(--color)]">
            <p class="font-2" style="font-size: var(--context);">Our services</p>
            <p class="font-2" style="font-size: var(--title) ;">Whatever you need done</p>
        </div>
        <!-- Список иконок -->
        <div class="icon-list">
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/1.png') }}" alt="" class="icon-image">
                    </div>
                    <span>KITCHEN REMODELING</span>
                </div>
            </a>
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/2.png') }}" alt="" class="icon-image">
                    </div>
                    <span>DRYWALL REPAIR</span>
                </div>
            </a>
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/3.png') }}" alt="" class="icon-image">
                    </div>
                    <span>GUTTER INSTALLATION</span>
                </div>
            </a>
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/4.png') }}" alt="" class="icon-image">
                    </div>
                    <span>BATHROOM REMODELING</span>
                </div>
            </a>
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/5.png') }}" alt="" class="icon-image">
                    </div>
                    <span>HOUSE SIDING</span>
                </div>
            </a>
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/6.png') }}" alt="" class="icon-image">
                    </div>
                    <span>Commercial maintenance</span>
                </div>
            </a>
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/7.png') }}" alt="" class="icon-image">
                    </div>
                    <span>Furniture assembly</span>
                </div>
            </a>
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/8.png') }}" alt="" class="icon-image">
                    </div>
                    <span>Gutter cleaning</span>
                </div>
            </a>
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/9.png') }}" alt="" class="icon-image">
                    </div>
                    <span>Remodeling</span>
                </div>
            </a>
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/10.png') }}" alt="" class="icon-image">
                    </div>
                    <span>Carpentry</span>
                </div>
            </a>
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/11.png') }}" alt="" class="icon-image">
                    </div>
                    <span>Gutter cleaning</span>
                </div>
            </a>
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/12.png') }}" alt="" class="icon-image">
                    </div>
                    <span>Home repairs</span>
                </div>
            </a>
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/13.png') }}" alt="" class="icon-image">
                    </div>
                    <span>Plumbing</span>
                </div>
            </a>
            <a href="#" class="hover:bg-[var(--base-color)] transition duration-300 uppercase">
                <div class="icon-card">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/icon/14.png') }}" alt="" class="icon-image">
                    </div>
                    <span>Tile</span>
                </div>
            </a>
        </div>

        <!-- Блок с кнопкой -->
        <div class="mx-auto mb-10">
            <a href="#">
                <button class="button-request">Request your estimate</button>
            </a>
            <img class="mt-[20px]" src="{{ asset('img/line.png') }}" alt="">
        </div>
    </div>

    {{-- -------------------------------Коментарии клиентов----------------------------------------- --}}
    <div class="relative overflow-hidden max-w-screen-3xl mx-auto lg:py-20 py-10">
        <!-- Трек слайдов -->
        <div id="slider-track" class="flex transition-transform duration-500 ease-in-out">
            <!-- Слайд 1 -->
            <div class="w-[300px] flex-shrink-0 px-2">
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white dark:bg-gray-800 w-full border-r-[1px] border-[var(--support-color)]">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate</h3>
                        <p class="my-4">If you care for your time, I hands down would go with this."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Bonnie Green</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <!-- Слайд 2 -->
            <div class="w-[300px] flex-shrink-0 px-2">
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white dark:bg-gray-800 w-full border-r-[1px] border-[var(--support-color)]">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to Tailwind CSS is a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Roberta Casas</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            
            <div class="w-[300px] flex-shrink-0 px-2">
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white dark:bg-gray-800 w-full border-r-[1px] border-[var(--support-color)]">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to Tailwind CSS is a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Roberta Casas</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="w-[300px] flex-shrink-0 px-2">
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white dark:bg-gray-800 w-full border-r-[1px] border-[var(--support-color)]">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to Tailwind CSS is a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Roberta Casas</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="w-[300px] flex-shrink-0 px-2">
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white dark:bg-gray-800 w-full border-r-[1px] border-[var(--support-color)]">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to Tailwind CSS is a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Roberta Casas</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="w-[300px] flex-shrink-0 px-2">
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white dark:bg-gray-800 w-full border-r-[1px] border-[var(--support-color)]">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to Tailwind CSS is a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Roberta Casas</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                        </div>
                    </figcaption>
                </figure>
            </div>

            <!-- Добавьте больше карточек -->
        </div>
    
        <!-- Кнопки управления -->
        <button id="prev-btn" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full hover:bg-gray-800 w-[50px] h-[50px] flex justify-center items-center">
            ←
        </button>
        <button id="next-btn" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full hover:bg-gray-800 w-[50px] h-[50px] flex justify-center items-center">
            →
        </button>
    </div>

        {{-- -------------------------------связь с нами--------------------------------------------- --}}
        <div class="w-full bg-[var(--comment-bg)]">
            <div class="flex flex-col m-auto justify-center">
                <div class="m-auto text-center mt-10">
                    <p style="font-size: var(--context);">Customer testimonials</p>
                    <p class="font-semibold text-[var(--accent-color)]" style="font-size: var(--title);">What people are saying</p>
                    <div class="m-auto flex justify-center gap-10 mt-10">
                        <a href="">
                            <div class="flex flex-col gap-3 text-[#555] hover:text-[var(--accent-color)] duration-300 ease-in-out">
                                <i style="font-size: 30px;" class="fa-brands fa-instagram"></i>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </a>
                        <a href="">
                            <div class="flex flex-col gap-3 text-[#555] hover:text-[var(--accent-color)] duration-300 ease-in-out">
                                <i style="font-size: 30px;" class="fa-brands fa-facebook-f"></i>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </a>
                        <a href="">
                            <div class="flex flex-col gap-3 text-[#555] hover:text-[var(--accent-color)] duration-300 ease-in-out">
                                <i style="font-size: 30px;" class="fa-brands fa-google"></i>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </a>
                    </div>
                </div>
                {{-- ---------------------------------------- --}}
                    <div class="grid 2xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 max-w-[1400px] m-auto mt-10 mb-10">
                        <a class="group block" href="#">
                            <img class="transition-transform duration-300 transform group-hover:scale-105" 
                                 src="{{asset('img/connect/1.png')}}" 
                                 alt="Фото 1">
                        </a>
                        <a class="group block" href="#">
                            <img class="transition-transform duration-300 transform group-hover:scale-105" 
                                 src="{{asset('img/connect/1.png')}}" 
                                 alt="Фото 1">
                        </a>
                        <a class="group block" href="#">
                            <img class="transition-transform duration-300 transform group-hover:scale-105" 
                                 src="{{asset('img/connect/1.png')}}" 
                                 alt="Фото 1">
                        </a>
                        <a class="group block" href="#">
                            <img class="transition-transform duration-300 transform group-hover:scale-105" 
                                 src="{{asset('img/connect/1.png')}}" 
                                 alt="Фото 1">
                        </a>
                        <a class="group block" href="#">
                            <img class="transition-transform duration-300 transform group-hover:scale-105" 
                                 src="{{asset('img/connect/1.png')}}" 
                                 alt="Фото 1">
                        </a>
                        <a class="group block" href="#">
                            <img class="transition-transform duration-300 transform group-hover:scale-105" 
                                 src="{{asset('img/connect/1.png')}}" 
                                 alt="Фото 1">
                        </a>
                        <a class="group block" href="#">
                            <img class="transition-transform duration-300 transform group-hover:scale-105" 
                                 src="{{asset('img/connect/1.png')}}" 
                                 alt="Фото 1">
                        </a>
                        <a class="group block" href="#">
                            <img class="transition-transform duration-300 transform group-hover:scale-105" 
                                 src="{{asset('img/connect/1.png')}}" 
                                 alt="Фото 1">
                        </a>
                        <a class="group block" href="#">
                            <img class="transition-transform duration-300 transform group-hover:scale-105" 
                                 src="{{asset('img/connect/1.png')}}" 
                                 alt="Фото 1">
                        </a>
                        <a class="group block" href="#">
                            <img class="transition-transform duration-300 transform group-hover:scale-105" 
                                 src="{{asset('img/connect/1.png')}}" 
                                 alt="Фото 1">
                        </a>
                        <a class="group block" href="#">
                            <img class="transition-transform duration-300 transform group-hover:scale-105" 
                                 src="{{asset('img/connect/1.png')}}" 
                                 alt="Фото 1">
                        </a>
                        <a class="group block" href="#">
                            <img class="transition-transform duration-300 transform group-hover:scale-105" 
                                 src="{{asset('img/connect/1.png')}}" 
                                 alt="Фото 1">
                        </a>
                    </div>
                <div class="w-full flex justify-center mb-10">
                    <div class="flex justify-center flex-wrap gap-5 m-auto p-5">
                        <button style="font-size: var(--base-text)" class="w-[200px] border-2 border-[var(--accent-color)] py-3 bg-[var(--accent-color)] hover:bg-[var(--hover)] duration-300 text-[var(--color)]">Load More</button>
                        <button style="font-size: var(--base-text)" class="w-[250px] border-[1px] border-[var(--accent-color)] text-[var(--accent-color)] hover:text-[var(--color)] py-3  hover:bg-[var(--accent-color)] duration-300"><i class="fa-brands fa-instagram"></i> Follow on Instagram</button>
                    </div>
                </div>
            </div>
        </div>

@endsection
