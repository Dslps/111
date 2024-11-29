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
@endsection
