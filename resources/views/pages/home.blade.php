@extends('base')

@section('title', config('app.name'))

@section('content')
    <h1>Hello from quebec</h1>
    <p>Its currently {{date('h:i:s A')}}</p>
@endsection
