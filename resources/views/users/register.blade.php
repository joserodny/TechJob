<x-app>
    <div class="bg-gray-800 ">
        <!-- component -->
        <div class="grid min-h-screen place-items-center">
            <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
                <h1 class="text-xl font-semibold">Hello there ?, <span class="font-normal">please fill in your information to continue</span></h1>
                <form method="POST" action="/users" class="mt-6">
                    @csrf
                    <div class="flex justify-between gap-3">
                    <span class="w-1/2">
                      <label for="firstname" class="block text-xs font-semibold text-gray-600 uppercase">Firstname</label>
                      <input id="firstname" type="text" name="firstname" value="{{old('firstname')}}" placeholder="John" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                        @error('firstname')
                            <p class="text-xs italic text-red-500">{{$message}}</p>
                        @enderror
                    </span>
                        <span class="w-1/2">
                          <label for="lastname" class="block text-xs font-semibold text-gray-600 uppercase">Lastname</label>
                        <input id="lastname" type="text" name="lastname" value="{{old('lastname')}}" placeholder="Doe" autocomplete="family-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                        @error('lastname')
                            <p class="text-xs italic text-red-500">{{$message}}</p>
                        @enderror
                        </span>
                    </div>
                    <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                    <input id="email" type="email" name="email" value="{{old('email')}}" placeholder="john.doe@company.com" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                    @error('email')
                    <p class="text-xs italic text-red-500">{{$message}}</p>
                    @enderror
                    <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
                    <input id="password" type="password" name="password" value="{{old('password')}}" placeholder="********" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                    @error('password')
                    <p class="text-xs italic text-red-500">{{$message}}</p>
                    @enderror
                    <label for="password-confirm" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Confirm password</label>
                    <input id="password-confirm" type="password" name="password_confirmation" placeholder="********" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                    @error('password_confirmation')
                    <p class="text-xs italic text-red-500">{{$message}}</p>
                    @enderror
                    <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                        Sign up
                    </button>
                    <p class="flex justify-between inline-block mt-4 text-xs text-gray-500 cursor-pointer hover:text-black"><a href="/login">Already registered?</a></p>
                </form>
            </div>
        </div>
    </div>
</x-app>
