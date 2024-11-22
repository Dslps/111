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
            <div class="flex gap-5 my-10">
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
        <!-- Добавьте остальные иконки аналогично -->
    </div>

    <!-- Блок с кнопкой -->
    <div class="mx-auto">
        <a href="#">
            <button class="button-request">Request your estimate</button>
        </a>
        <img class="mt-[20px]" src="{{ asset('img/line.png') }}" alt="">
    </div>
</div>

@endsection
