{{-- 
@extends('back.layouts.app')
@section('content') --}}
    <div class='container'>
        <div class="p-6 bg-white border-b border-gray-200">
            <h1>Welcome</h1>  {{-- {{ Auth::user()->firstname }}  --}}
        </div>

       
    </div>


    
{{-- @endsection --}}

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div>
                    <button class="p-6" type=""><a href="{{ url('/') }}">Back to site</a></button>
                </div>
                @foreach($users as $user)
                <div class="p-6 row">
                    <p class="col-3">{{ $user ->lastname }}</p> 
                    <p class="col-3">{{ $user ->firstname }}</p>
                    <p class="col-3">{{ $user ->age }}</p> 
                    <p class="col-3">{{ $user ->status }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
 --}}