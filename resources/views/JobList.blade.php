@extends('layouts.app')

@section('content')


        <ul>
            <li>
                <h1>{{ $jobList->title }}</h1>
                <h3>{{ $jobList->description }}</h3>
            </li>
        </ul>




@endsection
