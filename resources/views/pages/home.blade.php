@extends('layouts.app')
@section('content')
    {{-- <section class="w-full bg-[#EFF3FA] pt-[170px] pb-[50px]">
    <div class="max-w-[1280px] mx-auto flex justify-between items-center px-[75px]">
        <div class="space-y-[30px]">
            <p class="bg-white inline-flex gap-[10px] py-2 px-4 rounded-full font-semibold">
                <img src="./assets/image/icons/crown.svg" alt="" />
                Most Popular 100th Product in Belanja
            </p>
            <h1 class="font-bold text-[55px] leading-[55px]">Working Faster 10x</h1>
            <p class="text-[#6A7789] text-lg leading-[34px]">
                Dolor si amet lorem super-power features riches than <br />
                any other platform devices AI integrated.
            </p>
            <div class="flex gap-3">
                <button class="font-semibold text-white bg-primary px-6 py-[18px] rounded-full">Add to Cart</button>
                <button class="font-semibold text-black bg-white px-6 py-[18px] rounded-full">View Details</button>
            </div>
        </div>
        <img src="./assets/image/hero/hero-image.png" alt="" class="h-[360px]" loading="lazy" />
    </div>
    <div class="flex mt-[50px] px-10 justify-center gap-10 mx-auto w-fit">
        <div class="flex space-x-[10px] items-center">
            <!-- <div class="rounded-full bg-white h-[50px] w-[50px] overflow-hidden border"> -->
            <img src="./assets/image/photos/sami 1.jpg" alt=""
                class="h-[50px] w-[50px] rounded-full border-white border-[5px]" />
            <!-- </div> -->
            <!-- review and name -->
            <div class="space-y-0.5">
                <p class="text-sm font-semibold leading-[22px]">Awesome product!</p>
                <p class="text-xs leading-[18px]">Jemmie Pemilia</p>
            </div>
        </div>
        <div class="flex space-x-[10px] items-center">
            <!-- <div class="rounded-full bg-white h-[50px] w-[50px] overflow-hidden border"> -->
            <img src="./assets/image/photos/sami 1-1.jpg" alt=""
                class="h-[50px] w-[50px] rounded-full border-white border-[5px]" />
            <!-- </div> -->
            <!-- review and name -->
            <div class="space-y-0.5">
                <p class="text-sm font-semibold leading-[22px]">Money saver 25%</p>
                <p class="text-xs leading-[18px]">Angga Risky</p>
            </div>
        </div>
        <div class="flex space-x-[10px] items-center">
            <!-- <div class="rounded-full bg-white h-[50px] w-[50px] overflow-hidden border"> -->
            <img src="./assets/image/photos/sami 1-2.jpg" alt=""
                class="h-[50px] w-[50px] rounded-full border-white border-[5px]" />
            <!-- </div> -->
            <!-- review and name -->
            <div class="space-y-0.5">
                <p class="text-sm font-semibold leading-[22px]">I love the warranty</p>
                <p class="text-xs leading-[18px]">Petina Malaka</p>
            </div>
        </div>
        <div class="flex space-x-[10px] items-center">
            <!-- <div class="rounded-full bg-white h-[50px] w-[50px] overflow-hidden border"> -->
            <img src="./assets/image/photos/sami 1-3.jpg" alt=""
                class="h-[50px] w-[50px] rounded-full border-white border-[5px]" />
            <!-- </div> -->
            <!-- review and name -->
            <div class="space-y-0.5">
                <p class="text-sm font-semibold leading-[22px]">Big deals ever!</p>
                <p class="text-xs leading-[18px]">Udin Sarifun</p>
            </div>
        </div>
    </div>
</section> --}}
    <div class="relative bg-cover bg-center h-screen"
        style="background-image: url('https://plus.unsplash.com/premium_photo-1682125771198-f7cbed7cb868?q=80&w=2060&auto=format&fit=crop&ixlib=rb-4.0.3');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center">
            <div class="text-center text-white px-6 md:px-12 animate__animated animate__fadeIn">
                <h1 class="text-5xl lg:text-6xl font-extrabold mb-4">Temukan Film Favoritmu</h1>
                <p class="text-lg lg:text-xl mb-8">Jelajahi berbagai genre film dan nikmati pengalaman menonton terbaik.</p>
                <a href="#movies" data-scroll-nav="1" class="btn btn-primary rounded-full transition duration-300 ease-in-out">
                    Mulai Menjelajah
                </a>
            </div>
        </div>
    </div>
    <div class="container mx-auto mt-8 mb-8" id="movies" data-scroll-index="1">
        <h1 class="lg:text-3xl text-xl font-bold text-center text-gray-800 leading-tight mt-12 mb-8">
            Temukan Film Favorit Anda dengan Mudah
        </h1>
        <div class="flex items-center justify-center mb-8 lg:p-0 px-3">
            <label class="input input-bordered flex items-center gap-2 rounded-3xl lg:w-1/2 w-full ">
                <input id="search-input" type="text" class="grow p-2" placeholder="Cari Film Favorit Kamu" />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                    <path fill-rule="evenodd"
                        d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                        clip-rule="evenodd" />
                </svg>
            </label>
        </div>
        <div id="loading" class="text-center hidden">
            <span class="loading loading-spinner text-2xl text-primary"></span>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:gap-6 gap-3 px-2 lg:px-6" id="movies-container">
        </div>
        <div class="flex justify-center items-center">
            <a href="{{ url('/movies?q=all') }}" class="btn btn-primary mt-6 text-white text-center rounded-full">Lihat Lebih Banyak</a>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('a[href="#movies"]').on('click', function(event) {
                event.preventDefault();

                $('html, body').animate({
                    scrollTop: $('#movies').offset().top
                }, 700);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            let query = new URLSearchParams(window.location.search).get('query');

            if (query) {
                $('#search-input').val(query);
                performSearch(query);
            } else {
                $('#loading').removeClass('hidden');
                $.ajax({
                    url: "{{ route('movie.search') }}", 
                    method: "GET",
                    success: function(data) {
                        $('#loading').addClass('hidden');
                        $('#movies-container').html(data);
                    }
                });
            }

            $('#search-input').on('input', function() {
                let query = $(this).val();
                if (query === "") {
                    window.history.pushState(null, '', window.location.pathname);
                } else {
                    window.history.pushState(null, '', '?query=' + encodeURIComponent(query));
                }
                $('#loading').removeClass('hidden');
                $('#no-results').addClass('hidden');
                performSearch(query);
            });

            function performSearch(query) {
                $.ajax({
                    url: "{{ route('movie.search') }}",
                    method: "GET",
                    data: {
                        query: query
                    },
                    success: function(response) {
                        $('#loading').addClass('hidden');

                        if (response.trim() === '') {
                            $('#movies-container').html('');
                            $('#no-results').removeClass('hidden');
                        } else {
                            $('#movies-container').html(response);
                            $('#no-results').addClass('hidden');
                        }
                    }
                });
            }
        });
    </script>
@endpush
