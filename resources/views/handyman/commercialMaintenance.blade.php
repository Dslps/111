@extends('layouts.app')
@section('content')

<div class="w-full bg-[url(/public/img/carpentry/home-page.jpg)]">
    <div class="flex flex-col text-center text-[var(--color)] py-40">
        <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Get the job done</p>
        <p style="font-size: var(--title-start);" class=" font-semibold leading-[70px]">Commercial maintenance</p>
        <p style="font-size: var(--base-text);" class="px-5 max-w-[700px] m-auto">Let us handle your repairs so that you can continue to focus on growing your business. Just let us know what you need done, and leave the rest to us.</p>
    </div>
</div>

<div class="max-w-[1400px] m-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-20 p-10">
        <div class="flex justify-start items-center">
            <img class="max-w-[70px] mr-[10px]" src="{{asset('img/commercial-maintenance/Carpentry.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Carpentry</p>
        </div>
        <div class="flex justify-start items-center">
            <img class="max-w-[70px] mr-[10px]" src="{{asset('img/commercial-maintenance/Drywall-Repair.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Drywall Repair</p>
        </div>
        <div class="flex justify-start items-center">
            <img class="max-w-[70px] mr-[10px]" src="{{asset('img/commercial-maintenance/Electrical.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Electrical</p>
        </div>
        <div class="flex justify-start items-center">
            <img class="max-w-[70px] mr-[10px]" src="{{asset('img/commercial-maintenance/Flooring.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Flooring</p>
        </div>

        <div class="flex justify-start items-center">
            <img class="max-w-[70px] mr-[10px]" src="{{asset('img/commercial-maintenance/Furniture-Assembly.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Furniture Assembly</p>
        </div>
        <div class="flex justify-start items-center">
            <img class="max-w-[70px] mr-[10px]" src="{{asset('img/commercial-maintenance/Gutter-Cleaning.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Gutter Cleaning</p>
        </div>
        <div class="flex justify-start items-center">
            <img class="max-w-[70px] mr-[10px]" src="{{asset('img/commercial-maintenance/Gutter-Installation.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Cracks</p>
        </div>
        <div class="flex justify-start items-center">
            <img class="max-w-[70px] mr-[10px]" src="{{asset('img/commercial-maintenance/Junk-Removal.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Junk Removal</p>
        </div>

        <div class="flex justify-start items-center">
            <img class="max-w-[70px] mr-[10px]" src="{{asset('img/commercial-maintenance/Painting.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Painting</p>
        </div>
        <div class="flex justify-start items-center">
            <img class="max-w-[70px] mr-[10px]" src="{{asset('img/commercial-maintenance/Plumbing.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Plumbing</p>
        </div>
        <div class="flex justify-start items-center">
            <img class="max-w-[70px] mr-[10px]" src="{{asset('img/commercial-maintenance/Remodeling.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Remodeling</p>
        </div>
        <div class="flex justify-start items-center">
            <img class="max-w-[70px] mr-[10px]" src="{{asset('img/commercial-maintenance/Siding-Repair.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Siding Repair</p>
        </div>
    </div>
</div>
{{-- ----------------------------------------------------- --}}
<div class="max-w-[1400px] m-auto flex flex-wrap mt-10">
    <!-- Первое изображение -->
    <div class="lg:w-1/2 px-10 py-10 lg:order-2 order-1">
        <img src="{{asset('img/commercial-maintenance/man-holding-drill-orange.jpg')}}" alt="">
    </div>
    
    <!-- Первый блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 lg:order-1 order-2 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Whatever you need</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">No job too big or too small</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Focus on your business, and leave the repairs to us. Whether you need a hole in your wall fixed or you need an entire room remodeled, we have the tools and expertise for the job.</div>
        </div>
    </div>
</div>

@include('support.home')

<div class="max-w-[1400px] m-auto flex flex-wrap mt-10">
    <!-- Второе изображение -->
    <div class="lg:w-1/2 px-10 py-5 order-3">
        <img src="{{asset('img/commercial-maintenance/commercial-building.jpg')}}" alt="">
    </div>
    
    <!-- Второй блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 order-4 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Wherever you need help</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Interior or exterior repairs</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Make sure you business looks great from the outside in. Our team can handle repairs on the outside of your building or the inside. We’ll make sure to be tidy and stay out of your customers’ way so that you can keep doing business while we work.</div>
        </div>
    </div>
</div>

@include('support.complex')

@endsection