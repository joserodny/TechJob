<x-app>
    @include('partials._nav')
    @include('partials._hero')
    <section class="text-gray-600 body-font">
        <div class="container py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"><a href="/">Latest Job Ads</a>
                    </h1>
                    <div class="mb-8 h-1 w-20 bg-indigo-500 rounded"></div>
                    <a href="/listings/create" class=" w-full py-3 px-6 text-center rounded-full transition bg-yellow-300 hover:bg-yellow-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">Post Job</a>
                </div>
            </div>

            <!-- component -->
            <div class="grid grid-cols-1 lg:grid-cols-3 xl:grid-cols-4 gap-6 w-full">
                @foreach($joblistings as $joblisting)
                    <div class="relative mx-auto w-full ">
                        <div
                            class="relative inline-block duration-300 ease-in-out transition-transform transform hover:-translate-y-2 w-full">
                            <div class="shadow p-4 rounded-lg bg-slate-50">

                                <div class="mt-4">
                                    <a href="/listings/{{$joblisting->id}}">
                                        <h2 class="font-medium text-base md:text-lg text-gray-800 line-clamp-1">
                                            {{ $joblisting->title }}
                                        </h2>
                                    </a>
                                    <p class="mt-2 text-sm text-gray-800 line-clamp-1">
                                        📍{{ $joblisting->location }}
                                    </p>
                                </div>
                                <x-listing-tags :tags="$joblisting->tags"/>
                                <div class="mt-8 flex justify-start">
                                    <p class="inline-block font-semibold text-primary whitespace-nowrap leading-tight rounded-xl">
                                        <span class="text-lg">
                                            {{ $joblisting->company }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
                <div class="mb-8 px-4 mx-auto mt-8">
                    {{ $joblistings->links('pagination::tailwind') }}
                </div>
        </div>

    </section>

</x-app>
