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
                    <button class="button-primary hover:bg-[var(--hover)] duration-300">Get your estimate</button>
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
            <img class="image-item" src="{{ asset('img/home-page/4.png') }}" alt="">
            <img class="image-item" src="{{ asset('img/home-page/3.png') }}" alt="">
            <img class="image-item" src="{{ asset('img/home-page/2.png') }}" alt="">
            <img class="image-item" src="{{ asset('img/home-page/1.png') }}" alt="">
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
                <button class="button-request hover:bg-[var(--hover)] duration-300">Request your estimate</button>
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
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white dark:bg-gray-800 w-full border-r-[1px] border-[var(--support-color)]">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate
                        </h3>
                        <p class="my-4">If you care for your time, I hands down would go with this."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Bonnie Green</div>
                            <div class= text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <!-- Слайд 2 -->
            <div class="w-[300px] flex-shrink-0 px-2">
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white dark:bg-gray-800 w-full border-r-[1px] border-[var(--support-color)]">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project
                        </h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to Tailwind CSS is
                            a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Roberta Casas</div>
                            <div class= text-gray-500>Lead designer at Dropbox</div>
                        </div>
                    </figcaption>
                </figure>
            </div>

            <div class="w-[300px] flex-shrink-0 px-2">
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white dark:bg-gray-800 w-full border-r-[1px] border-[var(--support-color)]">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project
                        </h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to Tailwind CSS is
                            a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Roberta Casas</div>
                            <div class= text-gray-500>Lead designer at Dropbox</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="w-[300px] flex-shrink-0 px-2">
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white dark:bg-gray-800 w-full border-r-[1px] border-[var(--support-color)]">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project
                        </h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to Tailwind CSS is
                            a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Roberta Casas</div>
                            <div class= "text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="w-[300px] flex-shrink-0 px-2">
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white dark:bg-gray-800 w-full border-r-[1px] border-[var(--support-color)]">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project
                        </h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to Tailwind CSS is
                            a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Roberta Casas</div>
                            <div class= "text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="w-[300px] flex-shrink-0 px-2">
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white dark:bg-gray-800 w-full border-r-[1px] border-[var(--support-color)]">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project
                        </h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to Tailwind CSS is
                            a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Roberta Casas</div>
                            <div class= "text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                        </div>
                    </figcaption>
                </figure>
            </div>

        </div>

        <button id="prev-btn"
            class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full hover:bg-gray-800 w-[50px] h-[50px] flex justify-center items-center">
            ←
        </button>
        <button id="next-btn"
            class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full hover:bg-gray-800 w-[50px] h-[50px] flex justify-center items-center">
            →
        </button>
    </div>

    {{-- -------------------------------связь с нами--------------------------------------------- --}}
    <div class="w-full bg-[var(--comment-bg)]">
        <div class="flex flex-col m-auto justify-center">
            <div class="m-auto text-center mt-10">
                <p style="font-size: var(--context);">Customer testimonials</p>
                <p class="font-semibold text-[var(--accent-color)]" style="font-size: var(--title);">What people are
                    saying</p>
                <div class="m-auto flex justify-center gap-10 mt-10">
                    <a href="">
                        <div
                            class="flex flex-col gap-3 text-[#555] hover:text-[var(--accent-color)] duration-300 ease-in-out">
                            <i style="font-size: 30px;" class="fa-brands fa-instagram"></i>
                            Lorem ipsum dolor sit amet.
                        </div>
                    </a>
                    <a href="">
                        <div
                            class="flex flex-col gap-3 text-[#555] hover:text-[var(--accent-color)] duration-300 ease-in-out">
                            <i style="font-size: 30px;" class="fa-brands fa-facebook-f"></i>
                            Lorem ipsum dolor sit amet.
                        </div>
                    </a>
                    <a href="">
                        <div
                            class="flex flex-col gap-3 text-[#555] hover:text-[var(--accent-color)] duration-300 ease-in-out">
                            <i style="font-size: 30px;" class="fa-brands fa-google"></i>
                            Lorem ipsum dolor sit amet.
                        </div>
                    </a>
                </div>
            </div>
            {{-- ---------------------------------------- --}}
            <div
                class="grid 2xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 max-w-[1400px] m-auto mt-10 mb-10">
                <a class="group block" href="#">
                    <img class="transition-transform duration-300 transform group-hover:scale-105"
                        src="{{ asset('img/connect/1.png') }}" alt="Фото 1">
                </a>
                <a class="group block" href="#">
                    <img class="transition-transform duration-300 transform group-hover:scale-105"
                        src="{{ asset('img/connect/1.png') }}" alt="Фото 1">
                </a>
                <a class="group block" href="#">
                    <img class="transition-transform duration-300 transform group-hover:scale-105"
                        src="{{ asset('img/connect/1.png') }}" alt="Фото 1">
                </a>
                <a class="group block" href="#">
                    <img class="transition-transform duration-300 transform group-hover:scale-105"
                        src="{{ asset('img/connect/1.png') }}" alt="Фото 1">
                </a>
                <a class="group block" href="#">
                    <img class="transition-transform duration-300 transform group-hover:scale-105"
                        src="{{ asset('img/connect/1.png') }}" alt="Фото 1">
                </a>
                <a class="group block" href="#">
                    <img class="transition-transform duration-300 transform group-hover:scale-105"
                        src="{{ asset('img/connect/1.png') }}" alt="Фото 1">
                </a>
                <a class="group block" href="#">
                    <img class="transition-transform duration-300 transform group-hover:scale-105"
                        src="{{ asset('img/connect/1.png') }}" alt="Фото 1">
                </a>
                <a class="group block" href="#">
                    <img class="transition-transform duration-300 transform group-hover:scale-105"
                        src="{{ asset('img/connect/1.png') }}" alt="Фото 1">
                </a>
                <a class="group block" href="#">
                    <img class="transition-transform duration-300 transform group-hover:scale-105"
                        src="{{ asset('img/connect/1.png') }}" alt="Фото 1">
                </a>
                <a class="group block" href="#">
                    <img class="transition-transform duration-300 transform group-hover:scale-105"
                        src="{{ asset('img/connect/1.png') }}" alt="Фото 1">
                </a>
                <a class="group block" href="#">
                    <img class="transition-transform duration-300 transform group-hover:scale-105"
                        src="{{ asset('img/connect/1.png') }}" alt="Фото 1">
                </a>
                <a class="group block" href="#">
                    <img class="transition-transform duration-300 transform group-hover:scale-105"
                        src="{{ asset('img/connect/1.png') }}" alt="Фото 1">
                </a>
            </div>
            <div class="w-full flex justify-center mb-10">
                <div class="flex justify-center flex-wrap gap-5 m-auto p-5">
                    <button style="font-size: var(--base-text)"
                        class="w-[200px] border-2 border-[var(--accent-color)] py-3 bg-[var(--accent-color)] hover:bg-[var(--hover)] duration-300 text-[var(--color)]">Load
                        More</button>

                </div>
            </div>
        </div>
    </div>

@include('support.home')

    {{-- ----------------------------------GALERY--------------------------------------------------------- --}}

    <div class="m-auto flex flex-col text-center">
        <p style="font-size: var(--context);" class=" font-semibold text-[var(--base-color)]">Some of our work</p>
        <p style="font-size: var(--title);" class=" font-semibold text-[var(--accent-color)]">Before and after photos</p>
    </div>
    <div class="max-w-[1400px] m-auto py-20 px-5 2xl:px-0">
        <div id="gallery"
            class="grid grid-cols-2 md:grid-cols-4 gap-4 max-h-[500px] overflow-hidden transition-[max-height] duration-500 ease-in-out">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="text-center mt-10">
            <button id="toggleButton" class="button-request transition hover:bg-[var(--hover)] duration-300">
                Show More
            </button>
        </div>
    </div>
    {{-- -------------------------------------------------------------------------- --}}
    <div class="max-w-[1400px] m-auto px-5 2xl:p-0 my-10">
        <div class="flex flex-col lg:flex-row">
            <div class="m-auto">
                <img class="w-500px lg:max-w-[500px]" src="{{ asset('img/home-page/work-group.png') }}" alt="">
            </div>
            <div class="">
                <div class="lg:p-20 p-5 m-auto">
                    <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Simple, upfront
                        pricing</p>
                    <p style="font-size: var(--title);" class="font-semibold twxt-[var(--support-color)] leading-[40px]">
                        Get more for
                        your money</p>
                    <p style="font-size: var(--base-text);" class="mt-5">We don’t want to confuse you or leave you
                        wondering how much
                        you’ll be paying for our services, so we work off of an hourly wage. Let us know what your projects
                        are, and we’ll provide a free estimate of hours and our hourly wage for that type of job. Then, you
                        can let us know if you’d like us to come out.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- ------------------------------------------------------------------------------ --}}
    <div class="max-w-[1400px] m-auto pt-10 pb-20">
        <div class="text-center my-10">
            <p style="font-size: var(--context);" class="text-[var(--accent-color)] font-semibold">From the blog</p>
            <p style="font-size: var(--title);" class="text-[var(--support-color)] font-semibold">Tips & articles</p>
        </div>
        <div class="flex flex-wrap justify-center 2xl:px-10 gap-10 ">

            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('img/blog/1.png') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <i class="fa-solid fa-arrow-right ml-[10px]"></i>
                    </a>
                </div>
            </div>

            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('img/blog/2.png') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <i class="fa-solid fa-arrow-right ml-[10px]"></i>
                    </a>
                </div>
            </div>

            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('img/blog/3.png') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <i class="fa-solid fa-arrow-right ml-[10px]"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
    {{-- ----------------------------------FORM------------------------------------- --}}
    <div class="w-full bg-[url('/public/img/home-page/form-img.png')] bg-no-repeat flex lg:justify-end justify-center">
        <div class="flex flex-col sm:p-16 p-[2rem] my-40 mr-0 lg:mr-[12vw] bg-[var(--color)] w-[600px]">
            <div class=" mb-10">
                <p style="font-size: var(--context);" class="text-[var(--accent-color)] font-semibold">Contact us</p>
                <p style="font-size: var(--title);" class="text-[var(--support-color)] font-semibold">Get your evaluation</p>
                <p style="font-size: var(--base-text);">Give us a call</p>
                <p style="font-size: var(--title);" class="text-[var(--support-color)] font-semibold"><i class="fa-solid fa-phone mr-[10px] text-[30px]"></i>(865) 966-7648</p>
                <p style="font-size: var(--comment);">Send us a message</p>
            </div>
            <form class="form">
                <div class="relative z-0 w-full mb-5 group">
                    <input style="font-size: var(--base-text);" type="text" name="username" id="username"
                        class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-[var(--support-color)] appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[var(--accent-color)] peer"
                        placeholder=" " required />
                    <label for="username"
                        class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[var(--accent-color)] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Username
                    </label>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <input style="font-size: var(--base-text);" type="tel" name="phone_number" id="phone_number"
                        class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-[var(--support-color)] appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[var(--accent-color)] peer"
                        placeholder=" " pattern="[+]*[0-9]{1,4}[0-9]{7,}" required />
                    <label for="phone_number"
                        class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-[var(--accent-color)] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Phone Number
                    </label>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <input style="font-size: var(--base-text);" type="email" name="email" id="email"
                        class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-[var(--support-color)] appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[var(--accent-color)] peer"
                        placeholder=" " required />
                    <label for="email"
                        class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-[var(--accent-color)] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Email Address
                    </label>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <textarea name="message" id="message" rows="4"
                        class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-[var(--support-color)] appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[var(--accent-color)] peer resize-none overflow-y-auto max-h-[150px]"
                        placeholder=" " required></textarea>
                    <label for="message"
                        class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-[var(--accent-color)] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Message
                    </label>
                </div>
                
                


                <button class="w-full py-3 mt-5 bg-[var(--accent-color)] hover:bg-[var(--hover)] duration-300 text-[var(--color)] font-semibold">SUBMIT</button>
            </form>

        </div>
    </div>
@endsection
