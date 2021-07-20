@extends('structure')
@section('title', '{{ $pack_name }}')

@section('content')
    <div class="container">
        <h1>{{ $pack_name }}</h1>
        <img src="{{ $img }}" alt="Image of {{ $pack_name }}">
        <p>{{ $description }}</p>
        <h3>{{ $price }}€</h3>
    </div>
@endsection
