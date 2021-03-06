<x-app>
    @include('partials._nav')
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <section class=" py-1 bg-blueGray-50">
                <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-slate-50 border-0">
                        <div class="rounded-t bg-white mb-0 px-6 py-6">
                            <div class="text-center flex justify-between">
                                <h6 class="text-blueGray-700 text-xl font-bold">
                                    Edit: {{$jobListing->title}}
                                </h6>

                            </div>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <form method="POST" action="/listings/{{$jobListing->id}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Job Information
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                Company Name
                                            </label>
                                            <input value="{{$jobListing->company}}" name="company" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            @error('company')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                Job Title
                                            </label>
                                            <input value="{{$jobListing->title}}" name="title" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            @error('title')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-1/3 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                Job Location
                                            </label>
                                            <input value="{{$jobListing->location}}" name="location" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            @error('location')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-1/3 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                Website Url
                                            </label>
                                            <input value="{{$jobListing->website}}" name="website" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                                            @error('website')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-1/3 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                Email
                                            </label>
                                            <input value="{{$jobListing->email}}" name="email" type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
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
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                Tags (Comma Separated)
                                            </label>
                                            <input value="{{$jobListing->tags}}" name="tags" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Example: Laravel, vue, Php, React, Javascript, Css, Html">
                                            @error('tags')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                Description
                                            </label>
                                            <textarea name="description" type="text" class="whitespace-pre border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="15">
                                                {{$jobListing->description}}
                                            </textarea>
                                            @error('description')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-6 border-b-1 border-blueGray-300">

                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Upload Logo
                                </h6>
                                <div class="flex flex-wrap -mx-4">
                                    <div class="w-full lg:w-5/12 px-4">
                                        <div class="mb-12">
                                            <input name="logo" type="file"
                                                class="mb-8 w-full border-[1.5px] border-form-stroke rounded-lg font-medium text-body-color placeholder-body-color outline-none focus:border-primary active:border-primary transition disabled:bg-[#F5F7FD] disabled:cursor-default cursor-pointer file:bg-[#F5F7FD] file:border-0 file:border-solid file:border-r file:border-collapse file:border-form-stroke file:py-3 file:px-5 file:mr-5 file:text-body-color file:cursor-pointer file:hover:bg-primary file:hover:bg-opacity-10"
                                            >
                                            <img class="object-cover w-20 h-20 mb-2 rounded-full shadow" src="{{$jobListing->logo ? asset('storage/' . $jobListing->logo) : asset('https://media.istockphoto.com/vectors/no-image-available-sign-vector-id922962354?k=20&m=922962354&s=612x612&w=0&h=f-9tPXlFXtz9vg_-WonCXKCdBuPUevOBkp3DQ-i0xqo=')}}">

                                            @error('logo')
                                            <p class="text-xs italic text-red-500">{{$message}}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>


                                <button type="submit" class="w-full py-3 px-6 text-center rounded-full transition bg-yellow-300 hover:bg-yellow-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">
                                    <span class="block text-yellow-900 font-semibold text-sm">
                                        Update gig
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</x-app>
