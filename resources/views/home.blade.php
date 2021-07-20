@extends('structure')
@section('title', 'Home')

@section('content')
    <div class="container">
        <h1>Home</h1>
        <a href="{{ route('packs.index') }}"><button>I Nostri Pacchetti</button></a>
    </div>
@endsection
