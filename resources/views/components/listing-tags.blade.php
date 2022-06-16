@props(['tags'])

@php
    $tags = explode(',', $tags);
@endphp

@foreach($tags as $tag)

    <div class="inline-block rounded-full text-white
                bg-blue-400 hover:bg-blue-500 duration-300
                text-xs font-bold
                mr-1 md:mr-2 mb-2 px-2 md:px-4 py-1
                opacity-90 hover:opacity-100 mt-2">
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </div>
@endforeach

