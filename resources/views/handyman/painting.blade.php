@extends('layouts.app')
@section('content')

<div class="w-full bg-[url(/public/img/drival-repair/home-page.jpg)]">
    <div class="flex flex-col text-center text-[var(--color)] py-40">
        <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Add a splash of color</p>
        <p style="font-size: var(--title-start);" class=" font-semibold leading-[70px]">Painting</p>
        <p style="font-size: var(--base-text);" class="px-5 max-w-[700px] m-auto">Get a beautiful, vibrant, and durable coat of paint on your home. Our expert painters can handle your interior or exterior painting projects with efficiency and at a price that you love.</p>
    </div>
</div>
{{-- ----------------------------------------------------------------------------------------------------- --}}
<div class="max-w-[1400px] m-auto flex flex-wrap">
    <!-- Первое изображение -->
    <div class="lg:w-1/2 px-10 py-10 lg:order-2 order-1">
        <img src="{{asset('img/painting/man-painting-home.jpg')}}" alt="">
    </div>
    
    <!-- Первый блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 lg:order-1 order-2 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Get the job done fast</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Professional & quick painting</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">You can’t wait to get you favorite color up on your home, and we get that. So, we work as quickly as we can without sacrificing and ounce of quality in our workmanship. Get the beautiful quality that you expect with efficiency and professionalism.</div>
        </div>
    </div>
</div>

@include('support.home')
{{-- -------------------------------------------------------------------------------------------------------- --}}
<p style="font-size: var(--title);" class="font-semibold text-center">How we protect your property</p>

<div class="max-w-[1400px] m-auto flex flex-col lg:flex-row justify-center">

    <div class="flex-1 p-10">
        <div class="p-5 bg-[var(--support-color)] text-[var(--color)] text-center">
            <div>
                <img src="{{asset('img/painting/painters-moving-furniture.jpg')}}" alt="">
                <div class="mt-5">
                    <p style="font-size: 27px;" class=" font-semibold">We move your furniture for you</p>
                    <p style="font-size: var(--comment);" class="">Our team knows the value of your furniture, so we’ll move it off the walls and into a same part of the room.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-1 p-10">
        <div class="p-5 bg-[var(--support-color)] text-[var(--color)] text-center">
            <div>
                <img src="{{asset('img/painting/man-smiling.jpg')}}" alt="">
                <div class="mt-5">
                    <p style="font-size: 27px;" class=" font-semibold">We’re insured up to $2 million</p>
                    <p style="font-size: var(--comment);" class="">If anything goes wrong, know that you’re protected through our comprehensive insurance coverage.</p>
                </div>
            </div>
        </div>
    </div>

</div>
{{-- --------------------------------------------------------------------- --}}
<div class="max-w-[1400px] m-auto flex flex-wrap mt-10 pb-20">
    <!-- Второе изображение -->
    <div class="lg:w-1/2 px-10 py-5 order-3">
        <img src="{{asset('img/painting/yellow-home.jpg')}}" alt="">
    </div>
    
    <!-- Второй блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 order-4 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Make your color last</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Durable, beautiful finishes</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">The outdoors can put a beating on your home, including your paint job. We want your color to maintain it’s vividness and brightness for as long as possible, so we use the best techniques to make sure it can stand up to weather effects.</div>
        </div>
    </div>
</div>

@include('support.complex')
@endsection