@extends('layouts.app')
@section('content')

<div class="w-full bg-[url(/public/img/drival-repair/home-page.jpg)]">
    <div class="flex flex-col text-center text-[var(--color)] py-40">
        <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Fast & affordable</p>
        <p style="font-size: var(--title-start);" class=" font-semibold leading-[70px]">Plumbing Services</p>
        <p style="font-size: var(--base-text);" class="px-5 max-w-[700px] m-auto">Get your pipes working properly again with the help of our expert plumbers. Whether you have a leaky sink or need a complete rework of your bathroom, we’re here to help.</p>
    </div>
</div>
{{-- -------------------------------------------------- --}}
    <div class="max-w-[1400px] m-auto flex flex-wrap py-20">
        <div class="lg:w-1/2 px-10 py-5 order-3">
            <img src="{{ asset('img/plumbing/plumbing-tools.jpg') }}" alt="">
        </div>

        <!-- Второй блок с текстом -->
        <div class="lg:w-1/2 px-10 py-5 order-4 flex flex-col items-center justify-center">
            <div>
                <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">
                    Here when you need us most
                </p>
                <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Emergency plumbing services</p>
                <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Don’t let small plumbing problems become large ones. When one of life’s little plumbing problems rears its ugly head, don’t panic. We can handle any plumbing issue you run into. Fixing a leaky sink, rerouting a dishwasher, or even changing a broken toilet. Don’t let a plumbing problem continue to inconvenience you and your family.
                </div>
            </div>
            <div class="mt-5 w-full">
                <a href="#">
                    <button class="button-request hover:bg-[var(--hover)] duration-300">Request your estimate</button>
                </a>
                <img class="mt-[10px]" src="{{ asset('img/line.png') }}" alt="">
            </div>
        </div>
    </div>
{{-- ----------------------------------------------------------- --}}
<div class="text-center">
    <p style="font-size: var(--context);" class="text-[var(--accent-color)] font-semibold">What we fix</p>
    <p style="font-size: var(--title);" class="font-semibold">Common plumbing issues</p>
</div>

{{-- -----------------------------ICON---------------------------------------- --}}
<div class="w-full">
    <div class="max-w-[1400px] m-auto py-20">
        <div class="flex justify-center flex-wrap lg:gap-[120px] gap-[40px]">
            <div>
                <img class="w-[140px]" src="{{asset('img/plumbing/Dripping-faucets.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="max-w-[150px] text-center font-semibold text-[var(--support-color)]">Dripping faucets</p>
            </div>
            <div>
                <img class="w-[140px]" src="{{asset('img/plumbing/Faucet-replacement.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="max-w-[150px] text-center font-semibold text-[var(--support-color)]">Faucet replacement</p>
            </div>
            <div>
                <img class="w-[140px]" src="{{asset('img/plumbing/Garbage-disposal-replacement.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="max-w-[150px] text-center font-semibold text-[var(--support-color)]">Garbage disposal replacement</p>
            </div>
            <div>
                <img class="w-[140px]" src="{{asset('img/plumbing/Leaky-pipes.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="max-w-[150px] text-center font-semibold text-[var(--support-color)]">Leaky pipes</p>
            </div>
            <div>
                <img class="w-[140px]" src="{{asset('img/plumbing/Low-water-pressure.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="max-w-[150px] text-center font-semibold text-[var(--support-color)]">Low water pressure</p>
            </div>
            <div>
                <img class="w-[140px]" src="{{asset('img/plumbing/New-plumbing-installations.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="max-w-[150px] text-center font-semibold text-[var(--support-color)]">New plumbing installations</p>
            </div>
            <div>
                <img class="w-[140px]" src="{{asset('img/plumbing/Running-toilet.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="max-w-[150px] text-center font-semibold text-[var(--support-color)]">Running toilet</p>
            </div>
            <div>
                <img class="w-[140px]" src="{{asset('img/plumbing/Sink-replacement.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="max-w-[150px] text-center font-semibold text-[var(--support-color)]">Sink replacement</p>
            </div>
            <div>
                <img class="w-[140px]" src="{{asset('img/plumbing/Slow-or-clogged-drains.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="max-w-[150px] text-center font-semibold text-[var(--support-color)]">Slow or clogged drains</p>
            </div>
            <div>
                <img class="w-[140px]" src="{{asset('img/plumbing/Toilet-replacement.svg')}}" alt="">
                <p style="font-size: var(--base-text);" class="max-w-[150px] text-center font-semibold text-[var(--support-color)]">Toilet replacement</p>
            </div>
        </div>
    </div>
</div>
{{-- ------------------------------------------------------------------------- --}}
<div class="max-w-[1400px] m-auto flex flex-wrap mt-20">
    <!-- Второе изображение -->
    <div class="lg:w-1/2 px-10 py-5 order-3">
        <img src="{{asset('img/plumbing/plumbing-before-after.png')}}" alt="">
    </div>
    
    <!-- Второй блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 order-4 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Comprehensive repairs</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Why choose us over a plumbing-only company</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Plumbing companies have a limited skillset when it comes to repairing your home. Plumbing jobs often require additional steps such as drywall repair, paint-matching, and more. Work with a full-service team of handymen that can handle the entire project for you.</div>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)] mt-5">Here’s how our handymen will leave your home better than we found it:</div>
            <ul style="font-size: var(--base-text);" class="text-[var(--support-color)] font-semibold ml-5 my-5">
                <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Comprehensive plumbing services</li>
                <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Drywall repair</li>
                <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Color-matching for paint</li>
                <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Trim and floor repairs and cleaning</li>
            </ul>
        </div>
    </div>
</div>
{{-- ------------------------------------------------------------------------------ --}}
<div class="max-w-[1400px] m-auto flex flex-wrap mt-20">
    <!-- Первое изображение -->
    <div class="lg:w-1/2 px-10 py-10 lg:order-2 order-1">
        <img src="{{asset('img/plumbing/man-fixing.jpg')}}" alt="">
    </div>
    
    <!-- Первый блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 lg:order-1 order-2 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Quick fix, quality solutions</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Plumbing repair & installation</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">We provide speedy repairs to all your plumbing problems. Ensure you’re comfortable in your home or office. From repairs to drain cleaning—our team of experts are ready to help restore your plumbing to working order.</div>
        </div>
        <div class="mt-5 w-full">
            <a href="#">
                <button class="button-request hover:bg-[var(--hover)] duration-300">Request your estimate</button>
            </a>
            <img class="mt-[10px]" src="{{ asset('img/line.png') }}" alt="">
        </div>
    </div>
</div>

@include('support.home')

@include('support.complex')

@endsection
