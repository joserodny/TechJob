<x-app>
    <section class=" text-gray-600 body-font">
        <div class="min-h-screen container px-5 py-24 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">

                <a href="/"
                   class="w-full py-3 px-6 text-center rounded-full transition bg-blue-300 hover:bg-blue-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">Back</a>
                <div class="flex flex-col sm:flex-row mt-10">

                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div class="flex flex-col items-center text-center justify-center">
                            <img class="object-cover w-20 h-20 mb-2 rounded-full shadow" src="{{$jobListing->logo ? asset('storage/' . $jobListing->logo) : asset('https://media.istockphoto.com/vectors/no-image-available-sign-vector-id922962354?k=20&m=922962354&s=612x612&w=0&h=f-9tPXlFXtz9vg_-WonCXKCdBuPUevOBkp3DQ-i0xqo=')}}">

                            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">{{$jobListing->company}}</h2>
                            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                            <p class="mb-8 text-base">📍 {{$jobListing->location}}</p>

                            <a class="mb-8 flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-gray-600 transition-colors duration-150 bg-blue-300 hover:bg-blue-100 active:bg-blue-400-400 focus:bg-yellow-300 sm:w-max">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                <span>&nbsp; Contact Employer</span>
                            </a>

                            <a class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-gray-600 transition-colors duration-150 bg-blue-300 hover:bg-blue-100 active:bg-blue-400-400 focus:bg-yellow-300 sm:w-max">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                                <span>&nbsp; Visit Website</span>
                            </a>

                        </div>
                    </div>

                    <div
                        class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">

                        <h1 class="font-bold text-4xl text-sky-600 md:text-5xl lg:w-10/12 pb-8">Job Description</h1>
                        <x-listing-tags :tags="$jobListing->tags"/>
                        <p class="leading-relaxed text-lg mb-9">{{$jobListing->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app>
