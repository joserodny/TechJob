<nav  x-data="{ isOpen: false }"
      :aria-expanded="isOpen" class="fixed z-10 w-full bg-white md:absolute md:bg-transparent">
    <div class="container m-auto px-2 md:px-12 lg:px-7">
        <div class="flex flex-wrap items-center justify-between py-3 gap-6 md:py-4 md:gap-0">
            <div class="w-full px-6 flex justify-between lg:w-max md:px-0">
                <a href="/" aria-label="logo" class="flex space-x-2 items-center">
                    <img src="/images/logo.png" class="" alt="logo">
                </a>

                <button :aria-expanded="isOpen"
                        aria-controls="nav-list"
                        @click="isOpen = !isOpen" class="relative w-10 h-10 -mr-2 lg:hidden">
                    <div aria-hidden="true" id="line" class="inset-0 w-6 h-0.5 m-auto rounded bg-yellow-900 transtion duration-300"></div>
                    <div aria-hidden="true" id="line2" class="inset-0 w-6 h-0.5 mt-2 m-auto rounded bg-yellow-900 transtion duration-300"></div>
                </button>

            </div>

            <div :hidden="!isOpen" id="nav-list" class=" w-full lg:flex flex-wrap justify-end items-center space-y-6 p-6 rounded-xl bg-white lg:space-y-0 lg:p-0 lg:space-y-0 md:p-0 md:flex-nowrap  lg:w-7/12">
                <div class="text-gray-900 md:pr-2 lg:pr-4">
                    <ul class="space-y-6 tracking-wide font-medium text-sm lg:flex md:block md:space-y-0 lg:space-y-0 ">

                        <li class="">
                            <a href="#" class="block  transition hover:text-yellow-700">
                                <span>I've a restaurant</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="block  transition hover:text-yellow-700">
                                <span>Wishlist</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="block  transition hover:text-yellow-700">
                                <span>Cart</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="w-full space-y-2 border-yellow-200 lg:space-y-0 md:w-max lg:border-l">
                    <button type="button" title="Start buying" class="w-full py-3 px-6 text-center rounded-full transition active:bg-yellow-200 focus:bg-yellow-100 sm:w-max">
                            <span class="block text-yellow-800 font-semibold text-sm">
                                Sign up
                            </span>
                    </button>
                    <button type="button" title="Start buying" class="w-full py-3 px-6 text-center rounded-full transition bg-yellow-300 hover:bg-yellow-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">
                            <span class="block text-yellow-900 font-semibold text-sm">
                                Login
                            </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>



@push('js')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush
