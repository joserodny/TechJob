@extends('layouts.app')

@section('content')
    @include('partials._hero')
    @foreach($joblisting as $joblistings)
        <ul>
            <li>
                <h1><a href="/listings/{{ $joblistings->id }}">{{ $joblistings->title }}</a></h1>
                <h3>{{ $joblistings->description }}</h3>

            </li>
        </ul>
    @endforeach
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
@endsection
