{{-- <x-app-layout> --}}
@extends('layouts.app')

{{-- </x-app-layout> --}}

{{-- this will be the product sections --}}
@section('content')
<div>
    <div class="flex justify-between">
            <h1 class="underline font-bold " >All products</h1>
        <h4>Filter</h4>
    </div>


    <div class="grid grid-cols-6 gap-4 mt-4 ">
    <div class="h-[200px] w-[200px] border bg-gray-200 rounded-md cursor-pointer ">01</div>
    <div class="h-[200px] w-[200px] border bg-gray-200 rounded-md cursor-pointer">01</div>
    <div class="h-[200px] w-[200px] border bg-gray-200 rounded-md cursor-pointer ">01</div>
    <div class="h-[200px] w-[200px] border bg-gray-200 rounded-md cursor-pointer">01</div>
    <div class="h-[200px] w-[200px] border bg-gray-200 rounded-md cursor-pointer">01</div>
    <div class="h-[200px] w-[200px] border bg-gray-200 rounded-md cursor-pointer">01</div>
    <div class="h-[200px] w-[200px] border bg-gray-200 rounded-md cursor-pointer">01</div>
    </div>

</div>
@endsection
