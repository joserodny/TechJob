<x-app>
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <section class=" py-1 bg-blueGray-50">
                <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-slate-50 border-0">
                        <div class="rounded-t bg-white mb-0 px-6 py-6">
                            <div class="text-center flex justify-between">
                                <h6 class="text-blueGray-700 text-xl font-bold">
                                    Create Gig
                                </h6>
                                <h3>Post gig to find a developer</h3>
                            </div>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <form method="POST" action="/listings">
                                @csrf
                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Job Information
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                Company Name
                                            </label>
                                            <input name="company" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            @error('company')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                Job Title
                                            </label>
                                            <input name="title" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            @error('title')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-1/3 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                Job Location
                                            </label>
                                            <input name="location" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            @error('location')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-1/3 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                Website Url
                                            </label>
                                            <input name="website" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                                            @error('website')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-1/3 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                Email
                                            </label>
                                            <input name="email" type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                                            @error('email')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-6 border-b-1 border-blueGray-300">

                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Job Description
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                Tags (Comma Separated)
                                            </label>
                                            <input name="tags" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Example: Laravel, vue, Php, React, Javascript, Css, Html">
                                            @error('tags')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                Description
                                            </label>
                                            <textarea name="description" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4"> </textarea>
                                            @error('description')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-6 border-b-1 border-blueGray-300">

                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Upload Photo
                                </h6>
{{--                                <div class="flex flex-wrap">--}}
{{--                                    <div class="w-full lg:w-12/12 px-4">--}}
{{--                                        <div class="relative w-full mb-3">--}}
{{--                                            <input name="photo" type="file" id="file-upload" class="hidden">--}}
{{--                                            <label for="file-upload" class="z-20 flex flex-col-reverse items-center justify-center w-full h-full cursor-pointer">--}}
{{--                                                <p class="z-10 text-xs font-light text-center text-gray-500">Drag & Drop your files here</p>--}}
{{--                                                <svg class="z-10 w-8 h-8 text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>--}}
{{--                                                </svg>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        @error('photo')--}}
{{--                                        <p class="text-xs italic text-red-500">{{$message}}</p>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <button class="rounded-full">test</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</x-app>
