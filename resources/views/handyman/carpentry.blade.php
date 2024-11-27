@extends('layouts.app')
@section('content')

<div class="w-full bg-[url(/public/img/carpentry/home-page.jpg)]">
    <div class="flex flex-col text-center text-[var(--color)] py-40">
        <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">We can build it</p>
        <p style="font-size: var(--title-start);" class=" font-semibold leading-[70px]">Carpenter Services</p>
        <p style="font-size: var(--base-text);" class="px-5 max-w-[700px] m-auto">We can handle your woodworking projects. Whether you want a shelfing unit, patio, staircase, or anything in between, we’ve got it covered.</p>
    </div>
</div>

<div class="max-w-[1400px] m-auto flex flex-wrap">
    <!-- Первое изображение -->
    <div class="lg:w-1/2 px-10 py-10 lg:order-2 order-1">
        <img src="{{asset('img/carpentry/planks.jpg')}}" alt="">
    </div>
    
    <!-- Первый блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 lg:order-1 order-2 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Make your idea a reality</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Custom carpentry services</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Every home is different and needs specific modifications to make it your own. We can make your wildest dreams come true with completely custom woodworking and carpentry. Whether you need a simple doorframe or custom piece, we can help you out.</div>
        </div>
    </div>

    <!-- Второе изображение -->
    <div class="lg:w-1/2 px-10 py-5 order-3">
        <img src="{{asset('img/carpentry/sawing-wood.jpg')}}" alt="">
    </div>
    
    <!-- Второй блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 order-4 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Get the job done fast</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Professional & quick carpentry</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Carpentry is a skill that requires years of experience to master. Our expert carpenters can have the job done quickly and right the first time. We only use the best materials to ensure that your beloved custom creation will last.</div>
        </div>
    </div>
</div>

@include('support.home')
{{-- -----------------------------ICON---------------------------------------- --}}
<div class="w-full bg-[#e3dad3] ">
    <div class="max-w-[1400px] m-auto py-20">
        <div class="mb-10">
            <p style="font-size: var(--context);" class="text-center font-semibold text-[var(--accent-color)]">What we can build</p>
            <p style="font-size: var(--title);" class="text-center font-semibold text-[var(--support-color)]">Custom woodworking</p>
        </div>
        <div class="flex justify-center flex-wrap lg:gap-[100px] gap-[40px]">
            <div>
                <img class="w-[140px]" src="{{asset('img/carpentry/Shelving.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="text-center font-semibold text-[var(--support-color)]">Shelving</p>
            </div>
            <div>
                <img class="w-[140px]" src="{{asset('img/carpentry/Bookcases.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="text-center font-semibold text-[var(--support-color)]">Bookcases</p>
            </div>
            <div>
                <img class="w-[140px]" src="{{asset('img/carpentry/Cabinets.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="text-center font-semibold text-[var(--support-color)]">Cabinets</p>
            </div>
            <div>
                <img class="w-[140px]" src="{{asset('img/carpentry/Mantels.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="text-center font-semibold text-[var(--support-color)]">Mantels</p>
            </div>
            <div>
                <img class="w-[140px]" src="{{asset('img/carpentry/Crown-Molding.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="text-center font-semibold text-[var(--support-color)]">Crown molding</p>
            </div>
        </div>
    </div>
</div>

@include('support.complex')

@endsection