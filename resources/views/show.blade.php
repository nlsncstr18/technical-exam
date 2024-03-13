<div
    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 20px ; box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px; margin: 20px">
    <div>
        <img src="{{ $cocktail['strDrinkThumb'] }}" style="max-width: 200px;">
    </div>
    <div style="flex: 1; margin-left: 20px;">
        <h2 style="margin-bottom: 10px;">ID: {{ $cocktail['idDrink'] }}</h2>
        <h2 style="margin-bottom: 10px;">Name: {{ $cocktail['strDrink'] }}</h2>
        <h2 style="margin-bottom: 10px;">Category: {{ $cocktail['strCategory'] }}</h2>
        <h2 style="margin-bottom: 10px;">Alcoholic: {{ $cocktail['strAlcoholic'] }}</h2>
        <h2 style="margin-bottom: 10px;">Glass: {{ $cocktail['strGlass'] }}</h2>
        <h2 style="margin-bottom: 10px;">Instructions: <ul>{{ $cocktail['strInstructions'] }}</ul>
        </h2>
    </div>
</div>
<div style="text-align: center;  ">
    <a href="/"
        style="text-decoration: none; background-color: #007bff; color: #fff; padding: 10px 20px; border-radius: 5px;">Back</a>
</div>
