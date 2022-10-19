{{-- <x-app-layout> --}}
@extends('layouts.app')

{{-- </x-app-layout> --}}

{{-- this will be the product sections --}}

@php

    $products = [
        [
            'ttile' => 'Laravel 1',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 2',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 3',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 4',
            'img' => 'images/productone.jpg',
        ],

        [
            'ttile' => 'Laravel 5',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 6',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 7',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 8',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 9',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 11',
            'img' => 'images/productone.jpg',
        ],

        [
            'ttile' => 'Laravel 12',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 14',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 15',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 16',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 17',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 19',
            'img' => 'images/productone.jpg',
        ],

        [
            'ttile' => 'Laravel 20',
            'img' => 'images/productone.jpg',
        ],
        [
            'ttile' => 'Laravel 21',
            'img' => 'images/productone.jpg',
        ],
    ];

@endphp


@section('content')
    <div>
        <div class="flex justify-between">
            <h1 class="underline font-bold ">All products</h1>
            <h4>Filter</h4>
        </div>


        <div class="grid grid-cols-6 gap-4 mt-4 ">

          @foreach($products as $product)
             <div class="h-[200px] relative w-[200px] border bg-gray-200 rounded-md cursor-pointer ">
                    <img alt="testimage" src="{{ asset($product['img']) }}" class="w-full h-[140px]" />
                    <h4>{{$product["ttile"]}}</h4>
                    <button
                        class="text-center absolute bottom-0 left-0 bg-purple-600 hover:bg-purple-800 active:scale-90 text-white w-full ">Add to Cart</button>
                </div>
          @endforeach
        </div>

    </div>
@endsection
