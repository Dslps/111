@extends('layouts.app')
@section('content')

<div class="w-full bg-[url(/public/img/drival-repair/home-page.jpg)]">
    <div class="flex flex-col text-center text-[var(--color)] py-40">
        <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Fast & affordable</p>
        <p style="font-size: var(--title-start);" class=" font-semibold leading-[70px]">Drywall repair</p>
        <p style="font-size: var(--base-text);" class="px-5 max-w-[700px] m-auto">Get a seamless repair of the hole in your wall. Once our team is done, you won’t ever be able to tell it was even there.</p>
    </div>
</div>
{{-- --------------------------------------------------------------------------------- --}}
<div class="max-w-[1400px] m-auto flex flex-wrap">
    <!-- Первое изображение -->
    <div class="lg:w-1/2 px-10 py-10 lg:order-2 order-1">
        <img src="{{asset('img/drival-repair/hole.png')}}" alt="">
    </div>
    
    <!-- Первый блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 lg:order-1 order-2 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Make your idea a reality</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Custom carpentry services</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Every home is different and needs specific modifications to make it your own. We can make your wildest dreams come true with completely custom woodworking and carpentry. Whether you need a simple doorframe or custom piece, we can help you out.</div>
        </div>
    </div>
</div>
{{-- ------------------------------------------------------------------------------------- --}}
<div class="max-w-[550px] m-auto text-center mt-20 px-10">
    <p style="font-size: var(--title);" class=" font-semibold">Kinds of Drywall Damage</p>
    <div style="font-size: var(--comment);">Drywall can become damaged in a variety of ways with a range of severity. Any kind of drywall damage should be repaired by a professional to keep your home safe and protected.</div>
</div>
{{-- ------------------------------------------------------------------------------------- --}}
<div class="max-w-[1400px] m-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-20 p-10">
        <div>
            <img class="max-w-[100px]" src="{{asset('img/drival-repair/crack.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Cracks</p>
            <div style="font-size:var(--comment)" class="">Cracks can form in drywall when it shifts because of changing weather and seasons, settling home foundations, or over-driven screws.</div>
        </div>
        <div>
            <img class="max-w-[100px]" src="{{asset('img/drival-repair/hole.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Holes</p>
            <div style="font-size:var(--comment)" class="">Cracks can form in drywall when it shifts because of changing weather and seasons, settling home foundations, or over-driven screws.</div>
        </div>
        <div>
            <img class="max-w-[100px]" src="{{asset('img/drival-repair/dent.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Dents</p>
            <div style="font-size:var(--comment)" class="">Cracks can form in drywall when it shifts because of changing weather and seasons, settling home foundations, or over-driven screws.</div>
        </div>
        <div>
            <img class="max-w-[100px]" src="{{asset('img/drival-repair/scratch.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Scratches</p>
            <div style="font-size:var(--comment)" class="">Cracks can form in drywall when it shifts because of changing weather and seasons, settling home foundations, or over-driven screws.</div>
        </div>
        <div>
            <img class="max-w-[100px]" src="{{asset('img/drival-repair/curved.svg')}}" alt="">
            <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Warping</p>
            <div style="font-size:var(--comment)" class="">Cracks can form in drywall when it shifts because of changing weather and seasons, settling home foundations, or over-driven screws.</div>
        </div>
    </div>
</div>
{{-- ---------------------------------------------------------------------------------------------------- --}}
<div class="w-full bg-[var(--comment-bg)] p-5">

    <div class="max-w-[550px] m-auto text-center px-10">
        <p style="font-size: var(--title);" class=" font-semibold">Our Drywall Repair Process</p>
        <div style="font-size: var(--comment);">Here’s what you should expect from our professional handyman services and our drywall repair process.</div>
    </div>

    <div class="max-w-[1400px] m-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mt-20">
            <div>
                <p style="font-size: var(--context);" class=" font-bold">Step 1</p>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Inspection</p>
                <div style="font-size:var(--base-text)" class="">The first step is for us to look at the extent of the damage. Warping and cracks may require different repair work than a scratch or a dent.</div>
            </div>
            <div>
                <p style="font-size: var(--context);" class=" font-bold">Step 2</p>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Estimate</p>
                <div style="font-size:var(--base-text)" class="">We’ll provide you with an estimate of how much the work will cost, including labor and materials.</div>
            </div>
            <div>
                <p style="font-size: var(--context);" class=" font-bold">Step 3</p>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Repair or Replace</p>
                <div style="font-size:var(--base-text)" class="">Depending on the type and extent of the damage, we may be able to repair your existing drywall. In some cases, however, we may need to replace an entire drywall panel. Water-damaged drywall, for example, cannot be repaired and can only be replaced.</div>
            </div>
            <div>
                <p style="font-size: var(--context);" class=" font-bold">Step 4</p>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Paint</p>
                <div style="font-size:var(--base-text)" class="">Once we’re finished with the drywall repair or replacement, we’ll paint over it so it looks just like it did before and matches your walls.</div>
            </div>
            <div>
                <p style="font-size: var(--context);" class=" font-bold">Step 5</p>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Enjoy Your Home</p>
                <div style="font-size:var(--base-text)" class="">The last step is for you to enjoy your home with the repairs complete and your walls restored to their former glory.</div>
            </div>
        </div>
    </div>
</div>

@include('support.home')

<div class="max-w-[1400px] m-auto flex flex-wrap pb-20">
    <div class="lg:w-1/2 px-10 py-5 order-3">
        <img src="{{asset('img/drival-repair/repairing-wall.jpg')}}" alt="">
    </div>
    
    <!-- Второй блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 order-4 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">In & out in no time</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Professional & quick carpentry</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">We understand that you want your wall’s damage to be over and done with. That’s why we do everything in our power to ensure a fast, professional repair. In just one visit, your wall will be back to normal without anyone suspecting a hole was ever even there.</div>
        </div>
    </div>
</div>

@include('support.complex')

@endsection