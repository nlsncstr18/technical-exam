<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <title>Cocktails</title>

</head>

<body>
    <div class="main-container">

        @foreach ($cocktails as $cocktail)
            <a href="/{{ $cocktail['idDrink'] }}" class="card">
                <img src="{{ $cocktail['strDrinkThumb'] }}">
                <h2>{{ $cocktail['strDrink'] }}</h2>
            </a>
        @endforeach

    </div>

</body>

</html>
