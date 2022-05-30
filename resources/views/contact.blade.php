@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container mx-auto mt-4 d-flex gap-5">
    <div class="w-75">
        <h1 class="bg-dark text-light fs-2 px-2 py-2">Contact</h1>
        <div class="">
            <h1 class="">Store Address</h1>
            <p class="">Jalan Pembangunan Baru Raya, <br>
                Kompleks Pertokoan Emerald Blok III/12 <br>
                Bintaro, Tangerang Selatan <br>
                Indonesia
            </p>
        </div>
        <div class="">
            <h1 class="">Open Daily</h1>
            <p class="">08.00 - 20.00</p>
        </div>
        <div class="">
            <h1 class="">Contact</h1>
            <p class="">Phone: 021-08899776655 <br>
                Email: happybookstore@happy.com
            </p>
        </div>
    </div>
    <div class="">
        <h1 class="bg-dark text-light fs-2 px-4 py-2">Category</h1>
        @foreach ($categories as $category)
            <a href="" class="d-block bg-black text-light text-center py-2">{{ $category->category }}</a>
        @endforeach
    </div>
</div>
@endsection