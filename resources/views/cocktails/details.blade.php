<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cocktail List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <div class="card mt-5">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Cocktail Details</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $cocktail['strDrinkThumb'] }}" alt="{{ $cocktail['strDrink'] }}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h4 class="mb-2">Drink Name:</h4>
                    <h2 class="card-title">{{ $cocktail['strDrink'] }}</h2>
                    <h4 class="mb-2">Drink Type:</h4>
                    <h5 class="card-subtitle mb-2 text-muted">{{ $cocktail['strCategory'] }}</h5>

                    <h4>Instructions:</h4>
                    <p>{{ $cocktail['strInstructions'] }}</p>

                    <h4>Ingredients:</h4>
                    <ul>
                        @php
                            $i = 1;
                            while(isset($cocktail['strIngredient'.$i])) {
                                $ingredient = $cocktail['strIngredient'.$i];
                                $measure = $cocktail['strMeasure'.$i];
                        @endphp
                                @if (!empty($ingredient))
                                    <li>{{ $measure }} {{ $ingredient }}</li>
                                @endif
                        @php
                                $i++;
                            }
                        @endphp
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ url('/cocktails') }}" class="btn btn-secondary">Back to Cocktail List</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>