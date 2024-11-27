@extends('layouts.app')
@section('content')

<div class="w-full bg-[url(/public/img/drival-repair/home-page.jpg)]">
    <div class="flex flex-col text-center text-[var(--color)] py-40">
        <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Sit back & relax</p>
        <p style="font-size: var(--title-start);" class=" font-semibold leading-[70px]">Hands-free furniture assembly</p>
        <p style="font-size: var(--base-text);" class="px-5 max-w-[700px] m-auto">Our goal is to make the process as easy and stress-free as possible for you. Simply hand over all of the materials and we’ll have your brand-new furniture piece assembled in no time. All you have to do is sit back and let all of the hard work be done for you.</p>
    </div>
</div>
{{-- ----------------------------------------------- --}}
<div class="max-w-[1400px] m-auto flex flex-wrap mt-20">
    <!-- Первое изображение -->
    <div class="lg:w-1/2 px-10 py-10 lg:order-2 order-1">
        <img src="{{asset('img/furniture/pencil-graphik.jpg')}}" alt="">
    </div>
    
    <!-- Первый блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 lg:order-1 order-2 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Any size piece</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">No job too big or small</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Our handymen aren’t just funiture assemblers, they’re also expert craftsmen and woodworkers. They can build furniture as well as assemble, so we know our way around a toolbox. There’s no furniture assembly job that will be too large or complex for our team.</div>
        </div>
    </div>
</div>
{{-- ------------------------------------------------------ --}}

@include('support.home')

<div class="max-w-[1400px] m-auto flex flex-wrap pb-20">
    <div class="lg:w-1/2 px-10 py-5 order-3">
        <img src="{{asset('img/furniture/furniture-assembly.jpg')}}" alt="">
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