@extends('layouts.app')
@section('content')

<div class="w-full bg-[url(/public/img/carpentry/home-page.jpg)]">
    <div class="flex flex-col text-center text-[var(--color)] py-40">
        <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Anything you need</p>
        <p style="font-size: var(--title-start);" class=" font-semibold leading-[70px]">Home repairs</p>
        <p style="font-size: var(--base-text);" class="px-5 max-w-[700px] m-auto">Let us knock out your growing to-do list for you. Our expert handymen can handle any of your around-the-house projects quickly and at a price you love.</p>
    </div>
</div>

<div class="w-full bg-[var(--comment-bg)] p-5 my-10">

        <p style="font-size: var(--title);" class="font-bold text-center">Our services</p>

    <div class="max-w-[1400px] m-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mt-20">
            <div>
                <p style="font-size: var(--context);" class=" font-bold"><i class="mr-[10px] text-[var(--accent-color)] fa-solid fa-check"></i>Leaky sink</p>
            </div>
            <div>
                <p style="font-size: var(--context);" class=" font-bold"><i class="mr-[10px] text-[var(--accent-color)] fa-solid fa-check"></i>Broken water heater</p>
            </div>
            <div>
                <p style="font-size: var(--context);" class=" font-bold"><i class="mr-[10px] text-[var(--accent-color)] fa-solid fa-check"></i>A/C not cooling</p>
            </div>
            <div>
                <p style="font-size: var(--context);" class=" font-bold"><i class="mr-[10px] text-[var(--accent-color)] fa-solid fa-check"></i>Damaged drywall</p>
            </div>
            <div>
                <p style="font-size: var(--context);" class=" font-bold"><i class="mr-[10px] text-[var(--accent-color)] fa-solid fa-check"></i>Remodels</p>
            </div>
            <div>
                <p style="font-size: var(--context);" class=" font-bold"><i class="mr-[10px] text-[var(--accent-color)] fa-solid fa-check"></i>Faulty lights</p>
            </div>
            <div>
                <p style="font-size: var(--context);" class=" font-bold"><i class="mr-[10px] text-[var(--accent-color)] fa-solid fa-check"></i>Damaged flooring</p>
            </div>
            <div>
                <p style="font-size: var(--context);" class=" font-bold"><i class="mr-[10px] text-[var(--accent-color)] fa-solid fa-check"></i>Patio upgrade or repair</p>
            </div>
        </div>
    </div>
</div>
{{-- ------------------------------------------------------------------- --}}
<div class="max-w-[1400px] m-auto flex flex-wrap mt-10">
    <!-- Первое изображение -->
    <div class="lg:w-1/2 px-10 py-10 lg:order-2 order-1">
        <img src="{{asset('img/homeRepairs/tools-laying-flat.jpg')}}" alt="">
    </div>
    
    <!-- Первый блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 lg:order-1 order-2 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Leave it to us</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Right tools for the job</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">No matter what you need done around the house, we have the right tools and expertise to handle it. Just point out what projects you need done around the house and leave the rest to us.</div>
        </div>
    </div>
</div>

@include('support.home')

<div class="max-w-[1400px] m-auto flex flex-wrap mt-10">
    <!-- Второе изображение -->
    <div class="lg:w-1/2 px-10 py-5 order-1">
        <img src="{{asset('img/homeRepairs/home-repair-1.jpg')}}" alt="">
    </div>
    
    <!-- Второй блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 order-2 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Whatever you need</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">No project too big or too small</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Whether you have a small hole in your wall or you need a room completely remodeled, we have what it takes to get the job done. Let us take care of your growing list of things to do around the house.</div>
        </div>
    </div>

    <div class="lg:w-1/2 px-10 py-10 lg:order-4 order-3">
        <img src="{{asset('img/homeRepairs/clipboard-cutout.png')}}" alt="">
    </div>
    
    <!-- Первый блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 lg:order-3 order-4 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">All in one trip</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Let us handle your entire list</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Get everything done in one visit, and save on your repairs. By batching your repairs, you only pay one dispatch cost, greatly reducing your overall repair price.</div>
        </div>
    </div>
</div>

@include('support.complex')

@endsection