@extends('layouts.app')

@section('title', 'Добро пожаловать!')

@section('content')
    <h1>Добро пожаловать в блог!</h1>
    <img src="{{ asset('images/ginger_cat.png') }}" alt="Welcome to the Blog!" loading="lazy">
@endsection
