@extends('base')

@section('title',"Hello city | ".config('app.name'))

@section('content')
<img src="{{asset('/images/flag.jpeg')}}" alt="">
    <h1>Build with ❤️ by Engama</h1>
    <p>Revenir a la <a href="{{route('home')}}">home page</a></p>
@endsection
