@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="py-4">
            <h1 class="text-3xl font-bold underline">POSTS</h1>
        </div>
        @foreach ($posts as $post)
            <div class="py-4 border-b border-gray-200">
                <h1 class="text-lg font-bold">POST ID: {{ $post['id'] }}</h1>
                <a href="{{ route('posts.show', $post['id']) }}" class="text-blue-500 hover:text-blue-700">TITLE:
                    {{ $post['title'] }}</a>
                @auth
                    <p class="text-gray-600">BODY: {{ $post['body'] }}</p>
                @endauth
            </div>
        @endforeach
    </div>
@endsection
