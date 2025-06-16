@extends('base')

@section('title', config('app.name'))

@section('content')
<img src="{{asset('/images/flag.jpeg')}}" alt="">
    <h1>Hello from quebec</h1>
    <p>Its currently {{date('h:i:s A')}}</p>
@endsection
