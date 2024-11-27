@extends('layouts.app')
@section('content')

<div class="w-full bg-[url(/public/img/drival-repair/home-page.jpg)]">
    <div class="flex flex-col text-center text-[var(--color)] py-40">
        <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Fast & affordable</p>
        <p style="font-size: var(--title-start);" class=" font-semibold leading-[70px]">Flooring repair & installation</p>
        <p style="font-size: var(--base-text);" class="px-5 max-w-[700px] m-auto">Start enjoying your new floor faster and without the hassle of doing it yourself. Our team can provide a strong, beautful floor that will last for years.</p>
    </div>
</div>
{{-- --------------------------------------------------------------------- --}}

<div class="w-full bg-[var(--default-color)] py-20">
    <div class="max-w-[1400px] m-auto">
        <div class="m-auto text-center">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-bold">Any material</p>
            <p style="font-size: var(--title);" class=" font-semibold">We work with all floor types</p>
        </div>
        <div class="flex flex-wrap justify-center gap-10 mt-10">
            <div class="flex flex-col text-center max-w-[300px]">
                <img class="max-w-[300px] border-2 border-[var(--support-color)]" src="{{asset('img/flooring/1.jpg')}}" alt="">
                <p style="font-size: var(--context);" class="text-[var(--accent-color)] font-bold mt-5">Hardwood</p>
            </div>
            <div class="flex flex-col text-center max-w-[300px]">
                <img class="max-w-[300px] border-2 border-[var(--support-color)]" src="{{asset('img/flooring/2.jpg')}}" alt="">
                <p style="font-size: var(--context);" class="text-[var(--accent-color)] font-bold mt-5">Carpet</p>
            </div>
            <div class="flex flex-col text-center max-w-[300px]">
                <img class="max-w-[300px] border-2 border-[var(--support-color)]" src="{{asset('img/flooring/3.jpg')}}" alt="">
                <p style="font-size: var(--context);" class="text-[var(--accent-color)] font-bold mt-5">Laminate</p>
            </div>
            <div class="flex flex-col text-center max-w-[300px]">
                <img class="max-w-[300px] border-2 border-[var(--support-color)]" src="{{asset('img/flooring/4.jpg')}}" alt="">
                <p style="font-size: var(--context);" class="text-[var(--accent-color)] font-bold mt-5">Luxury Vinyl</p>
            </div>
        </div>
    </div>
</div>
{{-- -------------------------------------------------------------------------- --}}
<div class="max-w-[1400px] m-auto flex flex-wrap mt-20">
    <!-- Первое изображение -->
    <div class="lg:w-1/2 px-10 py-10 lg:order-2 order-1">
        <img src="{{asset('img/flooring/wood-laying.jpg')}}" alt="">
    </div>
    
    <!-- Первый блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 lg:order-1 order-2 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Any type of flooring</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Any Size Job, We’re Here to Help</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">From ripping out carpet to laying new hardwood, flooring installation can quickly turn into a time consuming, back-breaking job. When you want to change flooring in your home, make sure you hire someone with the necessary experience to get the job done right the first time.</div>
        </div>
    </div>
</div>
{{-- --------------------------------------------------------------------------------------- --}}

@include('support.home')

<div class="max-w-[1400px] m-auto flex flex-wrap pb-20">
    <div class="lg:w-1/2 px-10 py-5 order-3">
        <img src="{{asset('img/flooring/hardwood.jpg')}}" alt="">
    </div>
    
    <!-- Второй блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 order-4 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Done right the first time</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Fast, Affordable Repairs</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Don’t wait to have fresh, new flooring installed. Our team of experts is here to help you get your new floors installed fast. Get fast and affordable repairs and installation by a team of experienced professionals.</div>
        </div>
    </div>
</div>

@include('support.complex')

@endsection