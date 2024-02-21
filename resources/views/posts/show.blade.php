@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="py-4">
            <h1 class="text-3xl font-bold underline">POST DETAILS</h1>
        </div>
        <div class="py-4 border-b border-gray-200">
            <h1 class="text-lg font-bold">POST ID: {{ $post['id'] }}</h1>
            <h1 class="text-lg font-bold">TITLE: {{ $post['title'] }}</h1>
            <p class="text-gray-600">BODY: {{ $post['body'] }}</p>
        </div>
    </div>
@endsection
