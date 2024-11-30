@extends('layouts.app')
@section('content')
    <div class="bg-[var(--accent-color)] pr-3 pl-3 pb-5">

        <div class="w-full bg-[url(/public/img/carpentry/home-page.jpg)]">

            <div class="flex flex-col text-center text-[var(--color)] py-60">
                <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">A place to gather</p>
                <p style="font-size: var(--title-start);" class=" font-semibold leading-[70px]">Knoxville kitchen remodeling
                </p>
                <p style="font-size: var(--base-text);" class="px-5 max-w-[700px] m-auto">The heart of many homes, your
                    kitchen is a space meant for gathering as a family and spending quality time. Create a space where
                    you’re proud to make these memories with the help of our renovation and remodeling team.</p>
                <div class="mx-auto mb-10">
                    <a href="#">
                        <button class="button-request hover:bg-[var(--hover)] duration-300">Request your estimate</button>
                    </a>
                    <img class="mt-[10px]" src="{{ asset('img/line.png') }}" alt="">
                </div>
            </div>


            <div class="flex justify-end relative">
                <div
                    class="max-w-[600px] absolute top-[-150px] right-[100px] rounded-[10px] p-5 bg-[var(--color)] text-center">
                    <div>
                        <p style="font-size: 27px;">Ready to build your dream kitchen?</p>
                        <p style="font-size: var(--base-text);">Schedule your free consultation with a design and remodeling
                            expert on our team.</p>
                        <p style="font-size: 27px;">(865) 966-7648</p>
                        <div class="mx-auto ">
                            <a href="#">
                                <button class="button-request hover:bg-[var(--hover)] duration-300">Request your
                                    estimate</button>
                            </a>
                            <img class="mt-[10px] mx-auto" src="{{ asset('img/line.png') }}" alt="">
                        </div>
                    </div>

                    <!-- Изображение за пределами контейнера -->
                    <img src="{{ asset('img/kithen-remodels/men.jpg') }}" alt="Image"
                        class="absolute bottom-[-20px] left-[-40px] w-[120px] h-[120px] border-[5px] border-[var(--support-color)] rounded-full">
                </div>
            </div>
        </div>
    </div>   
        {{-- ---------------------------------------------- --}}
        <div class="w-full bg-[--support-color]">

            <div class="max-w-[1400px] m-auto flex flex-col lg:flex-row pt-40 px-5">
                <div class="m-auto">
                    <img class="w-[500px]" src="{{ asset('img/kithen-remodels/design-new.png') }}" alt="">
                </div>
                <div class="text-[var(--color)] m-auto p-10 bg-[#4c4c4c]">
                    <p style="font-size: var(--context);" class=" font-semibold">Where families gather</p>
                    <p style="font-size: var(--title-start);"
                        class=" py-0 lg:py-3 text-[#e3dad3] leading-[70px] font-semibold">A place to create memories</p>
                    <p style="font-size: var(--base-text);" class="text-[#e3dad3]">Whether it’s time spent cooking, enjoying
                        a meal, or simply gathering around the island to talk and laugh, the kitchen is a centerpeice in
                        your home. Create a more open, inviting space for family and guests alike.</p>
                </div>
            </div>

        </div>
        {{-- ----------------------------------------------------------------- --}}
<div class="bg-[var(--support-color)] max-h-[1000px] h-[100vw] p-5">

    <div class="max-w-[1400px] m-auto pt-10">
        <div class="text-[var(--color)] gap-5 flex">
            <div>
                <a class="text-[30px] border-t-2 hover:border-[var(--accent-color)] p-2" href="#">TRADITIONAL</a>
            </div>
            <div>
                <a class="text-[30px] border-t-2 hover:border-[var(--accent-color)] p-2" href="#">CONTEMPORARY</a>
            </div>
            <div>
                <a class="text-[30px] border-t-2 hover:border-[var(--accent-color)] p-2" href="#">MODERN</a>
            </div>
        </div>

        <div class="relative">
            <div class="flex gap-4 z-[5] absolute top-5">
                <div class="  rounded-[10px] left-0 bg-[#4c4c4c] text-[var(--color)] max-w-[650px] w-[50vw] p-5">
                    <div class="">
                        Our traditional kitchen styles provide an elegant, timeless aesthetic with the addition of a modern American look and feel. To guests and family members, it is often viewed as a very inviting space to spend time.
                    </div>
                    
                </div>
                <div class="flex mt-[10px]">
                    <button class="w-[30px] h-[30px] rounded-full border-2 border-[var(--color)]"><i class="text-[10px] text-[var(--color)] fa-solid fa-chevron-left"></i></button>
                    <div style="font-size: var(--context);" class="text-[var(--color)] px-5">1 / 3</div>
                    <button class="w-[30px] h-[30px] rounded-full border-2 border-[var(--color)]"><i class="text-[10px] text-[var(--color)] fa-solid fa-chevron-right"></i></button>
                </div>
            </div>


            <div class=" absolute top-[70px] left-[10vw]">
                <img class="w-[1000px]" src="{{asset('img/kithen-remodels/1.jpg')}}" alt="">
            </div>
            <div class="lg:block hidden absolute top-[200px] left-[2vw] border-[5px] border-[var(--support-color)] rounded-[10px]">
                <img class="rounded-[10px] w-[200px]" src="{{asset('img/kithen-remodels/2.jpg')}}" alt="">
            </div>
            <div class="lg:block hidden absolute top-[500px] left-[2vw] border-[5px] border-[var(--support-color)] rounded-[10px]">
                <img class="w-[300px] rounded-[10px]" src="{{asset('img/kithen-remodels/3.jpg')}}" alt="">
            </div>
        </div>

    </div>

    

</div>
        

    
@endsection
