<!-- component -->
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
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
            <div class="px-4 w-60 max-w-full">
                <a href="javascript:void(0)" class="w-full block py-5">
                    <img
                        src="https://cdn.tailgrids.com/1.0/assets/images/logo/logo.svg"
                        alt="logo"
                        class="w-full"
                    />
                </a>
            </div>
            <div class="flex px-4 justify-between items-center w-full">
                <div>
                    <button
                        @click="navbarOpen = !navbarOpen"
                        :class="navbarOpen && 'navbarTogglerActive'"
                        id="navbarToggler"
                        class="
                  block
                  absolute
                  right-4
                  top-1/2
                  -translate-y-1/2
                  lg:hidden
                  focus:ring-2
                  ring-primary
                  px-3
                  py-[6px]
                  rounded-lg
                "
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
                        class="
                  absolute
                  py-5
                  px-6
                  bg-white
                  shadow
                  rounded-lg
                  max-w-[250px]
                  w-full
                  lg:max-w-full lg:w-full
                  right-4
                  lg:block lg:static lg:shadow-none
                  transition-all
                  top-full
                "
                    >
                        <ul class="blcok lg:flex">
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    class="
                        text-base
                        font-medium
                        text-dark
                        hover:text-primary
                        py-2
                        lg:inline-flex
                        flex
                        lg:ml-12
                      "
                                >
                                    Home
                                </a>
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    class="
                        text-base
                        font-medium
                        text-dark
                        hover:text-primary
                        py-2
                        lg:inline-flex
                        flex
                        lg:ml-12
                      "
                                >
                                    Payment
                                </a>
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    class="
                        text-base
                        font-medium
                        text-dark
                        hover:text-primary
                        py-2
                        lg:inline-flex
                        flex
                        lg:ml-12
                      "
                                >
                                    Features
                                </a>
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    class="
                        text-base
                        font-medium
                        text-dark
                        hover:text-primary
                        py-2
                        lg:inline-flex
                        flex
                        lg:ml-12
                      "
                                >
                                    Login
                                </a>
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    class="
                        text-base
                        font-medium
                        text-dark
                        hover:text-primary
                        py-2
                        lg:inline-flex
                        flex
                        lg:ml-12
                      "
                                >
                                    sign Up
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
                    <a
                        href="javascript:void(0)"
                        class="
                  text-base
                  font-medium
                  text-dark
                  hover:text-primary
                  py-3
                  px-7
                "
                    >
                        Login
                    </a>
                    <a
                        href="javascript:void(0)"
                        class="
                  text-base
                  font-medium
                  text-white
                  bg-primary
                  rounded-lg
                  py-3
                  px-7
                  hover:bg-opacity-90
                "
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
                        class="
                  text-dark
                  font-bold
                  text-4xl
                  sm:text-[42px]
                  lg:text-[40px]
                  xl:text-[42px]
                  leading-snug
                  mb-3
                "
                    >
                        Kickstart <br />
                        Startup Website <br />
                        with TailGrids.
                    </h1>
                    <p class="text-base mb-8 text-body-color max-w-[480px]">
                        With TailGrids, business and students thrive together. Business
                        can perfectly match their staffing to changing demand throughout
                        the dayed.
                    </p>
                    <ul class="flex flex-wrap items-center">
                        <li>
                            <a
                                href="javascript:void(0)"
                                class="
                      py-4
                      px-6
                      sm:px-10
                      lg:px-8
                      xl:px-10
                      inline-flex
                      items-center
                      justify-center
                      text-center text-white text-base
                      bg-primary
                      hover:bg-opacity-90
                      font-normal
                      rounded-lg
                    "
                            >
                                Get Started
                            </a>
                        </li>
                        <li>
                            <a
                                href="javascript:void(0)"
                                class="
                      py-4
                      px-6
                      sm:px-10
                      lg:px-8
                      xl:px-10
                      inline-flex
                      items-center
                      justify-center
                      text-center text-base
                      font-normal
                      text-body-color
                      hover:text-primary
                    "
                            >
                    <span class="mr-2">
                      <svg
                          width="22"
                          height="22"
                          viewBox="0 0 22 22"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                      >
                        <circle cx="11" cy="11" r="11" fill="#3056D3" />
                        <rect
                            x="6.90906"
                            y="13.3636"
                            width="8.18182"
                            height="1.63636"
                            fill="white"
                        />
                        <rect
                            x="10.1818"
                            y="6"
                            width="1.63636"
                            height="4.09091"
                            fill="white"
                        />
                        <path
                            d="M11 12.5454L13.8343 9.47726H8.16576L11 12.5454Z"
                            fill="white"
                        />
                      </svg>
                    </span>
                                Download App
                            </a>
                        </li>
                    </ul>
                    <div class="clients pt-16">
                        <h6
                            class="
                    font-normal
                    text-xs
                    flex
                    items-center
                    text-body-color
                    mb-2
                  "
                        >
                            Some Of Our Clients
                            <span
                                class="w-8 h-[1px] bg-body-color inline-block ml-2"
                            ></span>
                        </h6>
                        <div class="flex items-center">
                            <div class="w-full py-3 mr-4">
                                <img src="https://cdn.tailgrids.com/1.0/assets/images/brands/ayroui.svg" alt="ayroui" />
                            </div>
                            <div class="w-full py-3 mr-4">
                                <img
                                    src="https://cdn.tailgrids.com/1.0/assets/images/brands/graygrids.svg"
                                    alt="graygrids"
                                />
                            </div>
                            <div class="w-full py-3 mr-4">
                                <img src="https://cdn.tailgrids.com/1.0/assets/images/brands/uideck.svg" alt="uideck" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/12 px-4"></div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="lg:text-right lg:ml-auto">
                    <div class="relative inline-block z-10 pt-11 lg:pt-0">
                        <img
                            src="https://cdn.tailgrids.com/1.0/assets/images/hero/hero-image-01.png"
                            alt="hero"
                            class="max-w-full lg:ml-auto"
                        />
                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                  <svg
                      width="93"
                      height="93"
                      viewBox="0 0 93 93"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                  </svg>
                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Hero Section End -->
