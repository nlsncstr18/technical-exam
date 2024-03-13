@extends('home')

@section('content')
    <div class="main-container">
        @foreach ($cocktails as $cocktail)
            <a href="/{{ $cocktail['idDrink'] }}" class="card">
                <img src="{{ $cocktail['strDrinkThumb'] }}">
                <h2>{{ $cocktail['strDrink'] }}</h2>
            </a>
        @endforeach
    </div>
@endsection
