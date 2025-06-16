@extends('base')

@section('title', config('app.name'))

@section('content')
<img src="{{asset('images/flag.jpeg')}}" alt="">
    <h1 class="text-2xl font-semibold">Hello from quebec</h1>
    <p class="py-3">Its currently {{date('h:i:s A')}}</p>
@endsection
