<x-app>
    @include('partials._nav')
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

                            <a href = "mailto: {{$jobListing->email}}" class="mb-8 flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-gray-600 transition-colors duration-150 bg-blue-300 hover:bg-blue-100 active:bg-blue-400-400 focus:bg-yellow-300 sm:w-max">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                <span>&nbsp; Contact Employer</span>
                            </a>

                            <a href="{{$jobListing->website}}" class="mb-8 flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-gray-600 transition-colors duration-150 bg-blue-300 hover:bg-blue-100 active:bg-blue-400-400 focus:bg-yellow-300 sm:w-max">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                                <span>&nbsp; Visit Website</span>
                            </a>

                        </div>
                        @if($jobListing->user_id != Auth::user()->id)
                        @else
                            @auth()
                                <div class="grid grid-cols-2 w-40 ">
                                    <div>
                                        <a href="/listings/{{$jobListing->id}}/edit" class="inline-flex items-center justify-center space-x-2 border border-transparent text-sm font-medium rounded-full w-12 h-12 text-white bg-green-600 hover:bg-green-700 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div>
                                        <form method="POST" action="/listings/{{$jobListing->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"  class="inline-flex items-center justify-center space-x-2 border border-transparent text-sm font-medium rounded-full w-12 h-12 text-white bg-red-600 hover:bg-red-700 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endauth
                        @endif

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
