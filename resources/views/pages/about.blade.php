@extends('base')

@section('title',"Hello city | ".config('app.name'))

@section('content')
<img src="{{asset('images/flag.jpeg')}}" alt="">
    <h1 class="text-2xl font-semibold">Build with <span class="text-pink-500">&hearts;</span> by Engama</h1>
    <p class="py-3">Revenir a la <a href="{{route('home')}}">home page</a></p>
@endsection
