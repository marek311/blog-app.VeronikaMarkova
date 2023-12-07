{{--
@extends('layout1')

@section('content')
    <article>

        <h1>{!! $post->title !!}</h1>
        <p>

            By <a href="/authors/{{$post->author->username}}"> {{$post->author->name}}  </a>
            <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}}</a>
        </p>
        <div>
            {!! $post->body !!}

        </div>

    </article>

    <a href="/"> GO BACK</a>
@endsection
--}}

<x-layout>
    <main class="container mt-6 ">

         <x-clanok :post="$post"/>

    </main>

</x-layout>

