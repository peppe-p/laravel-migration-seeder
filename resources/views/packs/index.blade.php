@extends('structure')
@section('title', 'Home')

@section('content')
    <div class="container">
        <h1>Home Pacchetti</h1>
        <div class="packs">
            @foreach ($packs as $pack)
                <div class="card">
                    <img src="{{ $pack->img }}" alt="Image of {{ $pack->pack_name }}">
                    <h3>{{ $pack->pack_name }}</h3>
                    <p>{{ $pack->description }}</p>
                    <h5>{{ $pack->price }}€</h5>
                    <a href="{{ route('packs.show', $pack->id) }}"><button>Visualizza</button></a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
