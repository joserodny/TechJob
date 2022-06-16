<x-app>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">
                <div class="mb-8 rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full"
                         src="https://dummyimage.com/1200x500">
                </div>
                <a href="/"
                   class="w-full py-3 px-6 text-center rounded-full transition bg-blue-300 hover:bg-blue-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">Back</a>
                <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div class="flex flex-col items-center text-center justify-center">
                            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">{{$jobListing->company}}</h2>
                            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                            <p class="mb-8 text-base">📍 {{$jobListing->location}}</p>
                            <a class="w-full py-3 px-6 text-center rounded-full transition bg-yellow-300 hover:bg-yellow-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">Apply</a>
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
