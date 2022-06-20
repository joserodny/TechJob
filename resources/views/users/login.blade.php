<x-app>
    <!-- component -->
    <div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
         style="background-image: url(https://images.unsplash.com/photo-1525302220185-c387a117886e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl z-10">
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold text-gray-900">
                    Welcom Back!
                </h2>
                <p class="mt-2 text-sm text-gray-600">Please sign in to your account</p>
            </div>
            <div class="flex flex-row justify-center items-center space-x-3">
                <a href="{{route('git')}}">
                 <span class="w-11 h-11 items-center justify-center inline-flex rounded-full font-bold text-lg  text-white  bg-black hover:shadow-lg cursor-pointer transition ease-in duration-300">
                <svg class="h-8 w-8 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 19c-4.286 1.35-4.286-2.55-6-3m12 5v-3.5c0-1 .099-1.405-.5-2 2.791-.3 5.5-1.366 5.5-6.04a4.567 4.567 0 0 0 -1.333 -3.21 4.192 4.192 0 00-.08-3.227s-1.05-.3-3.476 1.267a12.334 12.334 0 0 0 -6.222 0C6.462 2.723 5.413 3.023 5.413 3.023a4.192 4.192 0 0 0 -.08 3.227A4.566 4.566 0 004 9.486c0 4.64 2.709 5.68 5.5 6.014-.591.589-.56 1.183-.5 2V21" /></svg>
                </span>
                </a>
                </div>
            <div class="flex items-center justify-center space-x-2">
                <span class="h-px w-16 bg-gray-300"></span>
                <span class="text-gray-500 font-normal">OR</span>
                <span class="h-px w-16 bg-gray-300"></span>
            </div>
            <form class="mt-8 space-y-6" method="POST" action="/users/authenticate">
                @csrf
                <div class="relative">
                    <div class="absolute right-0 mt-4"><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <label class="text-sm font-bold text-gray-700 tracking-wide">Email</label>
                    <input name="email" class=" w-full text-base py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="email" placeholder="mail@gmail.com" value="{{old('email')}}">
                    @error('email')
                    <p class="text-xs italic text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mt-8 content-center">
                    <label class="text-sm font-bold text-gray-700 tracking-wide">
                        Password
                    </label>
                    <input name="password" class="w-full content-center text-base py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="password" placeholder="Enter your password">
                    @error('password')
                    <p class="text-xs italic text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 bg-indigo-500 focus:ring-indigo-400 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>
                    <div class="text-sm">
                        <a href="#" class="font-medium text-indigo-500 hover:text-indigo-500">
                            Forgot your password?
                        </a>
                    </div>
                </div>
                <div>
                    <button type="submit" class="w-full flex justify-center bg-indigo-500 text-gray-100 p-4  rounded-full tracking-wide
                                font-semibold  focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg cursor-pointer transition ease-in duration-300">
                        Sign in
                    </button>
                </div>
                <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                    <span>Don't have an account?</span>
                    <a href="/register" class="text-indigo-500 hover:text-indigo-500no-underline hover:underline cursor-pointer transition ease-in duration-300">Sign up</a>
                </p>
            </form>
        </div>
    </div>
</x-app>
