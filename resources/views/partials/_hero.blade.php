<!-- component -->
<script src="https://cdn.tailwindcss.com"></script>
<link
    rel="stylesheet"
    href="https://cdn.tailgrids.com/tailgrids-fallback.css"
/>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- ====== Navbar Section Start -->
<header
    x-data="
        {
          navbarOpen: false,
        }
      "
    class="absolute z-50 w-full left-0 top-0"
>
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="px-4 w-60 max-w-full h-24">
                <a href="javascript:void(0)" class="w-full block py-5">
                    <img
                        src="images/logo.png"
                        alt="logo"
                        class="w-full h-full"
                    />
                </a>
            </div>
            <div class="flex px-4 justify-between items-center w-full">
                <div>
                    <button
                        @click="navbarOpen = !navbarOpen"
                        :class="navbarOpen && 'navbarTogglerActive'"
                        id="navbarToggler"
                        class="block absolute right-4 top-1/2 -translate-y-1/2 lg:hidden focus:ring-2 ring-primary px-3 py-[6px] rounded-lg"
                    >
                        <span
                            class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"
                        ></span>
                        <span
                            class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"
                        ></span>
                        <span
                            class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"
                        ></span>
                    </button>
                    <nav
                        x-transition
                        :class="!navbarOpen && 'hidden'"
                        id="navbarCollapse"
                        class="absolute py-5 px-6 bg-white shadow rounded-lg max-w-[250px] w-full lg:max-w-full lg:w-full right-4 lg:block lg:static lg:shadow-none transition-all top-full"
                    >
                        <ul class="blcok lg:flex">
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    class="text-base font-medium text-dark hover:text-primary py-2 lg:inline-flex flex lg:ml-12"
                                >
                                    Home
                                </a>
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    class="text-base font-medium text-dark hover:text-primary py-2 lg:inline-flex flex lg:ml-12"
                                >
                                    Payment
                                </a>
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    class="text-base font-medium text-dark hover:text-primary py-2 lg:inline-flex flex lg:ml-12"
                                >
                                    Features
                                </a>
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    class="text-base font-medium text-dark hover:text-primary py-2 block xl:hidden lg:hidden lg:inline-flex flex lg:ml-12"
                                >
                                    Login
                                </a>
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    class="text-base font-medium text-dark block xl:hidden lg:hidden hover:text-primary py-2 lg:inline-flex flex lg:ml-12"
                                >
                                    Sign Up
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
                    <a
                        href="javascript:void(0)"
                        class="text-base font-medium text-dark hidden lg:block hover:text-primary py-3 px-7"
                    >
                        Login
                    </a>
                    <a
                        href="javascript:void(0)"
                        class="text-base font-medium text-white bg-primary rounded-lg hidden lg:block py-3 px-7 hover:bg-opacity-90"
                    >
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->

<!-- ====== Hero Section Start -->
<div class="relative pt-[120px] lg:pt-[150px] pb-[110px] bg-white">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-5/12 px-4">
                <div class="hero-content">
                    <h1
                        class="text-dark font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-3"
                    >
                        Kickstart <br />
                        Startup Website <br />
                        with TailGrids.
                    </h1>
                    <p class="text-base mb-8 text-body-color max-w-[480px]">
                        With TailGrids, business and students thrive together.
                        Business can perfectly match their staffing to changing
                        demand throughout the dayed.
                    </p>
                    <ul class="flex flex-wrap items-center">
                        @include('partials._searchbox')
                    </ul>
                    <div class="clients pt-16">
                        <h6
                            class="font-normal text-xs flex items-center text-body-color mb-2"
                        >
                            Some Of Our Clients
                            <span
                                class="w-8 h-[1px] bg-body-color inline-block ml-2"
                            ></span>
                        </h6>
                        <div class="flex items-center slider">


                            <div class="w-full py-3 mr-4">
                                <img
                                    src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg"
                                    alt="meta"
                                />
                            </div>

                                <div class="slide-track2">
                                    <div class="slide"></div>
                                    <div class="slide">
                                        <img
                                            src="https://cdn.worldvectorlogo.com/logos/microsoft.svg"
                                            alt="microsoft"
                                        />
                                    </div> &nbsp;&nbsp;&nbsp;
                                    <div class="slide">
                                        <img
                                            src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Google_Name.svg"
                                            alt="google"
                                        />
                                    </div>&nbsp;&nbsp;&nbsp;
                                    <div class="slide">
                                        <img
                                            src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg"
                                            alt="meta"
                                        />
                                    </div>&nbsp;&nbsp;&nbsp;
                                    <div class="slide">
                                        <img
                                            src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg"
                                            alt="amazon"
                                        />
                                    </div>
                                    &nbsp;&nbsp;&nbsp;

                                </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/12 px-4"></div>
            <div class="w-full lg:w-6/12 px-4 hidden md:block">
                <div class="lg:text-right lg:ml-auto">
                    <div class="relative inline-block z-10 pt-11 lg:pt-0">
                        <lottie-player
                            src="https://assets1.lottiefiles.com/packages/lf20_mrjjdbp9.json"
                            background="transparent"
                            speed="1"
                            style="width: 100%; height: 100%"
                            loop
                            autoplay
                        >
                        </lottie-player>
                        <span class="absolute -left-8 -bottom-8 z-[-1]"> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Hero Section End -->
@push('js')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endpush

@push('style')
    <style>
        .slider {
            height: 60px;
            position: relative;
            width: 100%;

            display: grid;
            place-items: center;
            overflow: hidden;
        }
        .slider::before,
        .slider::after{
            position:absolute;
            background-image:linear-gradient(to right,rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%);
            content:'';
            height:100%;width:25%;
            z-index:2;pointer-events:none;
        }
        .slider::before{
            left:0;
            top:0;
        }
        .slider::after{
            right:0;
            top:0;
            transform:rotateZ(180deg);
        }

        /*  IMPORTANT CODE BELOW */

        .slide-track {
            width: calc(150px * 20);
            display: flex;
            animation: scroll 20s linear infinite;
            justify-content: space-between;
        }

        .slide-track2 {
            width: calc(150px * 15);
            display: flex;
            animation: scroll2 15s linear infinite;
            justify-content: space-between;
        }

        .slide {
            width: 150px;
            height: 60px;

            display: grid;
            place-items: center;
            transition:0.5s;
            cursor:pointer;
        }
        .slide:hover{
            transform:scale(0.8)
        }

        @keyframes scroll {
            0% {
                transform: translateX(0px);
            }
            100% {
                transform: translateX(calc(-150px * 10));
            }
        }

        @keyframes scroll2 {
            0% {
                transform: translateX(0px);
            }
            100% {
                transform: translateX(calc(-150px * 5));
            }
        }

        @media screen and (max-width: 768px) {
            .slide-track {
                width: calc(80px * 20);
            }

            .slide-track2 {
                width: calc(80px * 15);
            }

            .slide {
                width: 80px;
            }

            @keyframes scroll {
                0% {
                    transform: translateX(0px);
                }
                100% {
                    transform: translateX(calc(-80px * 10));
                }
            }

            @keyframes scroll2 {
                0% {
                    transform: translateX(0px);
                }
                100% {
                    transform: translateX(calc(-80px * 5));
                }
            }
        }

    </style>
@endpush
