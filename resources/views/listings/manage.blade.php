<x-app>
    @include('partials._nav')
    <!-- component -->
    <section class="antialiased  text-gray-600 h-screen px-4">
        <div class="flex flex-col justify-center h-full">
            <!-- component -->
            <div class="container mx-auto px-4 sm:px-8">
                <div class="py-8">
                    <div>
                        <h2 class="text-2xl font-semibold leading-tight">Manage posted jobs</h2>
                    </div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Job title
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">

                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @forelse($listings as $listing)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                        <div class="flex items-center">
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{$listing->title}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                        <div class="flex items-center float-right">
                                            <div class="mr-3">
                                                <a href="/listings/{{$listing->id}}/edit" class="inline-flex items-center justify-center space-x-2 border border-transparent text-sm font-medium rounded-full w-12 h-12 text-white bg-green-600 hover:bg-green-700 transition-colors">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="mr-3">
                                                <form method="POST" action="/listings/{{$listing->id}}">
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
                                    </td>
                                </tr>
                                @empty
                                    <h1>Job ads not found</h1>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app>
