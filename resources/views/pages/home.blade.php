@extends('base')

@section('title', 'Hello city')

@section('content')
    <h1>Hello from quebec</h1>
    <p>Its currently {{date('h:i:s A')}}</p>
@endsection;
