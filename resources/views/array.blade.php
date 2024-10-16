@extends('layouts.main')
@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">Список</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($array as $product)
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="{{$product['path']}}" alt="{{$product['title']}}">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-800">{{$product["title"]}}</h2>
                <p class="text-xl text-gray-600 mt-2">${{$product["price"]}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
