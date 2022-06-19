
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
                @auth()
                <div class="text-gray-900 md:pr-2 lg:pr-4">
                    <ul class="space-y-6 tracking-wide font-medium text-sm lg:flex md:block md:space-y-0 lg:space-y-0 ">

                        <li class="pr-4">
                            <a href="/listings/manage" class="flex items-center justify-between  transition hover:text-yellow-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Manage Listings</span>
                            </a>
                        </li>

                        <li class="pr-4 flex items-center justify-between">
                            <span class="">
                                Welcome, {{auth()->user()->firstname}}
                            </span>
                        </li>

                        <li class="flex items-center justify-between">
                            <form action="/logout" method="POST">
                                @csrf
                                <button  type="submit" title="Start buying" class="flex items-center justify-between   px-6  rounded-full transition bg-yellow-300 hover:bg-yellow-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">
                                    <span class="block text-yellow-900 font-semibold text-sm">
                                        Logout
                                    </span>
                                </button>
                            </form>
                        </li>

                    </ul>
                </div>
                @else
                <div class="w-full space-y-2 border-yellow-200 lg:space-y-0 md:w-max lg:border-l">
                    <a href="/register" type="button" title="Start buying" class="w-full py-3 px-6 text-center rounded-full transition active:bg-yellow-200 focus:bg-yellow-100 sm:w-max">
                            <span class="block text-yellow-800 font-semibold text-sm">
                                Sign up
                            </span>
                    </a>
                    <a href="/login" type="button" title="Start buying" class="w-full py-3 px-6 text-center rounded-full transition bg-yellow-300 hover:bg-yellow-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">
                            <span class="block text-yellow-900 font-semibold text-sm">
                                Login
                            </span>
                    </a>
                </div>
                @endauth
            </div>
        </div>
    </div>
</nav>



@push('js')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush
