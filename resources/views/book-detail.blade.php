@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container mx-auto mt-4 d-flex gap-5">
    <div class="w-75">
        <h1 class="bg-dark text-light fs-2 px-2 py-2">Book Detail</h1>
        <div class="px-2">
            <h3 class="fw-bold">Title: {{ $book->title }}</h3>
            <h5 class="">Author: {{ $detail->author }}</h5>
            <h5 class="">Publisher: {{ $detail->publisher }}</h5>
            <h5 class="">Year: {{ $detail->year }}</h5>
            <h5 class="mt-4">Description:</h5>
            <p class="">{{ $detail->description }}</p>
        </div>
    </div>
    <div class="">
        <h1 class="bg-dark text-light fs-2 px-4 py-2">Category</h1>
        @foreach ($categories as $category)
            <a href="{{ route('category', $category) }}" class="d-block bg-dark text-light text-center py-2 text-decoration-none">{{ $category->category }}</a>
        @endforeach
    </div>
</div>
@endsection