@extends('layouts.app')
@section('content')
    <div class="w-full bg-[url(/public/img/carpentry/home-page.jpg)]">
        <div class="flex flex-col text-center text-[var(--color)] py-40">
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Get your dream washroom</p>
            <p style="font-size: var(--title-start);" class=" font-semibold leading-[70px]">Bathroom remodeling</p>
            <p style="font-size: var(--base-text);" class="px-5 max-w-[700px] m-auto">Make your dream bathroom a reality with
                the help of our expert remodeling team. Just let us know what your vision is, and we’ll take care of the
                rest.</p>
        </div>
    </div>

    {{-- --------------------------------------------- --}}
    <div class="max-w-[1400px] m-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-20 p-10">

            <div class="flex flex-col justify-center text-center">
                <i style="font-size: 80px;" class="fa-regular fa-circle-check mb-5 text-[var(--accent-color)]"></i>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Custom designs</p>
                <div style="font-size:var(--comment)" class="">Our work is completely custom, so we can build anything
                    you’re dreaming up.</div>
            </div>
            <div class="flex flex-col justify-center text-center">
                <i style="font-size: 80px;" class="fa-regular fa-circle-check mb-5 text-[var(--accent-color)]"></i>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Hands-free work</p>
                <div style="font-size:var(--comment)" class="">Just let us know your vision and leave the rest to us.
                </div>
            </div>
            <div class="flex flex-col justify-center text-center">
                <i style="font-size: 80px;" class="fa-regular fa-circle-check mb-5 text-[var(--accent-color)]"></i>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Clean workspace</p>
                <div style="font-size:var(--comment)" class="">We’ll leave your home better than we found it with a
                    clean, organized result.</div>
            </div>
            <div class="flex flex-col justify-center text-center">
                <i style="font-size: 80px;" class="fa-regular fa-circle-check mb-5 text-[var(--accent-color)]"></i>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Licensed & insured team
                </p>
                <div style="font-size:var(--comment)" class="">Our team is fully licnensed and insured for your
                    safety.</div>
            </div>

        </div>
    </div>
    {{-- -------------------------------------------------------------------------- --}}
    <div class="max-w-[1400px] m-auto flex flex-wrap mt-10">
        <!-- Первое изображение -->
        <div class="lg:w-1/2 px-10 py-10 lg:order-2 order-1">
            <img src="{{ asset('img/bathroom/IMG_1842-scaled.jpeg') }}" alt="">
        </div>

        <!-- Первый блок с текстом -->
        <div class="lg:w-1/2 px-10 py-5 lg:order-1 order-2 flex flex-col items-center justify-center">
            <div>
                <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Make your idea a
                    reality</p>
                <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Custom bathroom
                    services</p>
                <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Every home is different and
                    needs specific modifications to make it your own. We can make your wildest dreams come true with
                    completely custom woodworking and bathroom. Whether you need a simple doorframe or custom piece, we can
                    help you out.</div>
            </div>
        </div>
    </div>
    {{-- --------------------------------------ICON---------------------------------------- --}}
    <div class="w-full">
        <div class="max-w-[1400px] m-auto py-20">
            <div class="mb-10">
                <p style="font-size: var(--context);" class="text-center font-semibold text-[var(--accent-color)]">
                    Comprehensive remodel</p>
                <p style="font-size: var(--title);" class="text-center font-semibold text-[var(--support-color)]">We work
                    with every aspect of your bathroom</p>
            </div>
            <div class="flex justify-center flex-wrap lg:gap-[100px] gap-[40px]">
                <div>
                    <img class="w-[140px] m-auto" src="{{ asset('img/bathroom/Plumbing-and-accessories.png') }}"
                        alt="">
                    <p style="font-size: var(--context);"
                        class="max-w-[150px] text-center font-semibold text-[var(--accent-color)]">Plumbing and accessories
                    </p>
                </div>
                <div>
                    <img class="w-[140px] m-auto" src="{{ asset('img/bathroom/Wall-coverings-and-paint.png') }}"
                        alt="">
                    <p style="font-size: var(--context);"
                        class="max-w-[150px] text-center font-semibold text-[var(--accent-color)]">Wall coverings and paint
                    </p>
                </div>
                <div>
                    <img class="w-[140px] m-auto" src="{{ asset('img/bathroom/Layout-changes.png') }}" alt="">
                    <p style="font-size: var(--context);"
                        class="max-w-[150px] text-center font-semibold text-[var(--accent-color)]">Layout changes</p>
                </div>
                <div>
                    <img class="w-[140px] m-auto" src="{{ asset('img/bathroom/Flooring-and-tile.png') }}" alt="">
                    <p style="font-size: var(--context);"
                        class="max-w-[150px] text-center font-semibold text-[var(--accent-color)]">Flooring and tile</p>
                </div>
                <div>
                    <img class="w-[140px] m-auto" src="{{ asset('img/bathroom/Showers-and-bath.png') }}" alt="">
                    <p style="font-size: var(--context);"
                        class="max-w-[150px] text-center font-semibold text-[var(--accent-color)]">Showers and bath</p>
                </div>
                <div>
                    <img class="w-[140px] m-auto" src="{{ asset('img/bathroom/Lighting.png') }}" alt="">
                    <p style="font-size: var(--context);"
                        class="max-w-[150px] text-center font-semibold text-[var(--accent-color)]">Lighting</p>
                </div>
            </div>
        </div>
    </div>

    @include('support.home')

    <div class="max-w-[1400px] m-auto flex flex-wrap mt-10">
        <div class="lg:w-1/2 px-10 py-5 order-3">
            <img src="{{ asset('img/bathroom/IMG_9091-scaled.jpeg') }}" alt="">
        </div>

        <!-- Второй блок с текстом -->
        <div class="lg:w-1/2 px-10 py-5 order-4 flex flex-col items-center justify-center">
            <div>
                <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Done exactly how you want</p>
                <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)]">Build your dream bathroom with custom services</p>
                <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">Get a beautiful, functional bathroom that ties into the overall style of your home. Our expert bathroom remodelers can make your vision a reality no matter your dream outcome. From simple changes to complete bathroom makeovers, we’re here to help.
                </div>
            </div>
        </div>
    </div>
{{-- -------------------------------------------MODAL GALLERY------------------------------------------ --}}







@endsection
