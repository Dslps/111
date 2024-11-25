<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <header class="relative  3xl:border-b-[30px] xl:border-b-[26px] border-b-[26px] border-[var(--accent-color)] z-50">
        {{-- верхняя часть с контактами --}}
        <div class="top-contact-box">
            <div class="top-contact-container pt-5 lg:pt-0">
                <!-- Левая часть -->
                <div class="top-contact-left">
                    <i class="fa-solid fa-lock top-contact-icon"></i>
                    <div class="lg:my-0">Licensed, Bonded and Insured</div>
                </div>

                <!-- Правая часть -->
                <div class="top-contact-right">
                    <div class="top-contact-item mr-0 lg:mr-5">
                        <i class="fa-solid fa-star top-contact-icon"></i>
                        <div class="lg:my-0 my-1">Leave us a review on Google!</div>
                    </div>
                    <div class="top-contact-item mr-0 lg:mr-3">
                        <i class="fa-solid fa-phone top-contact-icon"></i>
                        <div class="lg:my-0 my-1">Request your free quote</div>
                    </div>
                    <div class="top-contact-item lg:my-0 py-1 text-[20px] lg:text-[16px]">(865) 966-7648</div>
                </div>
            </div>
        </div>

        {{-- навигационная панель --}}
        <div class="navigation-box">
            <div class="navigation-container">
                <!-- Логотип -->
                <div class="logo-container">
                    <a href="">
                        <img class="logo-image" src="{{ asset('img/Logo.png') }}" alt="Logo">
                    </a>
                </div>

                <!-- Навигация -->
                <div class="nav-menu">
                    <button class="burger-menu" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <ul class="nav-list lg:items-center">
                        <!-- HANDYMAN SERVICES -->
                        <li class="nav-item group">
                            <a href="#" class="nav-link flex justify-between lg:pt-0 pt-5">
                                HANDYMAN
                                <div>
                                    <i
                                        class="fa-solid fa-angle-down toggle-dropdown lg:ml-[5px] transition-transform duration-300"></i>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">CARPENTRY</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">DRIVAL REPAIR</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">FLOORING</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">FURNITURE ASSEMBLY</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">PLUMBING</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">PAINTING</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">MISCELLANEOUS HOME REPAIRS</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">COMMERCIAL MAINTENANCE I REPAIR</a>
                                </li>
                            </ul>
                        </li>


                        <!-- REMODELING -->
                        <li class="nav-item group">
                            <a href="#" class="nav-link flex justify-between">
                                REMODELING
                                <div>
                                    <i
                                        class="fa-solid fa-angle-down toggle-dropdown lg:ml-[5px] transition-transform duration-300"></i>
                                </div>

                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">BATHROOM REMODELS</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">COPMLETED BATHROOM REMODELS</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">KITCHEN REMODELS</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">COMPLETED KITCHEN REMODELS</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">HOME ADDITIONS</a>
                                </li>
                            </ul>
                        </li>

                        <!-- EXTERIOR -->
                        <li class="nav-item group">
                            <a href="#" class="nav-link flex justify-between">
                                EXTERIOR
                                <div>
                                    <i
                                        class="fa-solid fa-angle-down toggle-dropdown lg:ml-[5px] transition-transform duration-300"></i>
                                </div>

                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">DECKS I COVERS</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">GUTTER INSTALLATOINS I REPAIRS</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">GUTTER CLEANING</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">SIDING</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">ROOFING</a>
                                </li>
                            </ul>
                        </li>

                        <!-- ABOUT US -->
                        <li class="nav-item group">
                            <a href="#" class="nav-link flex justify-between">
                                ABOUT US
                                <div>
                                    <i
                                        class="fa-solid fa-angle-down toggle-dropdown lg:ml-[5px] transition-transform duration-300"></i>
                                </div>

                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">THE SMITH TEAM</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">TESTIMONIALS</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">FINANCING</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">BLOG</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">CAREERS</a>
                                    <span class="dropdown-divider"></span>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#" class="dropdown-link">LEAVE US A REVIEW</a>
                                </li>
                            </ul>
                        </li>

                        <!-- OTHER ITEMS -->
                        <li class="nav-item group pb-[10px] lg:pb-0"><a href="#" class="nav-link">FEATURED
                                PROJECT</a></li>
                        <li class="nav-item group pb-[10px] lg:pb-0"><a href="#" class="nav-link">OUR SYSTEM
                                COMPANY</a></li>
                        <li class="nav-item group pb-[10px] lg:pb-0"><a href="#" class="nav-link">CONTACT
                                US</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </header>

    @yield('content')

    <footer class="footer bg-[var(--support-color)] w-full  lg:px-0">
        <div class="footer-container max-w-[1600px] text-[var(--color)] mx-auto flex flex-col lg:flex-row py-[50px]">
            {{---------------------------- 1 -------------------------}}
            <div class="footer-column">
                <p class="footer-title">
                    CONTACT
                </p>
                <p class="footer-text py-2">
                    <a href="#">(865) 966-7648</a>
                </p>
                <p class="footer-text py-2">sales@smithhandymanservice.com</p>
                <p class="footer-text py-2">1544 Schaeffer Rd. Suite A, Knoxville, TN 37932</p>
                <p class="footer-title">
                    CARRERS
                </p>
                <p class="footer-text py-2">We're always looking to grow our team.</p>
                <button class="footer-button">
                    View jops
                </button>
            </div>
            {{--------------------- 2 -----------------------------------}}
            <div class="footer-column">
                <p class="footer-title">
                    Our services
                </p>
                <ul class="footer-list list-disc pl-5">
                    <li><a href="#">Carpentry</a></li>
                    <li><a href="#">Gutter installation & repair</a></li>
                    <li><a href="#">Drywall repair</a></li>
                    <li><a href="#">Commercial maintenance</a></li>
                    <li><a href="#">Remodeling</a></li>
                    <li><a href="#">Home repairs</a></li>
                    <li><a href="#">Flooring</a></li>
                    <li><a href="#">Gutter cleaning</a></li>
                    <li><a href="#">Bathroom remodeling</a></li>
                    <li><a href="#">Furniture assembly</a></li>
                    <li><a href="#">Roofing</a></li>
                    <li><a href="#">Painting</a></li>
                    <li><a href="#">Plumbing</a></li>
                </ul>
            </div>
            {{------------------------------------ 3 ------------------------------------}}
            <div class="footer-column">
                <p class="footer-title">
                    Where we serve
                </p>
                <ul class="footer-list">
                    <li><i class="fa-solid fa-location-dot location-icon"></i>Knoxville</li>
                    <li><i class="fa-solid fa-location-dot location-icon"></i>Lenoir City</li>
                    <li><i class="fa-solid fa-location-dot location-icon"></i>Oak Ridge</li>
                    <li><i class="fa-solid fa-location-dot location-icon"></i>Maryville</li>
                    <li><i class="fa-solid fa-location-dot location-icon"></i>Kingston</li>
                    <li><i class="fa-solid fa-location-dot location-icon"></i>Powell</li>
                    <li><i class="fa-solid fa-location-dot location-icon"></i>Crossville</li>
                    <li><i class="fa-solid fa-location-dot location-icon"></i>Sevierville</li>
                    <li><i class="fa-solid fa-location-dot location-icon"></i>and surrounding areas</li>
                </ul>
                <p class="footer-title">
                    Licensed & insured
                </p>
                <p class="footer-text py-2">General Contractors License #76231</p>
            </div>
            {{---------------------------------------- 4 ----------------------------------------}}
            <div class="footer-column flex flex-wrap gap-5 lg:block ">
                <img class="w-[250px]" src="{{asset('img/footer-1.png')}}" alt="">
                <img class="w-[250px]" src="{{asset('img/footer-2.png')}}" alt="">
            </div>
        </div>
        {{----------------------- Footer Bottom -------------------------}}
        <div class="footer-bottom max-w-[1600px] m-auto text-[var(--color)] pb-10 block px-4">
            <div class="footer-social flex items-center pb-3 border-b-2 border-[var(--accent-color)]">
                <div class="footer-social-label mr-5">
                    Connect with us:
                </div>
                <div class="footer-social-icons flex gap-5">
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-google"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
            <div class="footer-links mt-3 space-y-3 block">
                <p>Copyright © 2024 <a href="">Smith Handyman Service</a> | 1544 Schaeffer Rd. Suite A, Knoxville, TN 37932 | <a href="">(865) 966-7648</a></p>
                <p><a href="">Powered by Alchemy Marketing</a> | <a href="">Privacy Policy</a> | <a href="">Sitemap</a> | <a href="">Accessibility</a></p>
            </div>
        </div>
    </footer>
    



</body>

</html>
